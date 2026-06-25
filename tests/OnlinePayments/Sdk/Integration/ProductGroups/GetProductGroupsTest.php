<?php

namespace OnlinePayments\Sdk\Integration\ProductGroups;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\ProductGroups\GetProductGroupsParamsBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetProductGroupsTest extends TestCase
{
    private const DEFAULT_COUNTRY_CODE = 'NL';
    private const DEFAULT_CURRENCY_CODE = 'EUR';

    private ProductGroupsClientInterface $productGroupsClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productGroupsClient = $this->client->merchant($this->getMerchantId())->productGroups();
    }

    public function testGetProductGroups_WithCountryAndCurrency_ReturnsGroupList(): void
    {
        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $response = $this->productGroupsClient->getProductGroups($params);

        $this->assertNotEmpty($response->getPaymentProductGroups());
        $this->assertNotNull($response->getPaymentProductGroups()[0]);
    }

    public function testGetProductGroups_WithCallContext_ReturnsGroupList(): void
    {
        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test-product-groups-' . uniqid());

        $response = $this->productGroupsClient->getProductGroups($params, $callContext);

        $this->assertNotEmpty($response->getPaymentProductGroups());
        $this->assertNotNull($response->getPaymentProductGroups()[0]);
    }

    public function testGetProductGroups_WithAmount_ReturnsGroupList(): void
    {
        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(1000)
            ->build();

        $response = $this->productGroupsClient->getProductGroups($params);

        $this->assertNotEmpty($response->getPaymentProductGroups());
    }

    public function testGetProductGroups_WithIsRecurring_ReturnsGroupList(): void
    {
        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withIsRecurring(true)
            ->build();

        $response = $this->productGroupsClient->getProductGroups($params);

        $this->assertNotEmpty($response->getPaymentProductGroups());
    }

    public function testGetProductGroups_WithAddHide_ReturnsGroupList(): void
    {
        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAddHideList(['fields', 'accountsOnFile'])
            ->build();

        $response = $this->productGroupsClient->getProductGroups($params);

        $this->assertNotEmpty($response->getPaymentProductGroups());
        $this->assertNotNull($params->getHide());
        $this->assertCount(1, $params->getHide());
        $this->assertEquals('fields', $params->getHide()[0][0]);
        $this->assertEquals('accountsOnFile', $params->getHide()[0][1]);
    }

    public function testGetProductGroups_WithHideList_ReturnsGroupList(): void
    {
        $hideList = ['fields', 'translations'];

        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withHideList($hideList)
            ->build();

        $response = $this->productGroupsClient->getProductGroups($params);

        $this->assertNotEmpty($response->getPaymentProductGroups());
        $this->assertSame($hideList, $params->getHide());
    }

    public function testGetProductGroups_WithNullInHideList_SkipsNullElement(): void
    {
        $addHideList = ['fields', null];

        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAddHideList($addHideList)
            ->build();

        $response = $this->productGroupsClient->getProductGroups($params);

        $this->assertNotNull($response->getPaymentProductGroups());
        $this->assertCount(1, $params->getHide());
        $this->assertNull($params->getHide()[0][1]);
    }

    public function testGetProductGroups_ParamGetters_ReturnExpectedValues(): void
    {
        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(1000)
            ->withIsRecurring(true)
            ->build();

        $this->assertSame(self::DEFAULT_COUNTRY_CODE, $params->getCountryCode());
        $this->assertSame(self::DEFAULT_CURRENCY_CODE, $params->getCurrencyCode());
        $this->assertSame(1000, $params->getAmount());
        $this->assertTrue($params->getIsRecurring());
    }

    public function testGetProductGroups_MissingCountryCode_ThrowsValidationException(): void
    {
        $params = GetProductGroupsParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(null)
            ->build();

        try {
            $this->productGroupsClient->getProductGroups($params);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
