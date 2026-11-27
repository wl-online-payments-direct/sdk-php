<?php

namespace OnlinePayments\Sdk\Webhooks;

use Throwable;

/**
 * Class SecretKeyNotAvailableException
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class SecretKeyNotAvailableException extends SignatureValidationException
{
    /**
     * @param string|null $keyId
     * @param string|null $message
     * @param Throwable|null $previous
     */
    public function __construct(
        private readonly ?string $keyId,
        ?string $message = null,
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, $previous);
    }

    /**
     * @return string|null
     */
    public function getKeyId(): ?string
    {
        return $this->keyId;
    }
}
