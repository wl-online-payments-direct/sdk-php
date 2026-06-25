<?php

namespace OnlinePayments\Sdk\Integration\Products;

use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Products\GetPaymentProductNetworksParamsBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetPaymentProductNetworksTest extends TestCase
{
    private const DEFAULT_COUNTRY_CODE = 'NL';
    private const DEFAULT_CURRENCY_CODE = 'EUR';
    private const VALID_PAYMENT_PRODUCT_NETWORKS_ID = 302;
    private const INVALID_PAYMENT_PRODUCT_ID = -1;

    private ProductsClientInterface $productsClientInterface;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productsClientInterface = $this->client->merchant($this->getMerchantId())->products();
    }

    public function testGetPaymentProductNetworks_WithValidProductId_ReturnsNetworks(): void
    {
        $params = GetPaymentProductNetworksParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $response = $this->productsClientInterface->getPaymentProductNetworks(self::VALID_PAYMENT_PRODUCT_NETWORKS_ID, $params);

        $this->assertNotEmpty($response->getNetworks());
        $this->assertNotNull($response->getNetworks()[0]);
    }

    public function testGetPaymentProductNetworks_WithAmount_ReturnsNetworks(): void
    {
        $params = GetPaymentProductNetworksParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(3000)
            ->build();

        $response = $this->productsClientInterface->getPaymentProductNetworks(self::VALID_PAYMENT_PRODUCT_NETWORKS_ID, $params);

        $this->assertNotEmpty($response->getNetworks());
    }

    public function testGetPaymentProductNetworks_WithIsRecurring_ReturnsNetworks(): void
    {
        $params = GetPaymentProductNetworksParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withIsRecurring(true)
            ->build();

        $response = $this->productsClientInterface->getPaymentProductNetworks(self::VALID_PAYMENT_PRODUCT_NETWORKS_ID, $params);

        $this->assertNotEmpty($response->getNetworks());
    }

    public function testGetPaymentProductNetworks_ParamGetters_ReturnExpectedValues(): void
    {
        $params = GetPaymentProductNetworksParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(3000)
            ->withIsRecurring(true)
            ->build();

        $this->assertSame(self::DEFAULT_COUNTRY_CODE, $params->getCountryCode());
        $this->assertSame(self::DEFAULT_CURRENCY_CODE, $params->getCurrencyCode());
        $this->assertSame(3000, $params->getAmount());
        $this->assertTrue($params->getIsRecurring());
    }

    public function testGetPaymentProductNetworks_WithInvalidProductId_ThrowsReferenceException(): void
    {
        $params = GetPaymentProductNetworksParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        try {
            $this->productsClientInterface->getPaymentProductNetworks(self::INVALID_PAYMENT_PRODUCT_ID, $params);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
