<?php
namespace OnlinePayments\Sdk\Communication;

use Exception;
use OnlinePayments\Sdk\Logging\BodyObfuscator;
use OnlinePayments\Sdk\Logging\CommunicatorLogger;
use OnlinePayments\Sdk\Logging\HeaderObfuscator;

/**
 * Class CommunicatorLoggerHelper
 *
 * @package OnlinePayments\Sdk\Communication
 */
class CommunicatorLoggerHelper
{
    /** @var HttpObfuscator|null */
    private ?HttpObfuscator $httpObfuscator = null;

    /**
     * @param CommunicatorLogger $communicatorLogger
     * @param string $requestId
     * @param string $requestMethod
     * @param string $requestUri
     * @param array $requestHeaders
     * @param string $requestBody
     */
    public function logRequest(
        CommunicatorLogger $communicatorLogger,
        string             $requestId,
        string             $requestMethod,
        string             $requestUri,
        array              $requestHeaders,
        string             $requestBody = ''
    ): void
    {
        $communicatorLogger->log(sprintf(
            "Outgoing request to %s (requestId='%s')\n%s",
            $this->getEndpoint($requestUri),
            $requestId,
            $this->getHttpObfuscator()->getRawObfuscatedRequest(
                $requestMethod,
                $this->getRelativeUriPathWithRequestParameters($requestUri),
                $requestHeaders,
                $requestBody
            )
        ));
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     * @param string $requestId
     * @param string $requestUri
     * @param ConnectionResponseInterface $response
     */
    public function logResponse(
        CommunicatorLogger $communicatorLogger,
        string $requestId,
        string $requestUri,
        ConnectionResponseInterface $response
    ): void
    {
        $communicatorLogger->log(sprintf(
            "Incoming response from %s (requestId='%s')\n%s",
            $this->getEndpoint($requestUri),
            $requestId,
            $this->getHttpObfuscator()->getRawObfuscatedResponse($response)
        ));
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     * @param string $requestId
     * @param string $requestUri
     * @param Exception $exception
     */
    public function logException(
        CommunicatorLogger $communicatorLogger,
        string             $requestId,
        string             $requestUri,
        Exception          $exception
    ): void
    {
        $communicatorLogger->logException(sprintf(
            "Error occurred while executing request to %s (requestId='%s')",
            $this->getEndpoint($requestUri),
            $requestId
        ), $exception);
    }

    /** @return HttpObfuscator */
    protected function getHttpObfuscator(): HttpObfuscator
    {
        if (is_null($this->httpObfuscator)) {
            $this->httpObfuscator = new HttpObfuscator();
        }
        return $this->httpObfuscator;
    }

    /**
     * @param BodyObfuscator $bodyObfuscator
     */
    public function setBodyObfuscator(BodyObfuscator $bodyObfuscator): void
    {
        $this->getHttpObfuscator()->setBodyObfuscator($bodyObfuscator);
    }

    /**
     * @param HeaderObfuscator $headerObfuscator
     */
    public function setHeaderObfuscator(HeaderObfuscator $headerObfuscator): void
    {
        $this->getHttpObfuscator()->setHeaderObfuscator($headerObfuscator);
    }

    /**
     * @param string $requestUri
     * @return string
     */
    public function getEndpoint(string $requestUri): string
    {
        $index = strpos($requestUri, '://');
        if ($index !== false) {
            $index = strpos($requestUri, '/', $index + 3);
            // $index === false means there's no / after the host; there is no relative URI
            return $index !== false ? substr($requestUri, 0, $index) : $requestUri;
        } else {
            // not an absolute URI
            return '';
        }
    }

    /**
     * @param string $requestUri
     * @return string
     */
    public function getRelativeUriPathWithRequestParameters(string $requestUri): string
    {
        $index = strpos($requestUri, '://');
        if ($index !== false) {
            $index = strpos($requestUri, '/', $index + 3);
            // $index === false means there's no / after the host; there is no relative URI
            return $index !== false ? substr($requestUri, $index) : '';
        } else {
            // not an absolute URI
            return $requestUri;
        }
    }
}
