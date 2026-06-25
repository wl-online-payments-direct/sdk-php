<?php

namespace OnlinePayments\Sdk\Integration\PrivacyPolicy;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\PrivacyPolicy\PrivacyPolicyClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\PrivacyPolicy\GetPrivacyPolicyParamsBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetPrivacyPolicyTest extends TestCase
{
    private PrivacyPolicyClientInterface $privacyPolicyClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->privacyPolicyClient = $this->client->merchant($this->merchantId)->privacyPolicy();
    }

    public function testGetPrivacyPolicy_WithValidInput_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
    }

    public function testGetPrivacyPolicy_WithValidInput_WithCallContext_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()->build();
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-privacy-policy-" . uniqid());

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params, $callContext);

        $this->assertNotNull($response->getHtmlContent());
    }

    public function testGetPrivacyPolicy_WithSpecificPaymentProduct_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withVisaProduct()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame(1, $params->getPaymentProductId());
    }

    public function testGetPrivacyPolicy_WithEnglishLocale_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withEnglishLocale()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame('en_US', $params->getLocale());
    }

    public function testGetPrivacyPolicy_WithDutchLocale_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withDutchLocale()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame('nl_NL', $params->getLocale());
    }

    public function testGetPrivacyPolicy_WithFrenchLocale_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withFrenchLocale()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame('fr_FR', $params->getLocale());
    }

    public function testGetPrivacyPolicy_WithGermanLocale_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withGermanLocale()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame('de_DE', $params->getLocale());
    }

    public function testGetPrivacyPolicy_WithVisaProduct_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withVisaProduct()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame(1, $params->getPaymentProductId());
    }

    public function testGetPrivacyPolicy_WithAmericanExpressProduct_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withAmericanExpressProduct()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame(2, $params->getPaymentProductId());
    }

    public function testGetPrivacyPolicy_WithMasterCardProduct_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withMasterCardProduct()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame(3, $params->getPaymentProductId());
    }

    public function testGetPrivacyPolicy_WithVisaProductAndFrenchLocale_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withVisaProduct()
            ->withFrenchLocale()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame(1, $params->getPaymentProductId());
        $this->assertSame('fr_FR', $params->getLocale());
    }

    public function testGetPrivacyPolicy_WithAmexProductAndGermanLocale_ReturnsHtmlContent(): void
    {
        $params = GetPrivacyPolicyParamsBuilder::create()
            ->withAmericanExpressProduct()
            ->withGermanLocale()
            ->build();

        $response = $this->privacyPolicyClient->getPrivacyPolicy($params);

        $this->assertNotNull($response->getHtmlContent());
        $this->assertSame(2, $params->getPaymentProductId());
        $this->assertSame('de_DE', $params->getLocale());
    }
}
