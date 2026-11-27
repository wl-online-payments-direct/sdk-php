<?php

namespace OnlinePayments\Sdk\Communication;

use CurlHandle;
use CurlMultiHandle;
use ErrorException;
use Robtimus\Multipart\MultipartFormData;
use RuntimeException;
use Throwable;
use UnexpectedValueException;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Logging\BodyObfuscator;
use OnlinePayments\Sdk\Logging\CommunicatorLogger;
use OnlinePayments\Sdk\Logging\HeaderObfuscator;
use OnlinePayments\Sdk\ProxyConfiguration;

/**
 * Class DefaultConnection
 *
 * @package OnlinePayments\Sdk\Communication
 */
class DefaultConnection implements Connection
{
    /** @var int */
    private const int DEFAULT_CONNECT_TIMEOUT = 60;

    /** @var int */
    private const int DEFAULT_READ_TIMEOUT = 60;

    /** @var CurlMultiHandle|null */
    protected ?CurlMultiHandle $multiHandle = null;

    /** @var CommunicatorLogger|null */
    protected ?CommunicatorLogger $communicatorLogger = null;

    /** @var CommunicatorLoggerHelper|null */
    private ?CommunicatorLoggerHelper $communicatorLoggerHelper = null;

    /** @var int */
    private int $connectTimeout = -1;

    /** @var int */
    private int $readTimeout = -1;

    /** @var ProxyConfiguration|null */
    private ?ProxyConfiguration $proxyConfiguration = null;

    /**
     * @param CommunicatorConfiguration|null $communicatorConfiguration
     */
    public function __construct(?CommunicatorConfiguration $communicatorConfiguration = null)
    {
        if ($communicatorConfiguration !== null) {
            $this->connectTimeout = $communicatorConfiguration->getConnectTimeout();
            $this->readTimeout = $communicatorConfiguration->getReadTimeout();
            $this->proxyConfiguration = $communicatorConfiguration->getProxyConfiguration();
        }
    }

    public function __destruct()
    {
        if ($this->multiHandle !== null) {
            curl_multi_close($this->multiHandle);
            $this->multiHandle = null;
        }
    }

    /**
     * @param string $requestUri
     * @param array<string, string> $requestHeaders
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    #[\Override]
    public function get(string $requestUri, array $requestHeaders, callable $responseHandler): void
    {
        $requestId = UuidGenerator::generatedUuid();
        $this->logRequest($requestId, 'GET', $requestUri, $requestHeaders);
        try {
            $response = $this->executeRequest('GET', $requestUri, $requestHeaders, '', $responseHandler);
            if ($response) {
                $this->logResponse($requestId, $requestUri, $response);
            }
        } catch (Throwable $exception) {
            $this->logException($requestId, $requestUri, $exception);
            throw $exception;
        }
    }

    /**
     * @param string $requestUri
     * @param array<string, string> $requestHeaders
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    #[\Override]
    public function delete(string $requestUri, array $requestHeaders, callable $responseHandler): void
    {
        $requestId = UuidGenerator::generatedUuid();
        $this->logRequest($requestId, 'DELETE', $requestUri, $requestHeaders);
        try {
            $response = $this->executeRequest('DELETE', $requestUri, $requestHeaders, '', $responseHandler);
            if ($response) {
                $this->logResponse($requestId, $requestUri, $response);
            }
        } catch (Throwable $exception) {
            $this->logException($requestId, $requestUri, $exception);
            throw $exception;
        }
    }

    /**
     * @param string $requestUri
     * @param array<string, string> $requestHeaders
     * @param string|MultipartFormDataObject $body
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    #[\Override]
    public function post(
        string $requestUri,
        array $requestHeaders,
        string|MultipartFormDataObject $body,
        callable $responseHandler,
    ): void {
        $requestId = UuidGenerator::generatedUuid();
        $bodyToLog = is_string($body) ? $body : '<binary content>';
        $this->logRequest($requestId, 'POST', $requestUri, $requestHeaders, $bodyToLog);
        try {
            $response = $this->executeRequest('POST', $requestUri, $requestHeaders, $body, $responseHandler);
            if ($response) {
                $this->logResponse($requestId, $requestUri, $response);
            }
        } catch (Throwable $exception) {
            $this->logException($requestId, $requestUri, $exception);
            throw $exception;
        }
    }

    /**
     * @param string $requestUri
     * @param array<string, string> $requestHeaders
     * @param string|MultipartFormDataObject $body
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    #[\Override]
    public function put(
        string $requestUri,
        array $requestHeaders,
        string|MultipartFormDataObject $body,
        callable $responseHandler,
    ): void {
        $requestId = UuidGenerator::generatedUuid();
        $bodyToLog = is_string($body) ? $body : '<binary content>';
        $this->logRequest($requestId, 'PUT', $requestUri, $requestHeaders, $bodyToLog);
        try {
            $response = $this->executeRequest('PUT', $requestUri, $requestHeaders, $body, $responseHandler);
            if ($response) {
                $this->logResponse($requestId, $requestUri, $response);
            }
        } catch (Throwable $exception) {
            $this->logException($requestId, $requestUri, $exception);
            throw $exception;
        }
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    #[\Override]
    public function enableLogging(CommunicatorLogger $communicatorLogger): void
    {
        $this->communicatorLogger = $communicatorLogger;
    }

    #[\Override]
    public function disableLogging(): void
    {
        $this->communicatorLogger = null;
    }

    /**
     * @param string $httpMethod
     * @param string $requestUri
     * @param array<string, string> $requestHeaders
     * @param string|MultipartFormDataObject $body
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     * @return ConnectionResponse|null
     * @throws CommunicationException
     */
    protected function executeRequest(
        string $httpMethod,
        string $requestUri,
        array $requestHeaders,
        string|MultipartFormDataObject $body,
        callable $responseHandler,
    ): ?ConnectionResponse {
        if (!in_array($httpMethod, ['GET', 'DELETE', 'POST', 'PUT'], true)) {
            throw new UnexpectedValueException(sprintf('Http method \'%s\' is not supported', $httpMethod));
        }
        $curlHandle = $this->getCurlHandle();
        $this->setCurlOptions($curlHandle, $httpMethod, $requestUri, $requestHeaders, $body);
        return $this->executeCurlHandle($curlHandle, $responseHandler);
    }

    /**
     * @return CurlHandle
     * @throws CommunicationException
     */
    protected function getCurlHandle(): CurlHandle
    {
        $curlHandle = curl_init();
        if ($curlHandle === false) {
            throw new CommunicationException(
                'Cannot initialize cUrl curlHandle',
                new RuntimeException('curl_init returned false'),
            );
        }
        return $curlHandle;
    }

    /**
     * @param CurlMultiHandle $multiHandle
     * @param CurlHandle $curlHandle
     * @throws CommunicationException
     */
    private function executeCurlHandleShared(CurlMultiHandle $multiHandle, CurlHandle $curlHandle): void
    {
        $running = 0;
        do {
            $status = curl_multi_exec($multiHandle, $running);
            if ($status > CURLM_OK) {
                $errorMessage = 'cURL error ' . $status;
                if (function_exists('curl_multi_strerror')) {
                    $errorMessage .= ' (' . curl_multi_strerror($status) . ')';
                }
                throw new CommunicationException(
                    $errorMessage,
                    new ErrorException($errorMessage, $status, E_WARNING),
                );
            }
            $info = curl_multi_info_read($multiHandle);
            if ($info && isset($info['result']) && $info['result'] !== CURLE_OK) {
                $errorMessage = 'cURL error ' . $info['result'];
                if (function_exists('curl_strerror')) {
                    $errorMessage .= ' (' . curl_strerror($info['result']) . ')';
                }
                throw new CommunicationException(
                    $errorMessage,
                    new ErrorException($errorMessage, $info['result'], E_WARNING),
                );
            }
            curl_multi_select($multiHandle);
        } while ($running > 0);
    }

    /**
     * @param CurlHandle $curlHandle
     * @param callable $responseHandler
     * @return ConnectionResponse|null
     * @throws Throwable
     */
    private function executeCurlHandle(CurlHandle $curlHandle, callable $responseHandler): ?ConnectionResponse
    {
        $multiHandle = $this->getCurlMultiHandle();
        curl_multi_add_handle($multiHandle, $curlHandle);

        $headerBuilder = new ResponseHeaderBuilder();
        $headerFunction = function (CurlHandle $ch, string $data) use ($headerBuilder): int {
            $headerBuilder->append($data);
            return strlen($data);
        };

        $responseBuilder = $this->communicatorLogger ? new ResponseBuilder() : null;
        $writeFunction = function (CurlHandle $ch, string $data) use ($headerBuilder, $responseBuilder, $responseHandler): int {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $headers = $headerBuilder->getHeaders();
            $responseHandler($httpStatusCode, $data, $headers);
            if ($responseBuilder) {
                $responseBuilder->setHttpStatusCode($httpStatusCode);
                $responseBuilder->setHeaders($headers);
                if ($this->isBinaryResponse($headerBuilder)) {
                    $responseBuilder->setBody('<binary content>');
                } else {
                    $responseBuilder->appendBody($data);
                }
            }
            return strlen($data);
        };

        curl_setopt($curlHandle, CURLOPT_HEADERFUNCTION, $headerFunction);
        curl_setopt($curlHandle, CURLOPT_WRITEFUNCTION, $writeFunction);

        try {
            $this->executeCurlHandleShared($multiHandle, $curlHandle);

            // always emit an empty chunk, to make sure that the status code and headers are sent,
            // even if there is no response body
            $writeFunction($curlHandle, '');

            return $responseBuilder ? $responseBuilder->getResponse() : null;
        } finally {
            curl_multi_remove_handle($multiHandle, $curlHandle);
        }
    }

    /**
     * @param CurlHandle $curlHandle
     * @param string $httpMethod
     * @param string $requestUri
     * @param array<int|string, string> $requestHeaders
     * @param string|MultipartFormDataObject $body
     */
    protected function setCurlOptions(
        CurlHandle $curlHandle,
        string $httpMethod,
        string $requestUri,
        array $requestHeaders,
        string|MultipartFormDataObject $body,
    ): void {
        curl_setopt($curlHandle, CURLOPT_HEADER, false);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_CUSTOMREQUEST, $httpMethod);
        curl_setopt($curlHandle, CURLOPT_URL, $requestUri);
        curl_setopt($curlHandle, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);

        curl_setopt(
            $curlHandle,
            CURLOPT_CONNECTTIMEOUT,
            $this->connectTimeout > 0 ? $this->connectTimeout : self::DEFAULT_CONNECT_TIMEOUT,
        );
        curl_setopt(
            $curlHandle,
            CURLOPT_TIMEOUT,
            $this->readTimeout > 0 ? $this->readTimeout : self::DEFAULT_READ_TIMEOUT,
        );

        if (in_array($httpMethod, ['PUT', 'POST'], true) && $body) {
            if (is_string($body)) {
                $useCompression = $this->shouldCompressRequestBody($requestHeaders);

                if ($useCompression) {
                    $gzip = gzencode($body, 9);
                    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $gzip !== false ? $gzip : $body);
                } else {
                    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $body);
                }
            } elseif ($body instanceof MultipartFormDataObject) {
                $multipart = new MultipartFormData($body->getBoundary());
                foreach ($body->getValues() as $name => $value) {
                    $multipart->addValue($name, $value);
                }
                foreach ($body->getFiles() as $name => $file) {
                    $multipart->addFile($name, $file->getFileName(), $file->getContent(), $file->getContentType(), $file->getContentLength());
                }
                $multipart->finish();

                $contentLength = $multipart->getContentLength();
                if ($contentLength >= 0) {
                    $requestHeaders[] = 'Content-Length: ' . $contentLength;
                }
                curl_setopt($curlHandle, CURLOPT_READFUNCTION, $multipart->curl_read(...));
                curl_setopt($curlHandle, CURLOPT_UPLOAD, true);
            }
        }

        if (!empty($requestHeaders)) {
            curl_setopt($curlHandle, CURLOPT_HTTPHEADER, HttpHeaderHelper::generateRawHeaders($requestHeaders));
        }

        if ($this->proxyConfiguration !== null) {
            $curlProxy = $this->proxyConfiguration->getCurlProxy();
            if (!empty($curlProxy)) {
                curl_setopt($curlHandle, CURLOPT_PROXY, $curlProxy);
            }
            $curlProxyUserPwd = $this->proxyConfiguration->getCurlProxyUserPwd();
            if (!empty($curlProxyUserPwd)) {
                curl_setopt($curlHandle, CURLOPT_PROXYUSERPWD, $curlProxyUserPwd);
            }
        }
    }

    /**
     * @return CurlMultiHandle
     */
    private function getCurlMultiHandle(): CurlMultiHandle
    {
        if ($this->multiHandle === null) {
            $this->multiHandle = curl_multi_init();
        }
        return $this->multiHandle;
    }

    /**
     * @param ResponseHeaderBuilder $headerBuilder
     * @return bool
     */
    private function isBinaryResponse(ResponseHeaderBuilder $headerBuilder): bool
    {
        $contentType = $headerBuilder->getContentType();
        if (!$contentType) {
            return false;
        }
        // does not start with text/
        return !str_starts_with($contentType, 'text/')
            // does not contain json
            && !str_contains($contentType, 'json')
            // does not contain xml
            && !str_contains($contentType, 'xml');
    }

    /**
     * @param string $requestId
     * @param string $requestMethod
     * @param string $requestUri
     * @param array<string, string> $requestHeaders
     * @param string $requestBody
     */
    protected function logRequest(
        string $requestId,
        string $requestMethod,
        string $requestUri,
        array $requestHeaders,
        string $requestBody = '',
    ): void {
        if ($this->communicatorLogger) {
            $this->getCommunicatorLoggerHelper()->logRequest(
                $this->communicatorLogger,
                $requestId,
                $requestMethod,
                $requestUri,
                $requestHeaders,
                $requestBody,
            );
        }
    }

    /**
     * @param string $requestId
     * @param string $requestUri
     * @param ConnectionResponseInterface $response
     */
    protected function logResponse(string $requestId, string $requestUri, ConnectionResponseInterface $response): void
    {
        if ($this->communicatorLogger) {
            $this->getCommunicatorLoggerHelper()->logResponse(
                $this->communicatorLogger,
                $requestId,
                $requestUri,
                $response,
            );
        }
    }

    /**
     * @param string $requestId
     * @param string $requestUri
     * @param Throwable $exception
     */
    protected function logException(string $requestId, string $requestUri, Throwable $exception): void
    {
        if ($this->communicatorLogger) {
            $this->getCommunicatorLoggerHelper()->logException(
                $this->communicatorLogger,
                $requestId,
                $requestUri,
                $exception,
            );
        }
    }

    /**
     * @return CommunicatorLoggerHelper
     */
    protected function getCommunicatorLoggerHelper(): CommunicatorLoggerHelper
    {
        if ($this->communicatorLoggerHelper === null) {
            $this->communicatorLoggerHelper = new CommunicatorLoggerHelper();
        }
        return $this->communicatorLoggerHelper;
    }

    /**
     * @param BodyObfuscator $bodyObfuscator
     */
    public function setBodyObfuscator(BodyObfuscator $bodyObfuscator): void
    {
        $this->getCommunicatorLoggerHelper()->setBodyObfuscator($bodyObfuscator);
    }

    /**
     * @param HeaderObfuscator $headerObfuscator
     */
    public function setHeaderObfuscator(HeaderObfuscator $headerObfuscator): void
    {
        $this->getCommunicatorLoggerHelper()->setHeaderObfuscator($headerObfuscator);
    }

    /**
     * @param array<int|string, string> $requestHeaders
     * @return bool
     */
    private function shouldCompressRequestBody(array $requestHeaders): bool
    {
        if (!array_key_exists('Content-Encoding', $requestHeaders)) {
            return false;
        }

        $value = $requestHeaders['Content-Encoding'];

        return strcasecmp((string) $value, 'gzip') === 0;
    }
}
