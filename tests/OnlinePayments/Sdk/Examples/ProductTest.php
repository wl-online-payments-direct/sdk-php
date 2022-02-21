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
    public function testRetrievePaymentProducts()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $findParams = new GetPaymentProductsParams();

        $findParams->setAmount(1000);
        $findParams->setCountryCode("NL");
        $findParams->setCurrencyCode("EUR");
        $findParams->addHide("fields");
        $findParams->setIsRecurring(true);
        $findParams->setLocale("en_US");

        return $client->merchant($merchantId)->products()->getPaymentProducts($findParams);
    }

    /**
     * @return GetPaymentProductsResponse
     * @throws Exception
     */
    public function testRetrievePaymentProductsMultipleHide()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $getParams = new GetPaymentProductsParams();

        $getParams->setAmount(1000);
        $getParams->setCountryCode("NL");
        $getParams->setCurrencyCode("EUR");
        $getParams->setHide(array("fields", "accountsOnFile"));
        $getParams->setIsRecurring(true);
        $getParams->setLocale("en_US");

        return $client->merchant($merchantId)->products()->getPaymentProducts($getParams);
    }

    /**
     * @return PaymentProduct
     * @throws Exception
     * @throws ApiException
     */
    public function testRetrievePaymentProductFields()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $getParams = new GetPaymentProductParams();

        $getParams->setAmount(1000);
        $getParams->setCurrencyCode("EUR");
        $getParams->setLocale("en_US");
        $getParams->setCountryCode("NL");
        $getParams->setIsRecurring(true);

        return $client->merchant($merchantId)->products()->getPaymentProduct(1, $getParams);
    }

    /**
     * @return ProductDirectory
     * @throws Exception
     * @throws ApiException
     */
    public function testRetrievePaymentProductDirectory()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $getParams = new GetProductDirectoryParams();

        $getParams->setCurrencyCode("EUR");
        $getParams->setCountryCode("NL");

        return $client->merchant($merchantId)->products()->getProductDirectory(809, $getParams);
    }
}
