<?php

namespace OnlinePayments\Sdk\Integration\Products;

use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Products\GetPaymentProductParamsBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetPaymentProductTest extends TestCase
{
    private const DEFAULT_COUNTRY_CODE = 'NL';
    private const DEFAULT_CURRENCY_CODE = 'EUR';
    private const DEFAULT_LOCALE = 'en_US';
    private const VALID_PAYMENT_PRODUCT_ID = 1;
    private const INVALID_PAYMENT_PRODUCT_ID = -1;

    private ProductsClientInterface $productsClientInterface;

    protected function setUp(): void
    {
        parent::setUp();

        $this->productsClientInterface = $this->client->merchant($this->getMerchantId())->products();
    }

    public function testGetPaymentProduct_WithValidProductId_ReturnsProduct(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        $paymentProduct = $this->productsClientInterface->getPaymentProduct(self::VALID_PAYMENT_PRODUCT_ID, $params);

        $this->assertSame(self::VALID_PAYMENT_PRODUCT_ID, $paymentProduct->getId());
    }

    public function testGetPaymentProduct_WithLocale_ReturnsProduct(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withLocale(self::DEFAULT_LOCALE)
            ->build();

        $paymentProduct = $this->productsClientInterface->getPaymentProduct(self::VALID_PAYMENT_PRODUCT_ID, $params);

        $this->assertSame(self::VALID_PAYMENT_PRODUCT_ID, $paymentProduct->getId());
    }

    public function testGetPaymentProduct_WithAmount_ReturnsProduct(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAmount(2500)
            ->build();

        $paymentProduct = $this->productsClientInterface->getPaymentProduct(self::VALID_PAYMENT_PRODUCT_ID, $params);

        $this->assertSame(self::VALID_PAYMENT_PRODUCT_ID, $paymentProduct->getId());
    }

    public function testGetPaymentProduct_WithIsRecurring_ReturnsProduct(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withIsRecurring(false)
            ->build();

        $paymentProduct = $this->productsClientInterface->getPaymentProduct(self::VALID_PAYMENT_PRODUCT_ID, $params);

        $this->assertSame(self::VALID_PAYMENT_PRODUCT_ID, $paymentProduct->getId());
    }

    public function testGetPaymentProduct_WithAddHide_ReturnsProduct(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withAddHideList(['accountsOnFile'])
            ->build();

        $paymentProduct = $this->productsClientInterface->getPaymentProduct(self::VALID_PAYMENT_PRODUCT_ID, $params);

        $this->assertSame(self::VALID_PAYMENT_PRODUCT_ID, $paymentProduct->getId());
        $this->assertNotNull($params->getHide());
        $this->assertCount(1, $params->getHide());
        $this->assertEquals('accountsOnFile', $params->getHide()[0][0]);
    }

    public function testGetPaymentProduct_WithHideList_ReturnsProduct(): void
    {
        $hideList = ['fields'];

        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withHideList($hideList)
            ->build();

        $paymentProduct = $this->productsClientInterface->getPaymentProduct(self::VALID_PAYMENT_PRODUCT_ID, $params);

        $this->assertSame(self::VALID_PAYMENT_PRODUCT_ID, $paymentProduct->getId());
        $this->assertSame($hideList, $params->getHide());
    }

    public function testGetPaymentProduct_ParamGetters_ReturnExpectedValues(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withLocale(self::DEFAULT_LOCALE)
            ->withAmount(2500)
            ->withIsRecurring(false)
            ->build();

        $this->assertSame(self::DEFAULT_COUNTRY_CODE, $params->getCountryCode());
        $this->assertSame(self::DEFAULT_CURRENCY_CODE, $params->getCurrencyCode());
        $this->assertSame(self::DEFAULT_LOCALE, $params->getLocale());
        $this->assertSame(2500, $params->getAmount());
        $this->assertFalse($params->getIsRecurring());
    }

    public function testGetPaymentProduct_WithOperationType_ReturnsPaymentProduct(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->withOperationType('Authorization')
            ->build();

        $paymentProduct = $this->productsClientInterface->getPaymentProduct(self::VALID_PAYMENT_PRODUCT_ID, $params);

        $this->assertSame(self::VALID_PAYMENT_PRODUCT_ID, $paymentProduct->getId());
        $this->assertSame('Authorization', $params->getOperationType());
    }

    public function testGetPaymentProduct_WithInvalidProductId_ThrowsReferenceException(): void
    {
        $params = GetPaymentProductParamsBuilder::create()
            ->withCountryCode(self::DEFAULT_COUNTRY_CODE)
            ->withCurrencyCode(self::DEFAULT_CURRENCY_CODE)
            ->build();

        try {
            $this->productsClientInterface->getPaymentProduct(self::INVALID_PAYMENT_PRODUCT_ID, $params);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
