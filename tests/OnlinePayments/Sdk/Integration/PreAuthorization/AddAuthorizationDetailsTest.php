<?php

namespace OnlinePayments\Sdk\Integration\PreAuthorization;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\UpdateAuthorizationAdditionalDataRequest;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\PreAuthorization\PreAuthorizationClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CancelPaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments\CapturePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\PreAuthorization\UpdateAuthorizationAdditionalDataRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class AddAuthorizationDetailsTest extends TestCase
{
    private const NON_EXISTING_PAYMENT_ID = '9999999999_0';
    private const CURRENCY_CODE = 'EUR';
    private const PAYMENT_AMOUNT = 1000;

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

    public function testAddAuthorizationDetails_FullCarRentalData_ReturnsPayment(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $response = $this->preAuthorizationClient->addAuthorizationDetails(
            $paymentId,
            UpdateAuthorizationAdditionalDataRequestBuilder::create()->build()
        );

        $this->assertNotNull($response->getPayment());
        $this->assertNotEmpty($response->getPayment()->getId());
        $this->assertSame('PENDING_CAPTURE', $response->getPayment()->getStatus());
    }

    public function testAddAuthorizationDetails_MinimalCarRentalData_ReturnsPayment(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $request = UpdateAuthorizationAdditionalDataRequestBuilder::create()
            ->withMinimalCarRentalData()
            ->build();

        $response = $this->preAuthorizationClient->addAuthorizationDetails($paymentId, $request);

        $this->assertNotNull($response->getPayment());
        $this->assertNotEmpty($response->getPayment()->getId());
        $this->assertSame('PENDING_CAPTURE', $response->getPayment()->getStatus());
    }

    public function testAddAuthorizationDetails_WithCallContext_ReturnsPayment(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test-authorization-details-' . uniqid());

        $response = $this->preAuthorizationClient->addAuthorizationDetails(
            $paymentId,
            UpdateAuthorizationAdditionalDataRequestBuilder::create()->build(),
            $callContext
        );

        $this->assertNotNull($response->getPayment());
        $this->assertNotEmpty($response->getPayment()->getId());
        $this->assertSame('PENDING_CAPTURE', $response->getPayment()->getStatus());
    }

    public function testAddAuthorizationDetails_ThenCapture_ReturnsCapturedPayment(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $this->preAuthorizationClient->addAuthorizationDetails(
            $paymentId,
            UpdateAuthorizationAdditionalDataRequestBuilder::create()->build()
        );

        $capture = $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        $this->assertNotEmpty($capture->getId());
        $this->assertSame('CAPTURE_REQUESTED', $capture->getStatus());
    }

    public function testAddAuthorizationDetails_NonExistingPaymentId_ReturnsReferenceException(): void
    {
        try {
            $this->preAuthorizationClient->addAuthorizationDetails(
                self::NON_EXISTING_PAYMENT_ID,
                UpdateAuthorizationAdditionalDataRequestBuilder::create()->build()
            );

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testAddAuthorizationDetails_WithoutCarRentalData_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        try {
            $this->preAuthorizationClient->addAuthorizationDetails($paymentId, new UpdateAuthorizationAdditionalDataRequest());

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testAddAuthorizationDetails_InvalidCarRentalData_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $request = UpdateAuthorizationAdditionalDataRequestBuilder::create()
            ->withChargesCategory('invalid')
            ->build();

        try {
            $this->preAuthorizationClient->addAuthorizationDetails($paymentId, $request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testAddAuthorizationDetails_AfterCapture_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $this->paymentsClient->capturePayment($paymentId, CapturePaymentRequestBuilder::create()->build());

        try {
            $this->preAuthorizationClient->addAuthorizationDetails(
                $paymentId,
                UpdateAuthorizationAdditionalDataRequestBuilder::create()->build()
            );

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testAddAuthorizationDetails_AfterCancel_ReturnsValidationException(): void
    {
        $paymentId = $this->sdkHelper->createPreAuthorizedPaymentAndGetId(self::PAYMENT_AMOUNT, self::CURRENCY_CODE);

        $cancelRequest = CancelPaymentRequestBuilder::create()
            ->withAmount(self::PAYMENT_AMOUNT)
            ->withCurrency(self::CURRENCY_CODE)
            ->build();

        $this->paymentsClient->cancelPayment($paymentId, $cancelRequest);

        try {
            $this->preAuthorizationClient->addAuthorizationDetails(
                $paymentId,
                UpdateAuthorizationAdditionalDataRequestBuilder::create()->build()
            );

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
