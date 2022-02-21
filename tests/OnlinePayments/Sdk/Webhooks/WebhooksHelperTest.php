<?php

namespace OnlinePayments\Sdk\Webhooks;

use OnlinePayments\Sdk\ConnectionResponse;
use OnlinePayments\Sdk\ResponseClassMap;
use OnlinePayments\Sdk\ResponseFactory;
use PHPUnit\Framework\TestCase;

/**
 * @group webhooks
 */
class WebhooksHelperTest extends TestCase
{
    const SIGNATURE_HEADER = 'X-GCS-Signature';
    const SIGNATURE = 'dvi9vUj6S0XVlRVPTldcyx11AEAvv9fHEzlacqT7r5s=';

    const KEY_ID_HEADER = 'X-GCS-KeyId';
    const KEY_ID = 'dummy-key-id';

    const SECRET_KEY = 'hello+world';

    const VALID_BODY_WITHOUT_LINEBREAK_FIX = <<<EOD
{
  "apiVersion": "v1",
  "id": "7433cde6-59d5-4de5-8be8-5b325038e267",
  "created": "2020-01-01T01:00:00.000+0100",
  "merchantId": "1",
  "type": "payment.paid",
  "payment": {
    "id": "1_1",
    "paymentOutput": {
      "amountOfMoney": {
        "amount": 1000,
        "currencyCode": "EUR"
      },
      "references": {
        "merchantReference": "ref1"
      },
      "paymentMethod": "redirect",
      "redirectPaymentMethodSpecificOutput": {
        "paymentProductId": 809
      }
    },
    "status": "PAID",
    "statusOutput": {
      "isAuthorized": true,
      "isCancellable": false,
      "statusCategory": "COMPLETED",
      "statusCode": "1000",
      "statusCodeChangeDateTime": "20200101000000"
    }
  }
}
EOD;

    const INVALID_BODY_WITHOUT_LINEBREAK_FIX = <<<EOD
{
  "apiVersion": "v1",
  "id": "689570ea-8207-451e-bb31-6d2e3a5e0ec0",
  "created": "2017-02-02T11:25:14.040+0100",
  "merchantId": "1",
  "type": "payment.paid",
  "payment": {
    "id": "1_1",
    "paymentOutput": {
      "amountOfMoney": {
        "amount": 1000,
        "currencyCode": "EUR"
      },
      "references": {
        "merchantReference": "ref2"
      },
      "paymentMethod": "redirect",
      "redirectPaymentMethodSpecificOutput": {
        "paymentProductId": 809
      }
    },
    "status": "PAID",
    "statusOutput": {
      "isAuthorized": true,
      "isCancellable": false,
      "statusCategory": "COMPLETED",
      "statusCode": "1000",
      "statusCodeChangeDateTime": "20200101000000"
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
            $this->assertEquals("v1", $e->getSdkApiVersion());
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
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    function testUnmarshalBytesSuccess()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);

        $event = $helper->unmarshal($this->validBody, $requestHeaders);

        $this->assertEquals('v1', $event->getApiVersion());
        $this->assertEquals('7433cde6-59d5-4de5-8be8-5b325038e267', $event->getId());
        $this->assertEquals('2020-01-01T01:00:00.000+0100', $event->getCreated());
        $this->assertEquals('1', $event->getMerchantId());
        $this->assertEquals('payment.paid', $event->getType());

        $this->assertNull($event->getPayout());
        $this->assertNull($event->getRefund());
        $this->assertNull($event->getToken());

        $this->assertNotNull($event->getPayment());
        $this->assertEquals('1_1', $event->getPayment()->getId());
        $this->assertNotNull($event->getPayment()->getPaymentOutput());
        $this->assertNotNull($event->getPayment()->getPaymentOutput()->getAmountOfMoney());
        $this->assertEquals(1000, $event->getPayment()->getPaymentOutput()->getAmountOfMoney()->getAmount());
        $this->assertEquals('EUR', $event->getPayment()->getPaymentOutput()->getAmountOfMoney()->getCurrencyCode());
        $this->assertNotNull($event->getPayment()->getPaymentOutput()->getReferences());
        $this->assertEquals('ref1', $event->getPayment()->getPaymentOutput()->getReferences()->getMerchantReference());
        $this->assertEquals('redirect', $event->getPayment()->getPaymentOutput()->getPaymentMethod());

        $this->assertNull($event->getPayment()->getPaymentOutput()->getCardPaymentMethodSpecificOutput());
        $this->assertNull($event->getPayment()->getPaymentOutput()->getSepaDirectDebitPaymentMethodSpecificOutput());
        $this->assertNotNull($event->getPayment()->getPaymentOutput()->getRedirectPaymentMethodSpecificOutput());
        $this->assertEquals(809, $event->getPayment()->getPaymentOutput()->getRedirectPaymentMethodSpecificOutput()->getPaymentProductId());

        $this->assertEquals('PAID', $event->getPayment()->getStatus());
        $this->assertNotNull($event->getPayment()->getStatusOutput());
        $this->assertEquals(false, $event->getPayment()->getStatusOutput()->getIsCancellable());
        $this->assertEquals('COMPLETED', $event->getPayment()->getStatusOutput()->getStatusCategory());
        $this->assertEquals('1000', $event->getPayment()->getStatusOutput()->getStatusCode());
        $this->assertEquals('20200101000000', $event->getPayment()->getStatusOutput()->getStatusCodeChangeDateTime());
        $this->assertEquals(true, $event->getPayment()->getStatusOutput()->getIsAuthorized());
    }

    function testUnmarshalBytesInvalidBody()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);
        try {
            $helper->unmarshal($this->invalidBody, $requestHeaders);
        } catch (SignatureValidationException $e) {
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    function testUnmarshalBytesInvalidSecretKey()
    {
        $invalidSecretKey = '1' . self::SECRET_KEY;
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => $invalidSecretKey));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);
        try {
            $helper->unmarshal($this->validBody, $requestHeaders);
        } catch (SignatureValidationException $e) {
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    function testUnmarshalBytesInvalidSignature()
    {
        $secretKeyStore = new InMemorySecretKeyStore(array(self::KEY_ID => self::SECRET_KEY));
        $helper = $this->createHelper($secretKeyStore);

        $requestHeaders = array(self::SIGNATURE_HEADER => '1' . self::SIGNATURE, self::KEY_ID_HEADER => self::KEY_ID);
        try {
            $helper->unmarshal($this->validBody, $requestHeaders);
        } catch (SignatureValidationException $e) {
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
        ConnectionResponse $response,
        ResponseClassMap   $responseClassMap
    )
    {
        $event = parent::createResponse($response, $responseClassMap);
        $event->setApiVersion('v0');
        return $event;
    }
}
