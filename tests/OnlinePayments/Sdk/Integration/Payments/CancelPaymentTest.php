<?php

namespace OnlinePayments\Sdk\Integration\Payments;

use OnlinePayments\Sdk\Domain\CancelPaymentRequest;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CancelPaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CapturePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\RefundRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CancelPaymentTest extends TestCase
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

    public function testCancelPayment_ValidPayment_ReturnsCancelledStatusAndPaymentId()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(1000, 'EUR');

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency('EUR')
            ->withIsFinal(true)
            ->build();

        $response = $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

        $this->assertNotEmpty($response->getPayment()->getId());
        $this->assertNotNull($response->getPayment()->getStatus());
        $this->assertSame('CANCELLED', $response->getPayment()->getStatus());
    }

    public function testCancelPayment_WithOnePartialAmount_ReturnsCancelledStatus()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(300)
            ->withCurrency('EUR')
            ->withIsFinal(false)
            ->build();

        $response = $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

        $this->assertNotEmpty($response->getPayment()->getId());
        $this->assertSame(
            explode('_', $paymentId)[0],
            explode('_', $response->getPayment()->getId())[0]
        );

        $this->assertNotNull($response->getPayment()->getStatus());
        $this->assertSame('CANCELLED', $response->getPayment()->getStatus());
    }

    public function testCancelPayment_WithTwoPartialAmounts_ReturnsCancelledStatusForBothParts()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $cancelFirstRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(300)
            ->withCurrency('EUR')
            ->withIsFinal(false)
            ->build();

        $firstResponse = $this->paymentsClient->cancelPayment($paymentId, $cancelFirstRequest);

        $this->assertNotEmpty($firstResponse->getPayment()->getId());
        $this->assertSame(
            explode('_', $paymentId)[0],
            explode('_', $firstResponse->getPayment()->getId())[0]
        );

        $this->assertNotNull($firstResponse->getPayment()->getStatus());
        $this->assertSame('CANCELLED', $firstResponse->getPayment()->getStatus());

        $cancelSecondRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(500)
            ->withCurrency('EUR')
            ->withIsFinal(true)
            ->build();

        $secondResponse = $this->paymentsClient->cancelPayment($paymentId, $cancelSecondRequest);

        $this->assertNotEmpty($secondResponse->getPayment()->getId());
        $this->assertSame(
            explode('_', $paymentId)[0],
            explode('_', $secondResponse->getPayment()->getId())[0]
        );

        $this->assertNotNull($secondResponse->getPayment()->getStatus());
        $this->assertSame('CANCELLED', $secondResponse->getPayment()->getStatus());
    }

    public function testCancelPayment_AfterPartialCapture_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(600)
            ->withIsFinal(false)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(400)
            ->withCurrency('EUR')
            ->withIsFinal(false)
            ->build();

        try {
            $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCancelPayment_AfterPartialCancel_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $firstCancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(300)
            ->withCurrency('EUR')
            ->withIsFinal(false)
            ->build();

        $this->paymentsClient->cancelPayment($paymentId, $firstCancelRequest);

        $secondCancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(600)
            ->withCurrency('EUR')
            ->build();

        try {
            $this->paymentsClient->cancelPayment($paymentId, $secondCancelRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCancelPayment_WhenPaymentIsCaptured_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(800)
            ->withIsFinal(true)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(800)
            ->withCurrency('EUR')
            ->withIsFinal(true)
            ->build();

        try {
            $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCancelPayment_WhenPaymentIsAlreadyCanceled_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $firstCancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(800)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->cancelPayment($paymentId, $firstCancelRequest);

        try {
            $this->paymentsClient->cancelPayment($paymentId, new CancelPaymentRequest());

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCancelPayment_WhenPaymentIsRefunded_ReturnsValidationException()
    {
        $paymentId = $this->sdkHelper->createPaymentAndGetId(800, 'EUR');

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(800)
            ->withIsFinal(true)
            ->build();

        $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $refundRequest = RefundRequestBuilder::create()
            ->withAmount(800)
            ->withCurrency('EUR')
            ->build();

        $this->paymentsClient->refundPayment($paymentId, $refundRequest);

        try {
            $cancelRequest = CancelPaymentRequestBuilder::create()
                ->withAmount(800)
                ->withCurrency('EUR')
                ->withIsFinal(true)
                ->build();

            $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testCancelPayment_WithInvalidPaymentId_ReturnsReferenceExceptionNotFound()
    {
        try {
            $cancelRequest = CancelPaymentRequestBuilder::create()
                ->withAmount(800)
                ->withCurrency('EUR')
                ->withIsFinal(false)
                ->build();

            $this->paymentsClient->cancelPayment(self::INVALID_PAYMENT_ID, $cancelRequest);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
