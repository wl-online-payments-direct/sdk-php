<?php

namespace OnlinePayments\Sdk\Unit\Webhooks;

use OnlinePayments\Sdk\TestUtil\Unit\ApiVersionMismatchTestingWebhooksHelper;
use OnlinePayments\Sdk\Webhooks\ApiVersionMismatchException;
use OnlinePayments\Sdk\Webhooks\InMemorySecretKeyStore;
use OnlinePayments\Sdk\Webhooks\SecretKeyNotAvailableException;
use OnlinePayments\Sdk\Webhooks\SecretKeyStore;
use OnlinePayments\Sdk\Webhooks\SignatureValidationException;
use OnlinePayments\Sdk\Webhooks\WebhooksHelper;
use PHPUnit\Framework\TestCase;

/**
 * @group webhooks
 */
class WebhooksHelperTest extends TestCase
{
    const SIGNATURE_HEADER = 'X-GCS-Signature';
    const SIGNATURE = '2S7doBj/GnJnacIjSJzr5fxGM5xmfQyFAwxv1I53ZEk=';
    const KEY_ID_HEADER = 'X-GCS-KeyId';
    const KEY_ID = 'dummy-key-id';
    const SECRET_KEY = 'hello+world';
    const VALID_BODY_WITHOUT_LINEBREAK_FIX = <<<EOD
{
  "apiVersion": "v1",
  "id": "8ee793f6-4553-4749-85dc-f2ef095c5ab0",
  "created": "2017-02-02T11:24:14.040+0100",
  "merchantId": "20000",
  "type": "payment.paid",
  "payment": {
    "id": "00000200000143570012",
    "paymentOutput": {
      "amountOfMoney": {
        "amount": 1000,
        "currencyCode": "EUR"
      },
      "references": {
        "paymentReference": "200001681810"
      },
      "paymentMethod": "bankTransfer",
      "bankTransferPaymentMethodSpecificOutput": {
        "paymentProductId": 11
      }
    },
    "status": "PAID",
    "statusOutput": {
      "isCancellable": false,
      "statusCategory": "COMPLETED",
      "statusCode": 1000,
      "statusCodeChangeDateTime": "20170202112414",
      "isAuthorized": true
    }
  }
}
EOD;

    const INVALID_BODY_WITHOUT_LINEBREAK_FIX = <<<EOD
{
  "apiVersion": "v1",
  "id": "8ee793f6-4553-4749-85dc-f2ef095c5ab0",
  "created": "2017-02-02T11:25:14.040+0100",
  "merchantId": "20000",
  "type": "payment.paid",
  "payment": {
    "id": "00000200000143570012",
    "paymentOutput": {
      "amountOfMoney": {
        "amount": 1000,
        "currencyCode": "EUR"
      },
      "references": {
        "paymentReference": "200001681810"
      },
      "paymentMethod": "bankTransfer",
      "bankTransferPaymentMethodSpecificOutput": {
        "paymentProductId": 11
      }
    },
    "status": "PAID",
    "statusOutput": {
      "isCancellable": false,
      "statusCategory": "COMPLETED",
      "statusCode": 1000,
      "statusCodeChangeDateTime": "20170202112514",
      "isAuthorized": true
    }
  }
}
EOD;

    private $validBody;
    private $invalidBody;

    public function __construct()
    {
        parent::__construct();
        $this->validBody = preg_replace("/\r\n/", "\n", self::VALID_BODY_WITHOUT_LINEBREAK_FIX);
        $this->invalidBody = preg_replace("/\r\n/", "\n", self::INVALID_BODY_WITHOUT_LINEBREAK_FIX);
    }

    public function testUnmarshal_WithApiVersionMismatch_ThrowsApiVersionMismatchException()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = new ApiVersionMismatchTestingWebhooksHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);
        try {
            $helper->unmarshal($this->validBody, $requestHeaders);
        } catch (ApiVersionMismatchException $e) {
            $this->assertEquals('v0', $e->getEventApiVersion());
            $this->assertEquals('v1', $e->getSdkApiVersion());

            return;
        }

        $this->fail('an expected exception has not been raised');
    }

    public function testUnmarshal_WithMissingSecretKey_ThrowsSecretKeyNotAvailableException()
    {
        $secretKeyStore = new InMemorySecretKeyStore();
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);

        try {
            $helper->unmarshal($this->validBody, $requestHeaders);
        } catch (SecretKeyNotAvailableException $e) {
            $this->assertEquals(self::KEY_ID, $e->getKeyId());

            return;
        }

        $this->fail('an expected exception has not been raised');
    }

    public function testUnmarshal_WithMissingSignatureHeaders_ThrowsSignatureValidationException()
    {
        $secretKeyStore = new InMemorySecretKeyStore([
            self::KEY_ID => self::SECRET_KEY
        ]);

        $helper = $this->createHelper($secretKeyStore);

        $this->expectException(SignatureValidationException::class);
        $this->expectExceptionMessage(
            "could not find header '" . static::SIGNATURE_HEADER . "'"
        );

        $helper->unmarshal($this->validBody, []);
    }

    public function testUnmarshal_WithDuplicateSignatureHeaders_ThrowsThrowable()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(
            self::SIGNATURE_HEADER => array(self::SIGNATURE, self::SIGNATURE),
            self::KEY_ID_HEADER => self::KEY_ID
        );

        set_error_handler(static function (int $errno, string $errstr): bool {
            throw new \ErrorException($errstr, 0, $errno);
        });
        try {
            $this->expectException(\Throwable::class);
            $helper->unmarshal($this->validBody, $requestHeaders);
        } finally {
            restore_error_handler();
        }
    }

    public function testUnmarshal_WithValidBodyString_ReturnsWebhooksEvent()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);

        $event = $helper->unmarshal($this->validBody, $requestHeaders);

        $this->assertEquals('v1', $event->apiVersion);
        $this->assertEquals('8ee793f6-4553-4749-85dc-f2ef095c5ab0', $event->id);
        $this->assertEquals('2017-02-02T11:24:14.040+0100', $event->created);
        $this->assertEquals('20000', $event->merchantId);
        $this->assertEquals('payment.paid', $event->type);
    }

    public function testUnmarshal_WithValidBodyBytes_ReturnsWebhooksEvent()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);

        $bodyAsBytes = mb_convert_encoding($this->validBody, 'UTF-8');
        $event = $helper->unmarshal($bodyAsBytes, $requestHeaders);

        $this->assertEquals('v1', $event->apiVersion);
        $this->assertEquals('8ee793f6-4553-4749-85dc-f2ef095c5ab0', $event->id);
        $this->assertEquals('payment.paid', $event->type);
    }

    public function testUnmarshal_WithInvalidSignatures_ThrowsSignatureValidationExceptionWithoutTimingLeak()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);

        $event = $helper->unmarshal($this->validBody, $requestHeaders);
        $this->assertNotNull($event);

        $invalidSignatures = [
            '0000000000000000000000000000000000000000000=',
            self::SIGNATURE . 'x',
            'x' . self::SIGNATURE,
            str_repeat('A', strlen(self::SIGNATURE)),
        ];

        foreach ($invalidSignatures as $invalidSig) {
            try {
                $helper->unmarshal($this->validBody, array(
                    self::SIGNATURE_HEADER => $invalidSig,
                    self::KEY_ID_HEADER => self::KEY_ID
                ));
                $this->fail('Expected SignatureValidationException for signature: ' . $invalidSig);
            } catch (SignatureValidationException $e) {
                $this->assertStringStartsWith('failed to validate signature', $e->getMessage());
            }
        }
    }

    public function testUnmarshal_WithInvalidBody_ThrowsSignatureValidationException()
    {
        $secretKeyStore = new InMemorySecretKeyStore([
            self::KEY_ID => self::SECRET_KEY
        ]);

        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = [
            self::SIGNATURE_HEADER => self::SIGNATURE,
            self::KEY_ID_HEADER => self::KEY_ID
        ];

        $this->expectException(SignatureValidationException::class);
        $this->expectExceptionMessageMatches('/^failed to validate signature/');

        $helper->unmarshal($this->invalidBody, $requestHeaders);
    }

    public function testUnmarshal_WithInvalidSecretKey_ThrowsSignatureValidationException()
    {
        $invalidSecretKey = '1' . self::SECRET_KEY;

        $secretKeyStore = new InMemorySecretKeyStore([
            self::KEY_ID => $invalidSecretKey
        ]);

        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = [
            self::SIGNATURE_HEADER => self::SIGNATURE,
            self::KEY_ID_HEADER => self::KEY_ID
        ];

        $this->expectException(SignatureValidationException::class);
        $this->expectExceptionMessageMatches('/^failed to validate signature/');

        $helper->unmarshal($this->validBody, $requestHeaders);
    }

    public function testUnmarshal_WithInvalidSignature_ThrowsSignatureValidationException()
    {
        $secretKeyStore = new InMemorySecretKeyStore([
            self::KEY_ID => self::SECRET_KEY
        ]);

        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = [
            self::SIGNATURE_HEADER => '1' . self::SIGNATURE,
            self::KEY_ID_HEADER => self::KEY_ID
        ];

        $this->expectException(SignatureValidationException::class);
        $this->expectExceptionMessageMatches('/^failed to validate signature/');

        $helper->unmarshal($this->validBody, $requestHeaders);
    }

    protected function createHelper(SecretKeyStore $secretKeyStore): WebhooksHelper
    {
        return new WebhooksHelper($secretKeyStore);
    }
}
