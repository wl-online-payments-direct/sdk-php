<?php

namespace OnlinePayments\Sdk\Unit\Webhooks;

use OnlinePayments\Sdk\Webhooks\InMemorySecretKeyStore;
use OnlinePayments\Sdk\Webhooks\SecretKeyNotAvailableException;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

/**
 * @group webhooks
 */
class InMemorySecretKeyStoreTest extends TestCase
{
    public function testConstructor_AndGetSecretKey_ReturnsStoredValue(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore([
            'key-id-1' => 'secret-value-1'
        ]);

        $this->assertSame('secret-value-1', $inMemorySecretKeyStore->getSecretKey('key-id-1'));
    }

    public function testGetSecretKey_KeyDoesNotExist_ThrowsException(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore();

        $this->expectException(SecretKeyNotAvailableException::class);

        $inMemorySecretKeyStore->getSecretKey('non-existent-key');
    }

    public function testGetSecretKey_KeyNotFound_ThrowsException(): void
    {
        $store = new InMemorySecretKeyStore([
            'key-id-1' => ''
        ]);

        $this->expectException(SecretKeyNotAvailableException::class);

        $store->getSecretKey('non-existent-key');
    }

    public function testStoreSecretKey_StoresValueSuccessfully(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore();

        $inMemorySecretKeyStore->storeSecretKey('key-id-1', 'secret-value-1');

        $this->assertSame('secret-value-1', $inMemorySecretKeyStore->getSecretKey('key-id-1'));
    }

    public function testStoreSecretKey_EmptyKey_ThrowsException(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore();

        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('keyId is required');

        $inMemorySecretKeyStore->storeSecretKey('', 'secret');
    }

    public function testStoreSecretKey_EmptySecret_ThrowsException(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore();

        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('secretKey is required');

        $inMemorySecretKeyStore->storeSecretKey('key-id-1', '');
    }

    public function testRemoveSecretKey_RemovesValue(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore([
            'key-to-remove' => 'secret1'
        ]);

        $inMemorySecretKeyStore->removeSecretKey('key-to-remove');

        $this->expectException(SecretKeyNotAvailableException::class);
        $inMemorySecretKeyStore->getSecretKey('key-to-remove');
    }

    public function testClear_RemovesAllKeys(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore([
            'key-1' => 'secret-1',
            'key-2' => 'secret-2',
            'key-3' => 'secret-3',
        ]);

        $inMemorySecretKeyStore->clear();

        foreach (['key-1', 'key-2', 'key-3'] as $key) {
            try {
                $inMemorySecretKeyStore->getSecretKey($key);
                $this->fail("Expected SecretKeyNotAvailableException for key '$key'");
            } catch (SecretKeyNotAvailableException $e) {
                $this->assertSame($key, $e->getKeyId());
            }
        }
    }

    public function testStoreSecretKey_WithWhitespaceKey_ThrowsException(): void
    {
        $inMemorySecretKeyStore = new InMemorySecretKeyStore();

        $this->expectException(UnexpectedValueException::class);

        $inMemorySecretKeyStore->storeSecretKey('   ', 'secret');
    }

    public function testStoreSecretKey_OverwritesExistingKey(): void
    {
        $store = new InMemorySecretKeyStore(['key1' => 'original-secret']);

        $store->storeSecretKey('key1', 'updated-secret');

        $this->assertSame('updated-secret', $store->getSecretKey('key1'));
    }

    public function testRemoveSecretKey_NonExistentKey_DoesNotThrow(): void
    {
        $store = new InMemorySecretKeyStore();

        $store->removeSecretKey('does-not-exist');

        $this->addToAssertionCount(1);
    }

    public function testClear_AllowsStoringNewKeysAfterwards(): void
    {
        $store = new InMemorySecretKeyStore(['old-key' => 'old-secret']);

        $store->clear();
        $store->storeSecretKey('new-key', 'new-secret');

        $this->assertSame('new-secret', $store->getSecretKey('new-key'));
    }

    public function testStoreAndRetrieve_MultipleKeys_WorkIndependently(): void
    {
        $store = new InMemorySecretKeyStore();

        $store->storeSecretKey('key-a', 'secret-a');
        $store->storeSecretKey('key-b', 'secret-b');
        $store->storeSecretKey('key-c', 'secret-c');

        $this->assertSame('secret-a', $store->getSecretKey('key-a'));
        $this->assertSame('secret-b', $store->getSecretKey('key-b'));
        $this->assertSame('secret-c', $store->getSecretKey('key-c'));
    }

    public function testRemoveSecretKey_DoesNotAffectOtherKeys(): void
    {
        $store = new InMemorySecretKeyStore([
            'key1' => 'secret1',
            'key2' => 'secret2',
        ]);

        $store->removeSecretKey('key1');

        $this->assertSame('secret2', $store->getSecretKey('key2'));
    }

    public function testGetSecretKey_ThrowsExceptionWithCorrectKeyId(): void
    {
        $store = new InMemorySecretKeyStore();

        try {
            $store->getSecretKey('missing-key');
            $this->fail('Expected SecretKeyNotAvailableException');
        } catch (SecretKeyNotAvailableException $e) {
            $this->assertSame('missing-key', $e->getKeyId());
        }
    }

    public function testGetSecretKey_ThrowsExceptionWithKeyIdInMessage(): void
    {
        $store = new InMemorySecretKeyStore();

        try {
            $store->getSecretKey('missing-key');
            $this->fail('Expected SecretKeyNotAvailableException');
        } catch (SecretKeyNotAvailableException $e) {
            $this->assertStringContainsString('missing-key', $e->getMessage());
        }
    }

    public function testStoreSecretKey_SpecialCharactersInSecret_StoredCorrectly(): void
    {
        $store = new InMemorySecretKeyStore();
        $specialSecret = 'secret+with/special=chars!@#';

        $store->storeSecretKey('key1', $specialSecret);

        $this->assertSame($specialSecret, $store->getSecretKey('key1'));
    }
}
