<?php

namespace OnlinePayments\Sdk;

use RuntimeException;

/**
 * Class InvalidResponseException
 *
 * @package OnlinePayments\Sdk
 */
class InvalidResponseException extends RuntimeException
{

    /**
     * @var ConnectionResponse
     */
    private $response;

    /**
     * @param ConnectionResponse $response
     * @param string $message
     */
    public function __construct(ConnectionResponse $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'The server returned an invalid response.';
        }
        parent::__construct($message);
        $this->response = $response;
    }

    /**
     * @return ConnectionResponse
     */
    public function getResponse()
    {
        return $this->response;
    }
}
