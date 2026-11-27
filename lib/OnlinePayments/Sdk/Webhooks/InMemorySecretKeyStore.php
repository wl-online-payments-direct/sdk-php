<?php

namespace OnlinePayments\Sdk\Webhooks;

use UnexpectedValueException;

/**
 * Class InMemorySecretKeyStore
 *
 * @package OnlinePayments\Sdk\Webhooks
 */
class InMemorySecretKeyStore implements SecretKeyStore
{
    /**
     * @param array<string, string> $secretKeys
     */
    public function __construct(#[\SensitiveParameter] private array $secretKeys = []) {}

    /**
     * @param string $keyId
     * @return string
     * @throws SecretKeyNotAvailableException
     */
    #[\Override]
    public function getSecretKey(string $keyId): string
    {
        if (!isset($this->secretKeys[$keyId])) {
            throw new SecretKeyNotAvailableException($keyId, "could not find secret key for key id $keyId");
        }
        return $this->secretKeys[$keyId];
    }

    /**
     * Stores the given secret key for the given key id.
     *
     * @param string $keyId
     * @param string $secretKey
     */
    public function storeSecretKey(string $keyId, #[\SensitiveParameter] string $secretKey): void
    {
        if (trim($keyId) === '') {
            throw new UnexpectedValueException('keyId is required');
        }
        if (trim($secretKey) === '') {
            throw new UnexpectedValueException('secretKey is required');
        }
        $this->secretKeys[$keyId] = $secretKey;
    }

    /**
     * Removes the secret key for the given key id.
     *
     * @param string $keyId
     */
    public function removeSecretKey(string $keyId): void
    {
        unset($this->secretKeys[$keyId]);
    }

    /**
     * Removes all stored secret keys.
     */
    public function clear(): void
    {
        $this->secretKeys = [];
    }
}
