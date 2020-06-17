<?php
namespace Ingenico\Direct\Sdk\Examples;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\Address;
use Ingenico\Direct\Sdk\Domain\AmountOfMoney;
use Ingenico\Direct\Sdk\Domain\PaymentProductFilter;
use Ingenico\Direct\Sdk\Domain\CreateHostedCheckoutRequest;
use Ingenico\Direct\Sdk\Domain\CreateHostedCheckoutResponse;
use Ingenico\Direct\Sdk\Domain\GetHostedCheckoutResponse;
use Ingenico\Direct\Sdk\Domain\HostedCheckoutSpecificInput;
use Ingenico\Direct\Sdk\Domain\PaymentProductFiltersHostedCheckout;
use Ingenico\Direct\Sdk\Domain\Customer;
use Ingenico\Direct\Sdk\Domain\Order;

/**
 * @group examples
 *
 */
class HostedCheckoutTest extends ClientTestCase
{
    /**
     * HOSTED CHECKOUT
     */

    /**
     * @return string
     * @throws Exception
     * @throws ApiException
     */
    public function testCreateHostedCheckout()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $createHostedCheckoutRequest = new CreateHostedCheckoutRequest();
        $order = new Order();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setCurrencyCode("EUR");
        $amountOfMoney->setAmount( 2345);
        $order->setAmountOfMoney($amountOfMoney);

        $customer = new Customer();
        $customer->setMerchantCustomerId("123456789");

        $billingAddress = new Address();
        $billingAddress->setCountryCode("NL");
        $customer->setBillingAddress($billingAddress);

        $order->setCustomer($customer);

        $createHostedCheckoutRequest->setOrder($order);

        $hostedCheckoutSpecificInput = new HostedCheckoutSpecificInput();
        $hostedCheckoutSpecificInput->setLocale("en_GB");
        $hostedCheckoutSpecificInput->setVariant("100");
        $hostedCheckoutSpecificInput->setPaymentProductFilters(new PaymentProductFiltersHostedCheckout());
        $hostedCheckoutSpecificInput->getPaymentProductFilters()->setExclude(new PaymentProductFilter());
        $hostedCheckoutSpecificInput->getPaymentProductFilters()->getExclude()->setProducts(array(120));
        $createHostedCheckoutRequest->setHostedCheckoutSpecificInput($hostedCheckoutSpecificInput);

        /** @var CreateHostedCheckoutResponse $createHostedCheckoutResponse */
        $createHostedCheckoutResponse =
            $client->merchant($merchantId)->hostedCheckout()->createHostedCheckout($createHostedCheckoutRequest);
        return $createHostedCheckoutResponse->getHostedCheckoutId();
    }

    /**
     * @depends testCreateHostedCheckout
     * @param string $hostedCheckoutId
     * @return string
     * @throws ApiException
     * @throws Exception
     */
    public function testGetHostedCheckoutStatus($hostedCheckoutId)
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        /** @var GetHostedCheckoutResponse $getHostedCheckoutResponse */
        $getHostedCheckoutResponse = $client->merchant($merchantId)->hostedCheckout()->getHostedCheckout($hostedCheckoutId);
        return $getHostedCheckoutResponse->getStatus();
    }
}
