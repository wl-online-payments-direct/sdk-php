<?php

namespace OnlinePayments\Sdk\Examples;

use Exception;
use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\ClientTestCase;
use OnlinePayments\Sdk\Domain\GetPaymentProductsResponse;
use OnlinePayments\Sdk\Domain\PaymentProduct;
use OnlinePayments\Sdk\Domain\ProductDirectory;
use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductParams;
use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductsParams;
use OnlinePayments\Sdk\Merchant\Products\GetProductDirectoryParams;

/**
 * @group examples
 */
class ProductTest extends ClientTestCase
{
    /**
     * @return GetPaymentProductsResponse
     * @throws Exception
     */
    public function testRetrievePaymentProducts(): GetPaymentProductsResponse
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $findParams = new GetPaymentProductsParams();
        $findParams->setAmount(1000);
        $findParams->setCountryCode("NL");
        $findParams->setCurrencyCode("EUR");
        $findParams->addHide(['fields']);
        $findParams->setIsRecurring(true);
        $findParams->setLocale('en_US');

        $response = $client
            ->merchant($merchantId)
            ->products()
            ->getPaymentProducts($findParams);

        $this->assertNotEmpty(
            $response->getPaymentProducts(),
            'Expected at least one payment product'
        );

        return $response;
    }


    /**
     * @return GetPaymentProductsResponse
     * @throws Exception
     */
    public function testRetrievePaymentProductsMultipleHide(): GetPaymentProductsResponse
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $getParams = new GetPaymentProductsParams();
        $getParams->setAmount(1000);
        $getParams->setCountryCode('NL');
        $getParams->setCurrencyCode('EUR');
        $getParams->setHide(['fields', 'accountsOnFile']);
        $getParams->setIsRecurring(true);
        $getParams->setLocale('en_US');

        $response = $client
            ->merchant($merchantId)
            ->products()
            ->getPaymentProducts($getParams);

        $products = $response->getPaymentProducts();

        $this->assertNotEmpty(
            $products,
            'Expected at least one payment product when using multiple hide options'
        );

        return $response;
    }

    /**
     * @return PaymentProduct
     * @throws Exception
     * @throws ApiException
     */
    public function testRetrievePaymentProductFields(): PaymentProduct
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $getParams = new GetPaymentProductParams();
        $getParams->setAmount(1000);
        $getParams->setCurrencyCode('EUR');
        $getParams->setLocale('en_US');
        $getParams->setCountryCode('NL');
        $getParams->setIsRecurring(true);

        $product = $client
            ->merchant($merchantId)
            ->products()
            ->getPaymentProduct(1, $getParams);

        $this->assertSame(
            1,
            $product->getId(),
            'Expected payment product ID 1'
        );
        $this->assertSame(
            1,
            $product->getId(),
            'Expected payment product ID 1'
        );

        return $product;
    }

    /**
     * @return ProductDirectory
     * @throws Exception
     * @throws ApiException
     */
    public function testRetrievePaymentProductDirectory()
    {
        $this->markTestSkipped(
            'Cannot test product directory: for this test merchant the directory for product 809 in NL/EUR ' .
            'is not available and the platform always returns ReferenceException.'
        );

        $this->expectNotToPerformAssertions();

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $getParams = new GetProductDirectoryParams();

        $getParams->setCurrencyCode("EUR");
        $getParams->setCountryCode("NL");

        return $client->merchant($merchantId)->products()->getProductDirectory(809, $getParams);
    }
}
