<?php

namespace OnlinePayments\Sdk;

use Exception;
use OnlinePayments\Sdk\Domain\Address;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\CreateHostedCheckoutRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\SessionRequest;
use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductsParams;

/**
 * @group generated_code
 *
 */
class GeneratedCodeTest extends ClientTestCase
{
    public function testJsonMarshalling()
    {
        $errorResponseJsonString = <<<'EOD'
{
    "errorId": "123",
    "errors": [
        {
            "code": "1",
            "message": "Test message",
            "propertyName": "test"
        }
    ]
}
EOD;
        $errorResponseJsonString = str_replace("\r\n", "\n", $errorResponseJsonString);
        $errorResponse = new ErrorResponse();
        $errorResponse->setErrorId('123');
        $apiError = new APIError();
        $apiError->setCode('1');
        $apiError->setMessage('Test message');
        $apiError->setPropertyName('test');
        $errorResponse->setErrors(array($apiError));
        $jsonErrorResponse = $errorResponse->toJson();
        $this->assertEquals($errorResponseJsonString, str_replace("\r\n", "\n", $jsonErrorResponse));
        $actualErrorResponse = new ErrorResponse();
        $actualErrorResponse->fromJson($jsonErrorResponse);
        $this->assertEquals($errorResponse, $actualErrorResponse);
    }

    /**
     * @throws Exception
     */
    public function testCreateSessionsPost()
    {
        $client = $this->getClient();
        $client->setClientMetaInfo('{ "test": "test" }');
        $merchant = $client->merchant($this->getMerchantId());
        $sessionRequest = new SessionRequest();
        $sessionRequest->setTokens(array('e7303c8c-8b18-4929-9ae9-63d37575c352'));
        try {
            $sessions = $merchant->sessions();
            $response = $sessions->createSession($sessionRequest);
            $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\SessionResponse', $response);
        } catch (InvalidResponseException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        } catch (PaymentPlatformException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        } catch (Exception $e) {
            print_r($e);
            throw $e;
        }
    }

    /**
     * @throws Exception
     */
    public function testMerchant()
    {
        $client = $this->getClient();
        $merchant = $client->merchant($this->getMerchantId());
        $productQuery = new GetPaymentProductsParams();
        $productQuery->setAmount(1000);
        $productQuery->setCurrencyCode('EUR');
        $productQuery->setCountryCode('NL');

        try {
            $result = $merchant->products()->getPaymentProducts($productQuery);
            $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\GetPaymentProductsResponse', $result);
            $paymentProducts = $result->getPaymentProducts();
            foreach ($paymentProducts as $paymentProduct) {
                $this->assertNotEmpty($paymentProduct->getId());
            }
        } catch (InvalidResponseException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        } catch (PaymentPlatformException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        }
    }

    /**
     * @throws Exception
     */
    public function testProducts()
    {
        $client = $this->getClient();
        $merchant = $client->merchant($this->getMerchantId());
        try {
            $result = $merchant->products();
            $this->assertInstanceOf('\OnlinePayments\Sdk\Merchant\Products\ProductsClient', $result);
        } catch (InvalidResponseException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        } catch (PaymentPlatformException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        }
    }

    /**
     * @throws Exception
     */
    public function testHostedCheckout()
    {
        $client = $this->getClient();
        $merchant = $client->merchant($this->getMerchantId());
        $body = new CreateHostedCheckoutRequest();
        $body->setOrder(new Order());
        $body->getOrder()->setAmountOfMoney(new AmountOfMoney());
        $body->getOrder()->getAmountOfMoney()->setCurrencyCode('EUR');
        $body->getOrder()->getAmountOfMoney()->setAmount(2345);
        $body->getOrder()->setCustomer(new Customer());
        $body->getOrder()->getCustomer()->setBillingAddress(new Address());
        $body->getOrder()->getCustomer()->getBillingAddress()->setCountryCode('NL');
        $body->getOrder()->getCustomer()->setMerchantCustomerId("123456789");
        try {
            $result = $merchant->hostedCheckout()->createHostedCheckout($body);
            $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\CreateHostedCheckoutResponse', $result);
        } catch (InvalidResponseException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        } catch (PaymentPlatformException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        } catch (ReferenceException $e) {
            print_r($e->getMessage() . PHP_EOL);
            print_r($e->getCode() . PHP_EOL);
            print_r($e->getResponse());
            throw $e;
        }
    }

    /**
     * @throws Exception
     */
    public function testCancelMissingPayment()
    {
        try {
            $client = $this->getClient();
            $merchant = $client->merchant($this->getMerchantId());
            $merchant->payments()->cancelPayment('1_1');
        } catch (ReferenceException $e) {
            $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\ErrorResponse', $e->getResponse());
        }
    }
}
