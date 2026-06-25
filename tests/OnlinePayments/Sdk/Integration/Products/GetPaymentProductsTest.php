<?php

namespace OnlinePayments\Sdk\Integration\Products;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Products\GetPaymentProductsParamsBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetPaymentProductsTest extends TestCase
{
    private const DEFAULT_COUNTRY_CODE = 'NL';
    private const DEFAULT_CURRENCY_CODE = 'EUR';
    private const DEFAULT_LOCALE = 'en_US';

    private ProductsClientInterface $productsClientInterface;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productsClientInterface = $this->client->merchant($this->getMerchantId())->products();
    }

    public function testGetPaymentProducts_WithCountryAndCurrency_ReturnsProductList(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $response = $this->productsClientInterface->getPaymentProducts($params);

        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotNull($response->getPaymentProducts()[0]);
        $this->assertGreaterThan(0, $response->getPaymentProducts()[0]->getId());
    }

    public function testGetPaymentProducts_WithCallContext_ReturnsProductList(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('get-products-' . uniqid());

        $response = $this->productsClientInterface->getPaymentProducts($params, $callContext);

        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotNull($response->getPaymentProducts()[0]);
        $this->assertGreaterThan(0, $response->getPaymentProducts()[0]->getId());
    }

    public function testGetPaymentProducts_WithLocale_ReturnsProductList(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withLocale(self::DEFAULT_LOCALE)
            ->build();

        $response = $this->productsClientInterface->getPaymentProducts($params);

        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotNull($response->getPaymentProducts()[0]);
        $this->assertGreaterThan(0, $response->getPaymentProducts()[0]->getId());
    }

    public function testGetPaymentProducts_WithAmount_ReturnsProductList(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(1000)
            ->build();

        $response = $this->productsClientInterface->getPaymentProducts($params);

        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotNull($response->getPaymentProducts()[0]);
        $this->assertGreaterThan(0, $response->getPaymentProducts()[0]->getId());
    }

    public function testGetPaymentProducts_WithIsRecurring_ReturnsProductList(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withIsRecurring(true)
            ->build();

        $response = $this->productsClientInterface->getPaymentProducts($params);

        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotNull($response->getPaymentProducts()[0]);
        $this->assertGreaterThan(0, $response->getPaymentProducts()[0]->getId());
    }

    public function testGetPaymentProducts_WithAddHide_ReturnsProductList(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAddHideList(['fields', 'accountsOnFile'])
            ->build();

        $response = $this->productsClientInterface->getPaymentProducts($params);

        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotNull($params->getHide());
        $this->assertCount(1, $params->getHide());
        $this->assertEquals('fields', $params->getHide()[0][0]);
        $this->assertEquals('accountsOnFile', $params->getHide()[0][1]);
    }

    public function testGetPaymentProducts_WithHideList_ReturnsProductList(): void
    {
        $hideList = ['fields', 'translations'];

        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withHideList($hideList)
            ->build();

        $response = $this->productsClientInterface->getPaymentProducts($params);

        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertSame($hideList, $params->getHide());
    }

    public function testGetPaymentProducts_ParamGetters_ReturnExpectedValues(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withLocale(self::DEFAULT_LOCALE)
            ->withAmount(1000)
            ->withIsRecurring(true)
            ->build();

        $this->assertSame(self::DEFAULT_COUNTRY_CODE, $params->getCountryCode());
        $this->assertSame(self::DEFAULT_CURRENCY_CODE, $params->getCurrencyCode());
        $this->assertSame(self::DEFAULT_LOCALE, $params->getLocale());
        $this->assertSame(1000, $params->getAmount());
        $this->assertTrue($params->getIsRecurring());
    }

    public function testGetPaymentProducts_WithOperationType_ReturnsPaymentProducts(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withOperationType('Authorization')
            ->build();

        $response = $this->productsClientInterface->getPaymentProducts($params);

        $this->assertNotNull($response);
        $this->assertNotEmpty($response->getPaymentProducts());
        $this->assertNotNull($response->getPaymentProducts()[0]);
        $this->assertGreaterThan(0, $response->getPaymentProducts()[0]->getId());
        $this->assertSame('Authorization', $params->getOperationType());
    }

    public function testGetPaymentProducts_MissingCountryCode_ThrowsValidationException(): void
    {
        $params = GetPaymentProductsParamsBuilder::create()
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        try {
            $this->productsClientInterface->getPaymentProducts($params);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
