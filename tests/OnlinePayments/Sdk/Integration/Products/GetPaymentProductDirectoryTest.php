<?php

namespace OnlinePayments\Sdk\Integration\Products;

use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Products\GetProductDirectoryParamsBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetPaymentProductDirectoryTest extends TestCase
{
    private const DEFAULT_COUNTRY_CODE = 'NL';
    private const DEFAULT_CURRENCY_CODE = 'EUR';
    private const VALID_PAYMENT_PRODUCT_DIRECTORY_ID = 809;
    private const INVALID_PAYMENT_PRODUCT_ID = -1;

    private ProductsClientInterface $productsClientInterface;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productsClientInterface = $this->client->merchant($this->getMerchantId())->products();
    }

    public function testGetProductDirectory_WithValidProductId_ReturnsDirectory(): void
    {
        $this->markTestSkipped('Test is skipped because no payment method supports directory fot the test merchant.');

        $params = GetProductDirectoryParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $productDirectory = $this->productsClientInterface->getProductDirectory(self::VALID_PAYMENT_PRODUCT_DIRECTORY_ID, $params);

        $this->assertNotEmpty($productDirectory->getEntries());
        $this->assertNotNull($productDirectory->getEntries()[0]);
    }

    public function testGetProductDirectory_WithInvalidProductId_ThrowsReferenceException(): void
    {
        $params = GetProductDirectoryParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        try {
            $this->productsClientInterface->getProductDirectory(self::INVALID_PAYMENT_PRODUCT_ID, $params);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testGetProductDirectory_ParamGetters_ReturnExpectedValues(): void
    {
        $params = GetProductDirectoryParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $this->assertSame(self::DEFAULT_COUNTRY_CODE, $params->getCountryCode());
        $this->assertSame(self::DEFAULT_CURRENCY_CODE, $params->getCurrencyCode());
    }
}
