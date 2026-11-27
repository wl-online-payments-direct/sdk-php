<?php

namespace OnlinePayments\Sdk\Webhooks;

use RuntimeException;
use Throwable;

/**
 * Class SignatureValidationException
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class SignatureValidationException extends RuntimeException
{
    /**
     * @param string|null $message
     * @param Throwable|null $previous
     */
    public function __construct(?string $message = null, ?Throwable $previous = null)
    {
        parent::__construct($message ?? '', 0, $previous);
    }
}
