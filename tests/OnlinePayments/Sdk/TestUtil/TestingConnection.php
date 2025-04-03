<?php
namespace OnlinePayments\Sdk\TestUtil;

use Exception;
use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use OnlinePayments\Sdk\Communication\DefaultConnection;

class TestingConnection extends DefaultConnection
{
    private $response;
    private $exception;

    function __construct(ConnectionResponseInterface $response = null, Exception $exception = null)
    {
        parent::__construct();
        $this->response = $response;
        $this->exception = $exception;
    }

    protected function executeRequest(
        $httpMethod,
        $requestUri,
        $requestHeaders,
        $body,
        callable $responseHandler
    ) {
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
