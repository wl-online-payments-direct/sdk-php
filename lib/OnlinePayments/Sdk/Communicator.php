<?php

namespace OnlinePayments\Sdk;

use DateTime;
use Exception;
use InvalidArgumentException;
use UnexpectedValueException;
use OnlinePayments\Sdk\Authentication\Authenticator;
use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use OnlinePayments\Sdk\Communication\DefaultConnection;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\MetadataProvider;
use OnlinePayments\Sdk\Communication\MetadataProviderInterface;
use OnlinePayments\Sdk\Communication\MultipartDataObject;
use OnlinePayments\Sdk\Communication\MultipartFormDataObject;
use OnlinePayments\Sdk\Communication\RequestObject;
use OnlinePayments\Sdk\Communication\ResponseBuilder;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communication\ResponseFactory;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Logging\CommunicatorLogger;

/**
 * Class Communicator
 *
 * @package OnlinePayments\Sdk
 */
class Communicator implements CommunicatorInterface
{
    public const MIME_APPLICATION_JSON = 'application/json';
    private const string CONTENT_ENCODING_HEADER = 'Content-Encoding';
    private const string CONTENT_ENCODING_GZIP   = 'gzip';

    /** @var string */
    private readonly string $apiEndpoint;

    /** @var Connection */
    private readonly Connection $connection;

    /** @var MetadataProviderInterface */
    private readonly MetadataProviderInterface $metadataProvider;

    /** @var ResponseFactory|null */
    private ?ResponseFactory $responseFactory = null;

    /** @var CommunicatorLogger|null */
    private ?CommunicatorLogger $communicatorLogger = null;

    /**
     * @param CommunicatorConfiguration $communicatorConfiguration
     * @param Authenticator $authenticator
     * @param Connection|null $connection
     * @param MetadataProviderInterface|null $metadataProvider
     */
    public function __construct(
        CommunicatorConfiguration $communicatorConfiguration,
        private readonly Authenticator $authenticator,
        ?Connection $connection = null,
        ?MetadataProviderInterface $metadataProvider = null,
    ) {
        $this->apiEndpoint = $communicatorConfiguration->getApiEndpoint();
        $this->connection = $connection ?? new DefaultConnection($communicatorConfiguration);
        $this->metadataProvider = $metadataProvider ?? new MetadataProvider($communicatorConfiguration);
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    #[\Override]
    public function enableLogging(CommunicatorLogger $communicatorLogger): void
    {
        $this->communicatorLogger = $communicatorLogger;
        $this->connection->enableLogging($communicatorLogger);
    }

    #[\Override]
    public function disableLogging(): void
    {
        $this->communicatorLogger = null;
        $this->connection->disableLogging();
    }

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject|null
     * @throws Exception
     */
    #[\Override]
    public function get(
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): ?DataObject {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('GET', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        return $this->executeRequest(
            'GET',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            null,
            $responseClassMap,
            $callContext,
        );
    }

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    #[\Override]
    public function getWithBinaryResponse(
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): void {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('GET', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        $this->executeRequest(
            'GET',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            null,
            $responseClassMap,
            $callContext,
            $bodyHandler,
        );
    }

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject|null
     * @throws Exception
     */
    #[\Override]
    public function delete(
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): ?DataObject {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('DELETE', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        return $this->executeRequest(
            'DELETE',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            null,
            $responseClassMap,
            $callContext,
        );
    }

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    #[\Override]
    public function deleteWithBinaryResponse(
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): void {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        $requestHeaders =
            $this->getRequestHeaders('DELETE', $relativeUriPathWithRequestParameters, null, $clientMetaInfo, $callContext);

        $this->executeRequest(
            'DELETE',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            null,
            $responseClassMap,
            $callContext,
            $bodyHandler,
        );
    }

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject|null
     * @throws Exception
     */
    #[\Override]
    public function post(
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): ?DataObject {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        [$contentType, $requestBody] = $this->getContentTypeAndRequestBody($requestBodyObject);
        $requestHeaders =
            $this->getRequestHeaders('POST', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);
        $requestHeaders = $this->applyGzip('POST', $relativeUriPathWithRequestParameters, $requestHeaders, $contentType, $requestBody, $callContext);

        return $this->executeRequest(
            'POST',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseClassMap,
            $callContext,
        );
    }

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    #[\Override]
    public function postWithBinaryResponse(
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): void {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        [$contentType, $requestBody] = $this->getContentTypeAndRequestBody($requestBodyObject);
        $requestHeaders =
            $this->getRequestHeaders('POST', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);
        $requestHeaders = $this->applyGzip('POST', $relativeUriPathWithRequestParameters, $requestHeaders, $contentType, $requestBody, $callContext);

        $this->executeRequest(
            'POST',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseClassMap,
            $callContext,
            $bodyHandler,
        );
    }

    /**
     * @param ResponseClassMap $responseClassMap
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @return DataObject|null
     * @throws Exception
     */
    #[\Override]
    public function put(
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): ?DataObject {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        [$contentType, $requestBody] = $this->getContentTypeAndRequestBody($requestBodyObject);
        $requestHeaders =
            $this->getRequestHeaders('PUT', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);
        $requestHeaders = $this->applyGzip('PUT', $relativeUriPathWithRequestParameters, $requestHeaders, $contentType, $requestBody, $callContext);

        return $this->executeRequest(
            'PUT',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseClassMap,
            $callContext,
        );
    }

    /**
     * @param callable $bodyHandler Callable accepting a response body chunk and the response headers
     * @param ResponseClassMap $responseClassMap Used for error handling
     * @param string $relativeUriPath
     * @param string $clientMetaInfo
     * @param DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject
     * @param RequestObject|null $requestParameters
     * @param CallContext|null $callContext
     * @throws Exception
     */
    #[\Override]
    public function putWithBinaryResponse(
        callable $bodyHandler,
        ResponseClassMap $responseClassMap,
        string $relativeUriPath,
        string $clientMetaInfo = '',
        DataObject|MultipartDataObject|MultipartFormDataObject|null $requestBodyObject = null,
        ?RequestObject $requestParameters = null,
        ?CallContext $callContext = null,
    ): void {
        $relativeUriPathWithRequestParameters =
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
        [$contentType, $requestBody] = $this->getContentTypeAndRequestBody($requestBodyObject);
        $requestHeaders =
            $this->getRequestHeaders('PUT', $relativeUriPathWithRequestParameters, $contentType, $clientMetaInfo, $callContext);
        $requestHeaders = $this->applyGzip('PUT', $relativeUriPathWithRequestParameters, $requestHeaders, $contentType, $requestBody, $callContext);

        $this->executeRequest(
            'PUT',
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
            $requestBody,
            $responseClassMap,
            $callContext,
            $bodyHandler,
        );
    }

    /**
     * @param ConnectionResponseInterface $response
     * @param CallContext|null $callContext
     */
    protected function updateCallContext(ConnectionResponseInterface $response, ?CallContext $callContext = null): void
    {
        if ($callContext === null) {
            return;
        }
        $callContext->setIdempotenceRequestTimestamp(
            $response->getHeaderValue('X-GCS-Idempotence-Request-Timestamp'),
        );
        $callContext->setIdempotenceResponseDateTime(
            $this->parseIdempotenceResponseDateTime($response->getHeaderValue('IdempotencyResponseDatetime')),
        );
    }

    /**
     * Parses the value of the IdempotencyResponseDatetime header.
     *
     * @param string $headerValue
     * @return DateTime|null
     */
    private function parseIdempotenceResponseDateTime(string $headerValue): ?DateTime
    {
        if ($headerValue === '') {
            return null;
        }
        try {
            return new DateTime($headerValue);
        } catch (Exception) {
            $this->communicatorLogger?->log(sprintf(
                "Ignoring invalid value '%s' for response header 'IdempotencyResponseDatetime'",
                $headerValue,
            ));
            return null;
        }
    }

    /**
     * @param string $relativeUriPath
     * @param RequestObject|null $requestParameters
     * @return string
     * @throws Exception
     */
    protected function getRequestUri(string $relativeUriPath, ?RequestObject $requestParameters = null): string
    {
        return
            $this->apiEndpoint .
            $this->getRelativeUriPathWithRequestParameters($relativeUriPath, $requestParameters);
    }

    /**
     * @param string $httpMethod
     * @param string $relativeUriPathWithRequestParameters
     * @param string|null $contentType
     * @param string $clientMetaInfo
     * @param CallContext|null $callContext
     * @return array<string, string>
     */
    protected function getRequestHeaders(
        string $httpMethod,
        string $relativeUriPathWithRequestParameters,
        ?string $contentType = null,
        string $clientMetaInfo = '',
        ?CallContext $callContext = null,
    ): array {
        $rfc2616Date = self::getRfc2616Date();
        $requestHeaders = [];
        if (!empty($contentType)) {
            $requestHeaders['Content-Type'] = $contentType;
        }
        $requestHeaders['Date'] = $rfc2616Date;
        if ($clientMetaInfo) {
            $requestHeaders['X-GCS-ClientMetaInfo'] = $clientMetaInfo;
        }
        $requestHeaders['X-GCS-ServerMetaInfo'] = $this->metadataProvider->getServerMetaInfoValue();
        if ($callContext && $callContext->getIdempotenceKey() !== '') {
            $requestHeaders['X-GCS-Idempotence-Key'] = $callContext->getIdempotenceKey();
        }
        $requestHeaders = array_map(self::validateHeaderValue(...), $requestHeaders);
        $authorization = $this->authenticator->getAuthorization(
            $httpMethod,
            $relativeUriPathWithRequestParameters,
            $requestHeaders,
        );
        $requestHeaders['Authorization'] = self::validateHeaderValue($authorization);
        return $requestHeaders;
    }

    /**
     * Rejects line breaks so a header value cannot create additional headers.
     *
     * @param string $value
     * @return string
     */
    private static function validateHeaderValue(string $value): string
    {
        if (str_contains($value, "\r") || str_contains($value, "\n")) {
            throw new InvalidArgumentException('HTTP header values must not contain line breaks');
        }
        return $value;
    }

    /**
     * Adds the Content-Encoding header if gzip is enabled in the call context.
     *
     * @param string $httpMethod
     * @param string $relativeUriPathWithRequestParameters
     * @param array<string, string> $requestHeaders
     * @param string $contentType
     * @param string|MultipartFormDataObject $requestBody
     * @param CallContext|null $callContext
     * @return array<string, string>
     */
    private function applyGzip(
        string $httpMethod,
        string $relativeUriPathWithRequestParameters,
        array $requestHeaders,
        string $contentType,
        string|MultipartFormDataObject $requestBody,
        ?CallContext $callContext,
    ): array {
        if (
            $contentType === self::MIME_APPLICATION_JSON && $requestBody !== '' && $callContext && $callContext->getGzip()
            && function_exists('gzencode')
        ) {
            $requestHeaders[self::CONTENT_ENCODING_HEADER] = self::CONTENT_ENCODING_GZIP;

            $requestHeaders['Authorization'] = $this->authenticator->getAuthorization(
                $httpMethod,
                $relativeUriPathWithRequestParameters,
                $requestHeaders,
            );
        }
        return $requestHeaders;
    }

    /**
     * Returns the current date and time in the format used by the Date header (RFC 2616).
     *
     * @return string
     */
    protected static function getRfc2616Date(): string
    {
        return gmdate('D, d M Y H:i:s T');
    }

    /**
     * @deprecated Use getRfc2616Date() instead; the name of this method contains a typo.
     * @return string
     */
    protected static function getRfc161Date(): string
    {
        return self::getRfc2616Date();
    }

    /**
     * @param string $relativeUriPath
     * @param RequestObject|null $requestParameters
     * @return string
     */
    protected function getRelativeUriPathWithRequestParameters(
        string $relativeUriPath,
        ?RequestObject $requestParameters = null,
    ): string {
        if ($requestParameters === null) {
            return $relativeUriPath;
        }
        $requestParameterObjectVars = method_exists($requestParameters, 'toArray') ?
            $requestParameters->toArray() : get_object_vars($requestParameters);
        if (count($requestParameterObjectVars) === 0) {
            return $relativeUriPath;
        }
        $httpQuery = http_build_query($requestParameterObjectVars);
        if ($httpQuery === '') {
            return $relativeUriPath;
        }
        // remove [0], [1] etc. that are added if properties are arrays
        $httpQuery = preg_replace('/%5B[0-9]+%5D/simU', '', $httpQuery);
        return $relativeUriPath . '?' . $httpQuery;
    }

    /**
     * @return ResponseFactory
     */
    protected function getResponseFactory(): ResponseFactory
    {
        if ($this->responseFactory === null) {
            $this->responseFactory = new ResponseFactory();
        }
        return $this->responseFactory;
    }

    /**
     * Returns the content type and the body to send for a request body object.
     *
     * @param mixed $requestBodyObject
     * @return array{0: string, 1: string|MultipartFormDataObject}
     * @throws UnexpectedValueException if the request body object is not supported
     */
    private function getContentTypeAndRequestBody(mixed $requestBodyObject): array
    {
        if ($requestBodyObject instanceof MultipartFormDataObject) {
            return [$requestBodyObject->getContentType(), $requestBodyObject];
        }
        if ($requestBodyObject instanceof MultipartDataObject) {
            $multipart = $requestBodyObject->toMultipartFormDataObject();
            return [$multipart->getContentType(), $multipart];
        }
        if ($requestBodyObject instanceof DataObject || $requestBodyObject === null) {
            return [static::MIME_APPLICATION_JSON, $requestBodyObject !== null ? $requestBodyObject->toJson() : ''];
        }
        throw new UnexpectedValueException('Unsupported request body');
    }

    /**
     * Sends the request through the connection and handles the response.
     *
     * @param 'GET'|'DELETE'|'POST'|'PUT' $httpMethod
     * @param string $relativeUriPathWithRequestParameters
     * @param array<string, string> $requestHeaders
     * @param string|MultipartFormDataObject|null $requestBody the request body; only used for POST and PUT
     * @param ResponseClassMap $responseClassMap
     * @param CallContext|null $callContext
     * @param callable|null $bodyHandler Callable accepting a response body chunk and the response headers
     * @return DataObject|null
     * @throws Exception
     */
    private function executeRequest(
        string $httpMethod,
        string $relativeUriPathWithRequestParameters,
        array $requestHeaders,
        string|MultipartFormDataObject|null $requestBody,
        ResponseClassMap $responseClassMap,
        ?CallContext $callContext,
        ?callable $bodyHandler = null,
    ): ?DataObject {
        $responseBuilder = new ResponseBuilder();
        if ($bodyHandler === null) {
            $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder): void {
                $responseBuilder->setHttpStatusCode($httpStatusCode);
                $responseBuilder->setHeaders($headers);
                $responseBuilder->appendBody($data);
            };
        } else {
            $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder, $bodyHandler): void {
                $responseBuilder->setHttpStatusCode($httpStatusCode);
                $responseBuilder->setHeaders($headers);
                if ($httpStatusCode >= 400) {
                    $responseBuilder->appendBody($data);
                } else {
                    $bodyHandler($data, $headers);
                }
            };
        }

        $requestUri = $this->apiEndpoint . $relativeUriPathWithRequestParameters;
        match ($httpMethod) {
            'GET' => $this->connection->get($requestUri, $requestHeaders, $responseHandler),
            'DELETE' => $this->connection->delete($requestUri, $requestHeaders, $responseHandler),
            'POST' => $this->connection->post($requestUri, $requestHeaders, $requestBody, $responseHandler),
            'PUT' => $this->connection->put($requestUri, $requestHeaders, $requestBody, $responseHandler),
        };
        $connectionResponse = $responseBuilder->getResponse();
        $this->updateCallContext($connectionResponse, $callContext);

        if ($bodyHandler === null) {
            $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
            $httpStatusCode = $connectionResponse->getHttpStatusCode();
            if ($httpStatusCode >= 400) {
                throw new ErrorResponseException($httpStatusCode, $response, headers: $connectionResponse->getHeaders());
            }
            return $response;
        }

        $httpStatusCode = $connectionResponse->getHttpStatusCode();
        if ($httpStatusCode >= 400) {
            $response = $this->getResponseFactory()->createResponse($connectionResponse, $responseClassMap);
            throw new ErrorResponseException($httpStatusCode, $response, headers: $connectionResponse->getHeaders());
        }
        return null;
    }
}
