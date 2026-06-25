<?php

namespace OnlinePayments\Sdk\Unit\Webhooks;

use OnlinePayments\Sdk\Webhooks\InMemorySecretKeyStore;
use OnlinePayments\Sdk\Webhooks\SecretKeyNotAvailableException;
use OnlinePayments\Sdk\Webhooks\SignatureValidationException;
use OnlinePayments\Sdk\Webhooks\SignatureValidator;
use PHPUnit\Framework\TestCase;

/**
 * @group webhooks
 */
class SignatureValidatorTest extends TestCase
{
    private const KEY_ID = 'dummy-key-id';
    private const SECRET_KEY = 'hello+world';
    private const BODY = "{\n  \"apiVersion\": \"v1\",\n  \"id\": \"8ee793f6-4553-4749-85dc-f2ef095c5ab0\",\n  \"created\": \"2017-02-02T11:24:14.040+0100\",\n  \"merchantId\": \"20000\",\n  \"type\": \"payment.paid\"\n}";

    private SignatureValidator $signatureValidator;
    private string $validSignature;

    protected function setUp(): void
    {
        $secretKeyStore = new InMemorySecretKeyStore([self::KEY_ID => self::SECRET_KEY]);
        $this->signatureValidator = new SignatureValidator($secretKeyStore);
        $this->validSignature = base64_encode(hash_hmac('sha256', self::BODY, self::SECRET_KEY, true));
    }

    public function testValidate_WithValidRequest_DoesNotThrow(): void
    {
        $headers = [
            'X-GCS-Signature' => $this->validSignature,
            'X-GCS-KeyId'     => self::KEY_ID,
        ];

        $this->signatureValidator->validate(self::BODY, $headers);

        $this->addToAssertionCount(1);
    }

    public function testValidate_WithMissingSecretKey_ThrowsSecretKeyNotAvailableException(): void
    {
        $emptyStore = new InMemorySecretKeyStore();
        $validator = new SignatureValidator($emptyStore);

        $headers = [
            'X-GCS-Signature' => $this->validSignature,
            'X-GCS-KeyId'     => self::KEY_ID,
        ];

        try {
            $validator->validate(self::BODY, $headers);
            $this->fail('Expected SecretKeyNotAvailableException');
        } catch (SecretKeyNotAvailableException $e) {
            $this->assertSame(self::KEY_ID, $e->getKeyId());
        }
    }

    public function testValidate_WithMissingSignatureHeader_ThrowsSignatureValidationException(): void
    {
        $this->expectException(SignatureValidationException::class);

        $headers = [
            'X-GCS-KeyId' => self::KEY_ID,
        ];

        $this->signatureValidator->validate(self::BODY, $headers);
    }

    public function testValidate_WithMissingKeyIdHeader_ThrowsSignatureValidationException(): void
    {
        $this->expectException(SignatureValidationException::class);

        $headers = [
            'X-GCS-Signature' => $this->validSignature,
        ];

        $this->signatureValidator->validate(self::BODY, $headers);
    }

    public function testValidate_WithTamperedBody_ThrowsSignatureValidationException(): void
    {
        $this->expectException(SignatureValidationException::class);

        $headers = [
            'X-GCS-Signature' => $this->validSignature,
            'X-GCS-KeyId'     => self::KEY_ID,
        ];

        $this->signatureValidator->validate('tampered-body', $headers);
    }

    public function testValidate_WithWrongSecretKey_ThrowsSignatureValidationException(): void
    {
        $this->expectException(SignatureValidationException::class);

        $wrongKeyStore = new InMemorySecretKeyStore([self::KEY_ID => 'wrong-secret']);
        $validator = new SignatureValidator($wrongKeyStore);

        $headers = [
            'X-GCS-Signature' => $this->validSignature,
            'X-GCS-KeyId'     => self::KEY_ID,
        ];

        $validator->validate(self::BODY, $headers);
    }

    public function testValidate_WithInvalidSignature_ThrowsSignatureValidationException(): void
    {
        $this->expectException(SignatureValidationException::class);

        $headers = [
            'X-GCS-Signature' => 'not-a-valid-signature',
            'X-GCS-KeyId'     => self::KEY_ID,
        ];

        $this->signatureValidator->validate(self::BODY, $headers);
    }
}
