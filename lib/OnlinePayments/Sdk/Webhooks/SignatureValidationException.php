<?php

namespace OnlinePayments\Sdk\Webhooks;

use Exception;
use RuntimeException;

/**
 * Class SignatureValidationException
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class SignatureValidationException extends RuntimeException
{
    /**
     * @param string $message
     * @param Exception @previous
     */
    public function __construct($message = null, $previous = null)
    {
        parent::__construct($message, null, $previous);
    }
}
