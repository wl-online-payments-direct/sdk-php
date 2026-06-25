<?php

namespace OnlinePayments\Sdk\Integration\PaymentLinks;

use DateTime;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\PaymentLinks\CreatePaymentLinkRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class CreatePaymentLinkTest extends TestCase
{
    private PaymentLinksClientInterface $paymentLinksClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->paymentLinksClient = $this->client->merchant($this->getMerchantId())->paymentLinks();
    }

    public function testCreatePaymentLink_ValidInput_ReturnsPaymentLinkId()
    {
        $request = CreatePaymentLinkRequestBuilder::create()->build();

        $response = $this->paymentLinksClient->createPaymentLink($request);

        $this->assertNotEmpty($response->getPaymentLinkId());
        $this->assertNotNull($response->getStatus());
        $this->assertNotNull($response->getRedirectionUrl());
    }

    public function testCreatePaymentLink_ValidInputWithCallContext_ReturnsPaymentLinkId()
    {
        $request = CreatePaymentLinkRequestBuilder::create()->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test-payment-link-' . uniqid());

        $response = $this->paymentLinksClient->createPaymentLink($request, $callContext);

        $this->assertNotEmpty($response->getPaymentLinkId());
        $this->assertNotNull($response->getStatus());
        $this->assertNotNull($response->getRedirectionUrl());
    }

    public function testCreatePaymentLink_DisplayQRCode_ReturnsQrCodeBase64()
    {
        $request = CreatePaymentLinkRequestBuilder::create()
            ->withDisplayQRCode(true)
            ->build();

        $response = $this->paymentLinksClient->createPaymentLink($request);

        $this->assertNotEmpty($response->getQrCodeBase64());
        $this->assertNotNull($response->getPaymentLinkId());
    }

    public function testCreatePaymentLink_ReusableLinkEnabled_ReturnsIsReusableLink()
    {
        $request = CreatePaymentLinkRequestBuilder::create()
            ->withReusableLink(true)
            ->build();

        $response = $this->paymentLinksClient->createPaymentLink($request);

        $this->assertTrue($response->getIsReusableLink());
    }

    public function testCreatePaymentLink_InvalidAmount_ReturnsValidationException()
    {
        $request = CreatePaymentLinkRequestBuilder::create()
            ->withAmount(-1000)
            ->withCurrency('EUR')
            ->build();

        try {
            $this->paymentLinksClient->createPaymentLink($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }

    public function testCreatePaymentLink_ExpirationDateInPast_ReturnsValidationException()
    {
        $request = CreatePaymentLinkRequestBuilder::create()
            ->withExpirationDate(new DateTime('-1 day'))
            ->build();

        try {
            $this->paymentLinksClient->createPaymentLink($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
