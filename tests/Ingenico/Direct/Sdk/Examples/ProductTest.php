<?php
namespace Ingenico\Direct\Sdk\Examples;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\GetPaymentProductsResponse;
use Ingenico\Direct\Sdk\Domain\PaymentProduct;
use Ingenico\Direct\Sdk\Domain\ProductDirectory;
use Ingenico\Direct\Sdk\Merchant\Products\GetPaymentProductParams;
use Ingenico\Direct\Sdk\Merchant\Products\GetPaymentProductsParams;
use Ingenico\Direct\Sdk\Merchant\Products\GetProductDirectoryParams;

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
        $findParams->setCountryCode("US");
        $findParams->setCurrencyCode("USD");
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
        $getParams->setCountryCode("US");
        $getParams->setCurrencyCode("USD");
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
        $getParams->setCurrencyCode("USD");
        $getParams->setLocale("en_US");
        $getParams->setCountryCode("US");
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
