<?php
namespace OnlinePayments\Sdk\Webhooks;

use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communication\ResponseFactory;
use OnlinePayments\Sdk\Domain\WebhooksEvent;
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
    // the above constants may contain \r but the body from which the signature was created doesn't
    private $validBody;

    private $invalidBody;

    public function __construct()
    {
        parent::__construct();
        $this->validBody = preg_replace("/\r\n/", "\n", self::VALID_BODY_WITHOUT_LINEBREAK_FIX);
        $this->invalidBody = preg_replace("/\r\n/", "\n", self::INVALID_BODY_WITHOUT_LINEBREAK_FIX);
    }

    function testUnmarshalApiVersionMismatch()
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

    function testUnmarshalNoSecretKeyAvailable()
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

    function testUnmarshalMissingHeaders()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array();
        try {
            $helper->unmarshal($this->validBody, $requestHeaders);
        } catch (SignatureValidationException $e) {
            $this->assertEquals("could not find header '" . static::SIGNATURE_HEADER . "'", $e->getMessage());
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    function testUnmarshalSuccess()
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

    function testUnmarshalInvalidBody()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);
        try {
            $helper->unmarshal($this->invalidBody, $requestHeaders);
        } catch (SignatureValidationException $e) {
            $this->assertStringStartsWith('failed to validate signature', $e->getMessage());
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    function testUnmarshalInvalidSecretKey()
    {
        $invalidSecretKey = '1' . self::SECRET_KEY;
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => $invalidSecretKey));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);
        try {
            $helper->unmarshal($this->validBody, $requestHeaders);
        } catch (SignatureValidationException $e) {
            $this->assertStringStartsWith('failed to validate signature', $e->getMessage());
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    function testUnmarshalInvalidSignature()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => '1' . self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);
        try {
            $helper->unmarshal($this->validBody, $requestHeaders);
        } catch (SignatureValidationException $e) {
            $this->assertStringStartsWith('failed to validate signature', $e->getMessage());
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    /**
     * @param SecretKeyStore $secretKeyStore
     * @return WebhooksHelper
     */
    protected function createHelper($secretKeyStore)
    {
        return new WebhooksHelper($secretKeyStore);
    }
}

class ApiVersionMismatchTestingWebhooksHelper extends WebhooksHelper
{
    protected function getResponseFactory()
    {
        return new ApiVersionMismatchTestingResponseFactory();
    }
}

class ApiVersionMismatchTestingResponseFactory extends ResponseFactory
{
    public function createResponse(
        ConnectionResponseInterface $response,
        ResponseClassMap $responseClassMap
    ) {
        /** @var WebhooksEvent $event */
        $event = parent::createResponse($response, $responseClassMap);
        $event->apiVersion = 'v0';
        return $event;
    }
}
