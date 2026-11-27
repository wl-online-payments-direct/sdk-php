<?php

namespace OnlinePayments\Sdk\Communication;

use ErrorException;
use Throwable;

/**
 * Class CommunicationException
 * Indicates an exception regarding the communication with the payment platform, such as a connection failure or a
 * timeout.
 *
 * @package OnlinePayments\Sdk\Communication
 */
class CommunicationException extends ErrorException
{
    /**
     * @param string $message
     * @param Throwable|null $previous
     */
    public function __construct(string $message, ?Throwable $previous = null)
    {
        parent::__construct($message, 0, E_ERROR, null, null, $previous);
    }
}
