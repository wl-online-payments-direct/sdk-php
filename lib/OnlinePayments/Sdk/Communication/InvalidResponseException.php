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
    /**
     * @var ConnectionResponseInterface
     */
    private $response;

    /**
     * @param ConnectionResponseInterface $response
     * @param string|null $message
     */
    public function __construct(ConnectionResponseInterface $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'The server returned an invalid response.';
        }
        parent::__construct($message);
        $this->response = $response;
    }

    /**
     * @return ConnectionResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }
}
