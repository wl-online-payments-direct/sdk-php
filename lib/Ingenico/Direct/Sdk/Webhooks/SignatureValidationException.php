<?php
namespace Ingenico\Direct\Sdk\Webhooks;

use Exception;
use RuntimeException;

/**
 * Class SignatureValidationException
 *
 * @package Ingenico\Direct\Sdk\Webhooks
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
