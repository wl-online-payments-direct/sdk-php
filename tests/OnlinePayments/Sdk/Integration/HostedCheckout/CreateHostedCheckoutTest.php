<?php

namespace OnlinePayments\Sdk\Integration\HostedCheckout;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedCheckout\CreateHostedCheckoutRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class CreateHostedCheckoutTest extends TestCase
{
    private HostedCheckoutClientInterface $hostedCheckoutClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hostedCheckoutClient = $this->client->merchant($this->getMerchantId())->hostedCheckout();
    }

    public function testCreateHostedCheckout_WithCardPayment_ReturnHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withFirstName('John')
            ->withSurname('Doe')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithCustomerDetails_ReturnHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withAmount(5000)
            ->withCurrency('EUR')
            ->withCountryCode('DE')
            ->withLocale('en_GB')
            ->withFirstName('Jane')
            ->withSurname('Smith')
            ->withEmailAddress('jane@example.com')
            ->withPhoneNumber('+441234567890')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithFilters_ReturnHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withAmount(2500)
            ->withCurrency('EUR')
            ->withFirstName('Bob')
            ->withSurname('Johnson')
            ->withCountryCode('DE')
            ->withLocale('de_DE')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithSessionTimeout_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withSessionTimeout(300)
            ->withFirstName('Alex')
            ->withSurname('Williams')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithDifferentLocales_ReturnsHostedCheckoutId()
    {
        $locales = ['en_US', 'de_DE', 'fr_FR', 'es_ES', 'it_IT', 'nl_NL'];

        foreach ($locales as $locale) {
            $request = CreateHostedCheckoutRequestBuilder::create()
                ->withLocale($locale)
                ->withFirstName('Alex')
                ->withSurname('Williams')
                ->build();

            $response = $this->hostedCheckoutClient->createHostedCheckout($request);

            $this->assertNotNull($response);
            $this->assertNotEmpty($response->getHostedCheckoutId());
            $this->assertNotEmpty($response->getRedirectUrl());
        }
    }

    public function testCreateHostedCheckout_WithCustomAmount_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withAmount(9999)
            ->withCurrency('EUR')
            ->withFirstName('Rich')
            ->withSurname('Customer')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithBillingAddress_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withFirstName('John')
            ->withSurname('Resident')
            ->withCountryCode('US')
            ->withCity('San Francisco')
            ->withStreet('Main Street')
            ->withHouseNumber('123')
            ->withState('CA')
            ->withZip('94102')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithClickToPay_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withCardClickToPay(true)
            ->withFirstName('ClickToPay')
            ->withSurname('Customer')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithGroupCards_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withCardGroupCards(true)
            ->withFirstName('GroupCards')
            ->withSurname('Customer')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithCallContext_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withFirstName('CallContext')
            ->withSurname('Test')
            ->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-hosted-checkout-" . uniqid());
        $response = $this->hostedCheckoutClient->createHostedCheckout($request, $callContext);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithShowResultPageHidden_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withShowResultPage(false)
            ->withFirstName('Silent')
            ->withSurname('Payment')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithShowResultPageShown_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withShowResultPage(true)
            ->withFirstName('Visible')
            ->withSurname('Result')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithRecurringPayment_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withIsRecurring(true)
            ->withFirstName('Recurring')
            ->withSurname('Payment')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithOneOffPayment_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withIsRecurring(false)
            ->withFirstName('OneOff')
            ->withSurname('Payment')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithNewUnscheduledCardOnFile_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withIsNewUnscheduledCardOnFileSeries(true)
            ->withFirstName('Card')
            ->withSurname('OnFile')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithoutTokenization_ReturnsHostedCheckoutId()
    {
        $request = CreateHostedCheckoutRequestBuilder::create()
            ->withIsNewUnscheduledCardOnFileSeries(false)
            ->withFirstName('No')
            ->withSurname('Token')
            ->build();

        $response = $this->hostedCheckoutClient->createHostedCheckout($request);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getHostedCheckoutId());
        $this->assertNotEmpty($response->getRedirectUrl());
    }

    public function testCreateHostedCheckout_WithMultipleHostedCheckouts_ReturnsHostedCheckoutId()
    {
        for ($i = 0; $i < 3; $i++) {
            $request = CreateHostedCheckoutRequestBuilder::create()
                ->withFirstName('Batch')
                ->withSurname("Customer$i")
                ->build();

            $response = $this->hostedCheckoutClient->createHostedCheckout($request);

            $this->assertNotNull($response);
            $this->assertNotEmpty($response->getHostedCheckoutId());
            $this->assertNotEmpty($response->getRedirectUrl());
        }
    }

    public function testCreateHostedCheckout_WithDifferentAmounts_ReturnsHostedCheckoutId()
    {
        $amounts = [1000, 2500, 5000, 10000];

        foreach ($amounts as $amount) {
            $request = CreateHostedCheckoutRequestBuilder::create()
                ->withAmount($amount)
                ->build();

            $response = $this->hostedCheckoutClient->createHostedCheckout($request);

            $this->assertNotNull($response);
            $this->assertNotEmpty($response->getHostedCheckoutId());
            $this->assertNotEmpty($response->getRedirectUrl());
        }
    }

    public function testCreateHostedCheckout_WithDifferentCurrencies_ReturnsHostedCheckoutId()
    {
        $currencies = ['EUR', 'GBP', 'USD', 'CHF', 'SEK'];

        foreach ($currencies as $currency) {
            $request = CreateHostedCheckoutRequestBuilder::create()
                ->withAmount(2000)
                ->withCurrency($currency)
                ->build();

            $response = $this->hostedCheckoutClient->createHostedCheckout($request);

            $this->assertNotNull($response);
            $this->assertNotEmpty($response->getHostedCheckoutId());
            $this->assertNotEmpty($response->getRedirectUrl());
        }
    }
}
