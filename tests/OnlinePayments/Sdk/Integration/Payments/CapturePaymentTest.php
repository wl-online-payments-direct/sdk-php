<?php

namespace OnlinePayments\Sdk\Integration\Payments;

use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CancelPaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CapturePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\RefundRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CapturePaymentTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '4509444655';

    private PaymentsClientInterface $paymentsClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testCapturePayment_ValidPayment_ReturnsCaptureRequestedStatus()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()->build();

        $capture = $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $this->assertNotEmpty($capture->getId());
        $this->assertNotEmpty($capture->getStatus());
        $this->assertSame('CAPTURE_REQUESTED', $capture->getStatus());
    }

    public function testCapturePayment_WithOnePartialAmount_ReturnsCaptureRequestedStatus()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(300)
            ->withIsFinal(false)
            ->build();

        $response = $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $this->assertNotNull($response->getId());
        $this->assertNotNull($response->getStatus());
    }

    public function testCapturePayment_WithTwoPartialAmounts_ReturnsCaptureRequestedStatus()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $firstCaptureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(300)
            ->withIsFinal(false)
            ->build();

        $firstCapture = $this->paymentsClient->capturePayment($paymentId, $firstCaptureRequest);

        $this->assertNotEmpty($firstCapture->getId());
        $this->assertNotNull($firstCapture->getStatus());

        $secondCaptureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(500)
            ->withIsFinal(true)
            ->build();

        $secondCapture = $this->paymentsClient->capturePayment($paymentId, $secondCaptureRequest);

        $this->assertNotEmpty($secondCapture->getId());
        $this->assertNotNull($secondCapture->getStatus());
    }

    public function testCapturePayment_AfterPartialCapture_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $firstCaptureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(300)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $firstCaptureRequest);

        try {
            $secondCaptureRequest = CapturePaymentRequestBuilder::create()
                ->withAmount(600)
                ->build();

            $this->paymentsClient->capturePayment($paymentId, $secondCaptureRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCapturePayment_AfterPartialCancel_ReturnsCaptureRequestedStatus()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(600)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(200)
            ->build();

        $capture = $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $this->assertNotEmpty($capture->getId());
        $this->assertNotNull($capture->getStatus());
    }

    public function testCapturePayment_NonExistingPaymentId_ReturnsReferenceException()
    {
        try {
            $captureRequest = CapturePaymentRequestBuilder::create()
                ->withAmount(1000)
                ->build();

            $this->paymentsClient->capturePayment(self::NON_EXISTING_PAYMENT_ID, $captureRequest);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testCapturePayment_AfterCapture_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $firstCaptureRequest = CapturePaymentRequestBuilder::create()->build();

        $this->paymentsClient->capturePayment($paymentId, $firstCaptureRequest);

        try {
            $secondCaptureRequest = CapturePaymentRequestBuilder::create()->build();

            $this->paymentsClient->capturePayment($paymentId, $secondCaptureRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertSame('ACTION_NOT_ALLOWED_ON_TRANSACTION', $e->getErrors()[0]->id);
        }
    }

    public function testCapturePayment_AfterCancel_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

        try {
            $captureRequest = CapturePaymentRequestBuilder::create()->build();

            $this->paymentsClient->capturePayment($paymentId, $captureRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertSame('ACTION_NOT_ALLOWED_ON_TRANSACTION', $e->getErrors()[0]->id);
        }
    }

    public function testCapturePayment_AfterRefund_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(600)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->refundPayment($paymentId, $refundRequest);

        try {
            $additionalCaptureRequest = CapturePaymentRequestBuilder::create()->build();

            $this->paymentsClient->capturePayment($paymentId, $additionalCaptureRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertSame('ACTION_NOT_ALLOWED_ON_TRANSACTION', $e->getErrors()[0]->id);
        }
    }
}
