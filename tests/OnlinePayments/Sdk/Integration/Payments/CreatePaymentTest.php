<?php

namespace OnlinePayments\Sdk\Integration\Payments;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreatePaymentTest extends TestCase
{
    private PaymentsClientInterface $paymentsClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentsClient = $this->client->merchant($this->getMerchantId())->payments();
    }

    public function testCreatePayment_ValidPayment_ReturnsAcceptedStatus()
    {
        $createRequest = CreatePaymentRequestBuilder::create()
            ->withAmount(1000)
            ->withCurrency("EUR")
            ->withMerchantCustomerId('JaneDoe123')
            ->build();

        $payment = $this->paymentsClient->createPayment($createRequest)->getPayment();

        $this->assertNotEmpty($payment->getId());
        $this->assertNotEmpty($payment->getStatus());
        $this->assertContains($payment->getStatus(), ['AUTHORIZED', 'PENDING_CAPTURE']);
    }

    public function testCreatePayment_ValidInputWithCallContext_ReturnsIdempotentPayment()
    {
        $createPayment = CreatePaymentRequestBuilder::create()->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('create-payment-' . uniqid());

        $firstResponse = $this->paymentsClient->createPayment($createPayment, $callContext)->getPayment();

        $this->assertNotEmpty($firstResponse->getId());
        $this->assertNotEmpty($firstResponse->getStatus());
        $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());

        $secondResponse = $this->paymentsClient->createPayment($createPayment, $callContext)->getPayment();

        $this->assertNotEmpty($secondResponse->getId());
        $this->assertSame($firstResponse->getId(), $secondResponse->getId());
        $this->assertNotEmpty($callContext->getIdempotenceRequestTimestamp());
    }

    public function testCreatePayment_InvalidCardNumber_ReturnsDeclinedPaymentException()
    {
        $createPayment = CreatePaymentRequestBuilder::create()
            ->withCardNumber("4111111111111110")
            ->build();

        try {
            $this->paymentsClient->createPayment($createPayment);

            $this->fail("Expected ValidationException was not thrown");
        } catch (DeclinedPaymentException $e) {
            $this->assertStringContainsString("REJECTED", $e->getMessage());
        }
    }

    public function testCreatePayment_UnsupportedCardFormat_ReturnsValidationException()
    {
        $createPayment = CreatePaymentRequestBuilder::create()
            ->withCardNumber("ABC-INVALID-CARD-9999")
            ->build();

        try {
            $this->paymentsClient->createPayment($createPayment);

            $this->fail("Expected ValidationException was not thrown");
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
            $this->assertSame("INVALID_VALUE", $e->getErrors()[0]->id);
        }
    }

    public function testCreatePayment_WithAutoCapture_ReturnsCreatedPayment(): void
    {
        $createRequest = CreatePaymentRequestBuilder::create()
            ->withAutoCapture(true)
            ->build();

        $payment = $this->paymentsClient->createPayment($createRequest)->getPayment();

        $this->assertNotNull($payment);
        $this->assertNotEmpty($payment->getId());
    }
}
