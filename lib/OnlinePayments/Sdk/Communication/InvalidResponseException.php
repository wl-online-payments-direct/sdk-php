<?php

namespace OnlinePayments\Sdk\Communication;

use RuntimeException;

/**
 * Class InvalidResponseException
 *
 * @package OnlinePayments\Sdk\Communication
 */
class InvalidResponseException extends RuntimeException
{
    /** @var ConnectionResponseInterface */
    private ConnectionResponseInterface $response;

    /**
     * @param ConnectionResponseInterface $response
     * @param string|null $message
     */
    public function __construct(ConnectionResponseInterface $response, ?string $message = null)
    {
        parent::__construct($message ?? 'The server returned an invalid response.');
        $this->response = $response;
    }

    /**
     * @return ConnectionResponseInterface
     */
    public function getResponse(): ConnectionResponseInterface
    {
        return $this->response;
    }
}
