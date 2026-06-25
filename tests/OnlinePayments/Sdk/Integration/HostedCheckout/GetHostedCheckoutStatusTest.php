<?php

namespace OnlinePayments\Sdk\Integration\HostedCheckout;

use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedCheckout\CreateHostedCheckoutRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetHostedCheckoutStatusTest extends TestCase
{
    private const INVALID_HOSTED_CHECKOUT_ID = '9999999999';

    private HostedCheckoutClientInterface $hostedCheckoutClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hostedCheckoutClient = $this->client->merchant($this->getMerchantId())->hostedCheckout();
    }

    public function testGetHostedCheckout_ValidHostedCheckoutId_ReturnsCheckoutStatus()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withFirstName('Status')
            ->withSurname('Check')
            ->build();

        $createResponse = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($createResponse->getHostedCheckoutId());

        $getResponse = $this->hostedCheckoutClient->getHostedCheckout($createResponse->getHostedCheckoutId());

        $this->assertNotNull($getResponse->getStatus());
    }

    public function testGetHostedCheckout_ValidHostedCheckoutId_ReturnsCreatedPaymentOutput()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withAmount(7500)
            ->withCurrency('EUR')
            ->withCountryCode('DE')
            ->withLocale('en_GB')
            ->withFirstName('Retrieve')
            ->withSurname('Payment')
            ->build();

        $createResponse = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($createResponse->getHostedCheckoutId());

        $getResponse = $this->hostedCheckoutClient->getHostedCheckout($createResponse->getHostedCheckoutId());

        $this->assertNotNull($getResponse->getCreatedPaymentOutput());
    }

    public function testGetHostedCheckout_InvalidHostedCheckoutId_ReturnsReferenceExceptionNotFound()
    {
        try {
            $this->hostedCheckoutClient->getHostedCheckout(self::INVALID_HOSTED_CHECKOUT_ID);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
