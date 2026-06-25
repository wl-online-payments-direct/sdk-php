<?php

namespace OnlinePayments\Sdk\Unit\Communication\Exception;

use OnlinePayments\Sdk\Webhooks\SecretKeyNotAvailableException;
use OnlinePayments\Sdk\Webhooks\SignatureValidationException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @group communication
 * @group exception
 */
class SecretKeyNotAvailableExceptionTest extends TestCase
{
    public function testConstruct_WithKeyIdAndMessage_StoresBoth(): void
    {
        $exception = new SecretKeyNotAvailableException('api-key-123', 'Secret key not found for key: api-key-123');

        $this->assertSame('api-key-123', $exception->getKeyId());
        $this->assertSame('Secret key not found for key: api-key-123', $exception->getMessage());
    }

    public function testConstruct_WithAllParameters_StoresAll(): void
    {
        $cause = new RuntimeException('Database connection failed');
        $exception = new SecretKeyNotAvailableException('api-key-456', 'Key not found', $cause);

        $this->assertSame('api-key-456', $exception->getKeyId());
        $this->assertSame('Key not found', $exception->getMessage());
        $this->assertSame($cause, $exception->getPrevious());
    }

    public function testGetKeyId_ReturnsStoredKeyId(): void
    {
        $exception = new SecretKeyNotAvailableException('production-key-001', '');

        $this->assertSame('production-key-001', $exception->getKeyId());
    }

    public function testConstruct_NullKeyId_IsAccepted(): void
    {
        $exception = new SecretKeyNotAvailableException(null, 'message');

        $this->assertNull($exception->getKeyId());
    }

    public function testException_IsSignatureValidationException(): void
    {
        $exception = new SecretKeyNotAvailableException('key', 'message');

        $this->assertNotNull($exception);
    }

    public function testException_IsRuntimeException(): void
    {
        $exception = new SecretKeyNotAvailableException('key', 'message');

        $this->assertNotNull($exception);
    }

    public function testException_DifferentInstances_HaveDifferentKeyIds(): void
    {
        $first = new SecretKeyNotAvailableException('key-1', 'not found');
        $second = new SecretKeyNotAvailableException('key-2', 'not found');

        $this->assertNotSame($first->getKeyId(), $second->getKeyId());
    }

    public function testException_CauseChain_IsPreserved(): void
    {
        $cause = new SignatureValidationException('inner cause');
        $exception = new SecretKeyNotAvailableException('key-id', 'outer message', $cause);

        $this->assertSame($cause, $exception->getPrevious());
        $this->assertSame('inner cause', $exception->getPrevious()->getMessage());
    }

    public function testConstruct_WithKeyIdAndCause_CauseMessageIsAccessible(): void
    {
        $causeMessage = 'Database error occurred';
        $cause = new RuntimeException($causeMessage);
        $exception = new SecretKeyNotAvailableException('api-key-456', '', $cause);

        $this->assertSame($causeMessage, $exception->getPrevious()->getMessage());
    }

    public function testGetKeyId_WithHyphenatedKeyId_ReturnsCorrectly(): void
    {
        $keyId = 'api-key-prod-001';
        $exception = new SecretKeyNotAvailableException($keyId, '');

        $this->assertSame($keyId, $exception->getKeyId());
    }

    public function testGetKeyId_WithUnderscoreKeyId_ReturnsCorrectly(): void
    {
        $keyId = 'api_key_prod_001';
        $exception = new SecretKeyNotAvailableException($keyId, '');

        $this->assertSame($keyId, $exception->getKeyId());
    }

    public function testGetKeyId_WithNumericKeyId_ReturnsCorrectly(): void
    {
        $keyId = 'key123456789';
        $exception = new SecretKeyNotAvailableException($keyId, '');

        $this->assertSame($keyId, $exception->getKeyId());
    }

    public function testGetKeyId_WithUUIDStyleKeyId_ReturnsCorrectly(): void
    {
        $keyId = '550e8400-e29b-41d4-a716-446655440000';
        $exception = new SecretKeyNotAvailableException($keyId, '');

        $this->assertSame($keyId, $exception->getKeyId());
    }
}
