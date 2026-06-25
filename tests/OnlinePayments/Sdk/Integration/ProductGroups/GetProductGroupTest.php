<?php

namespace OnlinePayments\Sdk\Integration\ProductGroups;

use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\ProductGroups\GetProductGroupParamsBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetProductGroupTest extends TestCase
{
    private const DEFAULT_COUNTRY_CODE = 'NL';
    private const DEFAULT_CURRENCY_CODE = 'EUR';
    private const VALID_PAYMENT_PRODUCT_GROUP_ID = 'Cards';
    private const INVALID_PAYMENT_PRODUCT_GROUP_ID = 'invalid-group-id';

    private ProductGroupsClientInterface $productGroupsClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productGroupsClient = $this->client->merchant($this->getMerchantId())->productGroups();
    }

    public function testGetProductGroup_WithValidGroupId_ReturnsGroup(): void
    {
        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $response = $this->productGroupsClient->getProductGroup(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $params);

        $this->assertNotNull($response->getId());
        $this->assertSame(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $response->getId());
    }

    public function testGetProductGroup_WithAmount_ReturnsGroup(): void
    {
        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(2500)
            ->build();

        $response = $this->productGroupsClient->getProductGroup(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $params);

        $this->assertNotNull($response->getId());
        $this->assertSame(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $response->getId());
    }

    public function testGetProductGroup_WithIsRecurring_ReturnsGroup(): void
    {
        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withIsRecurring(true)
            ->build();

        $response = $this->productGroupsClient->getProductGroup(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $params);

        $this->assertNotNull($response->getId());
        $this->assertSame(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $response->getId());
    }

    public function testGetProductGroup_WithAddHide_ReturnsGroup(): void
    {
        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAddHideList(['accountsOnFile'])
            ->build();

        $response = $this->productGroupsClient->getProductGroup(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $params);

        $this->assertNotNull($response->getId());
        $this->assertSame(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $response->getId());

        $this->assertNotNull($params->getHide());
        $this->assertCount(1, $params->getHide());
        $this->assertEquals('accountsOnFile', $params->getHide()[0][0]);
    }

    public function testGetProductGroup_WithHideList_ReturnsGroup(): void
    {
        $hideList = ['fields'];

        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withHideList($hideList)
            ->build();

        $response = $this->productGroupsClient->getProductGroup(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $params);

        $this->assertNotNull($response->getId());
        $this->assertSame(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $response->getId());
        $this->assertSame($hideList, $params->getHide());
    }

    public function testGetProductGroup_WithNullInHideList_SkipsNullElement(): void
    {
        $addHideList = ['accountsOnFile', null];

        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAddHideList($addHideList)
            ->build();

        $response = $this->productGroupsClient->getProductGroup(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $params);

        $this->assertNotNull($response->getId());
        $this->assertSame(self::VALID_PAYMENT_PRODUCT_GROUP_ID, $response->getId());

        $this->assertCount(1, $params->getHide());
        $this->assertNull($params->getHide()[0][1]);
    }

    public function testGetProductGroup_ParamGetters_ReturnExpectedValues(): void
    {
        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(2500)
            ->withIsRecurring(false)
            ->build();

        $this->assertSame(self::DEFAULT_COUNTRY_CODE, $params->getCountryCode());
        $this->assertSame(self::DEFAULT_CURRENCY_CODE, $params->getCurrencyCode());
        $this->assertSame(2500, $params->getAmount());
        $this->assertFalse($params->getIsRecurring());
    }

    public function testGetProductGroup_WithInvalidGroupId_ThrowsReferenceException(): void
    {
        $params = GetProductGroupParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        try {
            $this->productGroupsClient->getProductGroup(self::INVALID_PAYMENT_PRODUCT_GROUP_ID, $params);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (InvalidResponseException $e) {
            $this->assertSame(404, $e->getResponse()->getHttpStatusCode());
        }
    }
}
