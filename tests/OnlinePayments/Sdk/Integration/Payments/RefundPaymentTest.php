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

class RefundPaymentTest extends TestCase
{
    private const INVALID_PAYMENT_ID = '4509444655';

    private PaymentsClientInterface $paymentsClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testRefundPayment_ValidPayment_ReturnsRefundRequestedStatus()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()->build();

        $captureResponse = $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency("EUR")
            ->build();

        $refundResponse = $this->paymentsClient->refundPayment($paymentId, $refundRequest);

        $this->assertNotEmpty($paymentId);
        $this->assertNotNull($refundResponse->getStatus());
        $this->assertNotEmpty($refundResponse->getId());
        $this->assertSame('CAPTURE_REQUESTED', $captureResponse->getStatus());
        $this->assertSame('REFUND_REQUESTED', $refundResponse->getStatus());
    }

    public function testRefundPayment_ValidPartialRefund_MultipleRefunds_ReturnsExpectedStatuses()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(1500, 'EUR');

        $captureRequest = CapturePaymentRequestBuilder::create()->build();

        $capture = $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $this->assertSame('CAPTURE_REQUESTED', $capture->getStatus());

        $firstRefundRequest = RefundRequestBuilder::create()
            ->withAmount(300)
            ->withCurrency("EUR")
            ->withIsFinal(false)
            ->build();

        $refundFirst = $this->paymentsClient->refundPayment($paymentId, $firstRefundRequest);

        $this->assertNotEmpty($refundFirst->getStatus());
        $this->assertSame('REFUND_REQUESTED', $refundFirst->getStatus());

        $secondRefundRequest = RefundRequestBuilder::create()
            ->withAmount(400)
            ->withCurrency("EUR")
            ->withIsFinal(false)
            ->build();

        $refundSecond = $this->paymentsClient->refundPayment($paymentId, $secondRefundRequest);

        $this->assertNotEmpty($refundSecond->getStatus());
        $this->assertSame('REFUND_REQUESTED', $refundSecond->getStatus());
    }

    public function testRefundPayment_TwoPartialAmounts_ThrowsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(500)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $firstRefundRequest = RefundRequestBuilder::create()
            ->withAmount(400)
            ->withCurrency("EUR")
            ->withIsFinal(false)
            ->build();

        $this->paymentsClient->refundPayment($paymentId, $firstRefundRequest);

        $secondRefundRequest = RefundRequestBuilder::create()
            ->withAmount(200)
            ->withCurrency("EUR")
            ->withIsFinal(false)
            ->build();

        try {
            $this->paymentsClient->refundPayment($paymentId, $secondRefundRequest);
            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertSame('ACTION_NOT_ALLOWED_ON_TRANSACTION', $e->getErrors()[0]->id);
        }
    }

    public function testRefundPayment_WithoutCapture_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        try {
            $refundRequest = RefundRequestBuilder::create()
                ->withAmount(1000)
                ->withCurrency("EUR")
                ->build();

            $this->paymentsClient->refundPayment($paymentId, $refundRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());

            $errors = $e->getErrors();

            $this->assertSame('ACTION_NOT_ALLOWED_ON_TRANSACTION', $errors[0]->id);
        }
    }

    public function testRefundPayment_InvalidPaymentId_ReturnsReferenceExceptionNotFound()
    {
        try {
            $refundRequest = RefundRequestBuilder::create()
                ->withAmount(100)
                ->withCurrency("EUR")
                ->build();

            $this->paymentsClient->refundPayment(self::INVALID_PAYMENT_ID, $refundRequest);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testRefundPayment_AfterCancel_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

        try {
            $refundRequest = RefundRequestBuilder::create()
                ->withAmount(1000)
                ->withCurrency("EUR")
                ->build();

            $this->paymentsClient->refundPayment($paymentId, $refundRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testRefundPayment_AfterPreviousFullRefund_ThrowsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $captureRequest = CapturePaymentRequestBuilder::create()->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $firstRefundRequest = RefundRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency("EUR")
            ->withIsFinal(false)
            ->build();

        $firstResponse = $this->paymentsClient->refundPayment($paymentId, $firstRefundRequest);

        $this->assertNotNull($firstResponse);
        $this->assertSame('REFUND_REQUESTED', $firstResponse->getStatus());

        $secondRefundRequest = RefundRequestBuilder::create()
            ->withAmount(100)
            ->withCurrency("EUR")
            ->withIsFinal(false)
            ->build();

        try {
            $this->paymentsClient->refundPayment($paymentId, $secondRefundRequest);
            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertSame('ACTION_NOT_ALLOWED_ON_TRANSACTION', $e->getErrors()[0]->id);
        }
    }

    public function testRefundPayment_SingleRefundExceedsCaptured_ThrowsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(500)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(600)
            ->withCurrency("EUR")
            ->withIsFinal(false)
            ->build();

        try {
            $this->paymentsClient->refundPayment($paymentId, $refundRequest);
            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertSame('ACTION_NOT_ALLOWED_ON_TRANSACTION', $e->getErrors()[0]->id);
        }
    }
}
