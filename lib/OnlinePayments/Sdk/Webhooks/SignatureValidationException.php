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
     * @param string|null $message
     * @param Exception|null $previous
     */
    public function __construct($message = null, $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
