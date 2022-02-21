<?php

namespace OnlinePayments\Sdk;

use Exception;

class TestingConnection extends DefaultConnection
{
    private $response;
    private $exception;

    function __construct(ConnectionResponse $response = null, Exception $exception = null)
    {
        $this->response = $response;
        $this->exception = $exception;
    }

    /**
     * @param $httpMethod
     * @param $requestUri
     * @param $requestHeaders
     * @param $body
     * @param callable $responseHandler
     * @param ProxyConfiguration|null $proxyConfiguration
     * @return ConnectionResponse
     * @throws Exception
     */
    protected function executeRequest(
        $httpMethod,
        $requestUri,
        $requestHeaders,
        $body,
        callable $responseHandler,
        ProxyConfiguration $proxyConfiguration = null
    )
    {
        if (!is_null($this->exception)) {
            throw $this->exception;
        } else {
            $statusCode = $this->response->getHttpStatusCode();
            $body = $this->response->getBody();
            $headers = $this->response->getHeaders();
            call_user_func($responseHandler, $statusCode, $body, $headers);
            return $this->response;
        }
    }
}
