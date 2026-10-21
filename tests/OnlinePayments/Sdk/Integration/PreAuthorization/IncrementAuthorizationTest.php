<?php

namespace OnlinePayments\Sdk\Integration\PreAuthorization;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\IncrementAuthorizationRequest;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\PreAuthorization\PreAuthorizationClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CancelPaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CapturePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\PreAuthorization\IncrementAuthorizationRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class IncrementAuthorizationTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '9999999999_0';
    private const CURRENCY_CODE = 'EUR';
    private const PAYMENT_AMOUNT = 1000;
    private const INCREMENTED_AMOUNT = 1500;

    private PaymentsClientInterface $paymentsClient;
    private PreAuthorizationClientInterface $preAuthorizationClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();
        $this->preAuthorizationClient = $this->client->merchant($this->getMerchantId())->preAuthorization();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testIncrementAuthorization_PreAuthorizedPayment_ReturnsIncrementedPayment(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $request = IncrementAuthorizationRequestBuilder::create()
            ->withAmount(self::INCREMENTED_AMOUNT)
            ->build();

        $response = $this->preAuthorizationClient->incrementAuthorization($paymentId, $request);

        $this->assertNotNull($response->getPayment());
        $this->assertNotEmpty($response->getPayment()->getId());
        $this->assertSame('PENDING_CAPTURE', $response->getPayment()->getStatus());

        $payment = $this->paymentsClient->getPayment($paymentId);

        $this->assertNotNull($payment);
        $this->assertSame('PENDING_CAPTURE', $payment->getStatus());
        $this->assertNotNull($payment->getPaymentOutput());
        $this->assertNotNull($payment->getPaymentOutput()->getAmountOfMoney());
        $this->assertSame(self::INCREMENTED_AMOUNT, $payment->getPaymentOutput()->getAmountOfMoney()->getAmount());
    }

    public function testIncrementAuthorization_PreAuthorizedPayment_WithCallContext_ReturnsIncrementedPayment(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $request = IncrementAuthorizationRequestBuilder::create()
            ->withAmount(self::INCREMENTED_AMOUNT)
            ->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test-increment-authorization-' . uniqid());

        $response = $this->preAuthorizationClient->incrementAuthorization($paymentId, $request, $callContext);

        $this->assertNotNull($response->getPayment());
        $this->assertNotEmpty($response->getPayment()->getId());
        $this->assertSame('PENDING_CAPTURE', $response->getPayment()->getStatus());

        $payment = $this->paymentsClient->getPayment($paymentId);

        $this->assertNotNull($payment);
        $this->assertSame('PENDING_CAPTURE', $payment->getStatus());
        $this->assertNotNull($payment->getPaymentOutput());
        $this->assertNotNull($payment->getPaymentOutput()->getAmountOfMoney());
        $this->assertSame(self::INCREMENTED_AMOUNT, $payment->getPaymentOutput()->getAmountOfMoney()->getAmount());
    }

    public function testIncrementAuthorization_TwoIncrements_ReturnsCumulativeAmount(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $firstResponse = $this->preAuthorizationClient->incrementAuthorization(
            $paymentId,
            IncrementAuthorizationRequestBuilder::create()->withAmount(1300)->build()
        );

        $this->assertNotNull($firstResponse->getPayment());

        $secondResponse = $this->preAuthorizationClient->incrementAuthorization(
            $paymentId,
            IncrementAuthorizationRequestBuilder::create()->withAmount(self::INCREMENTED_AMOUNT)->build()
        );

        $this->assertNotNull($secondResponse->getPayment());

        $payment = $this->paymentsClient->getPayment($paymentId);

        $this->assertNotNull($payment);
        $this->assertSame('PENDING_CAPTURE', $payment->getStatus());
        $this->assertNotNull($payment->getPaymentOutput());
        $this->assertNotNull($payment->getPaymentOutput()->getAmountOfMoney());
        $this->assertSame(self::INCREMENTED_AMOUNT, $payment->getPaymentOutput()->getAmountOfMoney()->getAmount());
    }

    public function testIncrementAuthorization_ThenCaptureIncrementedAmount_ReturnsCapturedPayment(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $this->preAuthorizationClient->incrementAuthorization(
            $paymentId,
            IncrementAuthorizationRequestBuilder::create()->withAmount(self::INCREMENTED_AMOUNT)->build()
        );

        $captureRequest = CapturePaymentRequestBuilder::create()
            ->withAmount(self::INCREMENTED_AMOUNT)
            ->withIsFinal(true)
            ->build();

        $capture = $this->paymentsClient->capturePayment($paymentId, $captureRequest);

        $this->assertNotEmpty($capture->getId());
        $this->assertSame('CAPTURE_REQUESTED', $capture->getStatus());
    }

    public function testIncrementAuthorization_NonExistingPaymentId_ReturnsReferenceException(): void
    {
        try {
            $this->preAuthorizationClient->incrementAuthorization(
                self::NON_EXISTING_PAYMENT_ID,
                IncrementAuthorizationRequestBuilder::create()->build()
            );

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testIncrementAuthorization_WithoutAmountOfMoney_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        try {
            $this->preAuthorizationClient->incrementAuthorization($paymentId, new IncrementAuthorizationRequest());

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testIncrementAuthorization_WithZeroAmount_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        try {
            $this->preAuthorizationClient->incrementAuthorization(
                $paymentId,
                IncrementAuthorizationRequestBuilder::create()->withAmount(0)->build()
            );

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testIncrementAuthorization_WithDifferentCurrency_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        try {
            $this->preAuthorizationClient->incrementAuthorization(
                $paymentId,
                IncrementAuthorizationRequestBuilder::create()->withCurrency('USD')->build()
            );

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testIncrementAuthorization_FinalAuthorizationPayment_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        try {
            $this->preAuthorizationClient->incrementAuthorization(
                $paymentId,
                IncrementAuthorizationRequestBuilder::create()->build()
            );

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testIncrementAuthorization_AfterCapture_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        try {
            $this->preAuthorizationClient->incrementAuthorization(
                $paymentId,
                IncrementAuthorizationRequestBuilder::create()->build()
            );

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testIncrementAuthorization_AfterCancel_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedMastercardPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(self::PAYMENT_AMOUNT)
            ->withCurrency(self::CURRENCY_CODE)
            ->build();

        $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

        try {
            $this->preAuthorizationClient->incrementAuthorization(
                $paymentId,
                IncrementAuthorizationRequestBuilder::create()->build()
            );

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
