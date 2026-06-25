<?php

namespace OnlinePayments\Sdk\TestUtil\Unit;

use Exception;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\DefaultConnection;

class TestingConnection extends DefaultConnection
{
    private ?ConnectionResponse $response;
    private ?Exception $exception;

    public function __construct(?ConnectionResponse $response = null, ?Exception $exception = null)
    {
        parent::__construct();
        $this->response = $response;
        $this->exception = $exception;
    }

    /**
     * @throws Exception
     */
    protected function executeRequest(
        $httpMethod,
        $requestUri,
        $requestHeaders,
        $body,
        callable $responseHandler
    ): ?ConnectionResponse {
        if ($this->exception !== null) {
            throw $this->exception;
        }

        if ($this->response === null) {
            return null;
        }

        $statusCode = $this->response->getHttpStatusCode();
        $body = $this->response->getBody();
        $headers = $this->response->getHeaders();
        call_user_func($responseHandler, $statusCode, $body, $headers);

        return $this->response;
    }
}
