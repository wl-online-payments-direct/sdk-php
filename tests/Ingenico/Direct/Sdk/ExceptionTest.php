<?php
namespace Ingenico\Direct\Sdk;

use Exception;
use Ingenico\Direct\Sdk\Domain\Address;
use Ingenico\Direct\Sdk\Domain\AmountOfMoney;
use Ingenico\Direct\Sdk\Domain\BankAccountIban;
use Ingenico\Direct\Sdk\Domain\Card;
use Ingenico\Direct\Sdk\Domain\CardPayoutMethodSpecificInput;
use Ingenico\Direct\Sdk\Domain\CreatePaymentResponse;
use Ingenico\Direct\Sdk\Domain\ErrorResponse;
use Ingenico\Direct\Sdk\Domain\CreatePaymentRequest;
use Ingenico\Direct\Sdk\Domain\PaymentErrorResponse;
use Ingenico\Direct\Sdk\Domain\CardPaymentMethodSpecificInput;
use Ingenico\Direct\Sdk\Domain\CreatePaymentResult;
use Ingenico\Direct\Sdk\Domain\Customer;
use Ingenico\Direct\Sdk\Domain\Order;
use Ingenico\Direct\Sdk\Domain\PaymentReferences;
use Ingenico\Direct\Sdk\Domain\PersonalInformation;
use Ingenico\Direct\Sdk\Domain\PersonalName;
use Ingenico\Direct\Sdk\Domain\CreatePayoutRequest;
use Ingenico\Direct\Sdk\Domain\PayoutErrorResponse;
use Ingenico\Direct\Sdk\Domain\PayoutCustomer;
use Ingenico\Direct\Sdk\Domain\PayoutReferences;
use Ingenico\Direct\Sdk\Domain\PayoutResult;
use Ingenico\Direct\Sdk\Domain\RefundErrorResponse;
use Ingenico\Direct\Sdk\Domain\RefundResponse;
use Ingenico\Direct\Sdk\Domain\RefundResult;
use Ingenico\Direct\Sdk\Domain\GetIINDetailsRequest;

/**
 * @group exceptions
 */
class Client_ExceptionTest extends ClientTestCase
{

    public function testExceptionWithoutErrors()
    {
        $responseException = new ResponseException(0, new ErrorResponse());
        $this->assertEmpty($responseException->getErrorId());
        $this->assertCount(0, $responseException->getErrors());
    }

    public function testExceptionStringRepresentation()
    {
        $httpStatusCode = 400;
        $errorResponseJsonString = <<<'EOD'
{
    "errorId": "8a41a5dd-7366-4026-a41b-e98c56808edd",
    "errors": [
        {
            "category": "DIRECT_PLATFORM_ERROR",
            "code": "20000000",
            "httpStatusCode": 400,
            "id": "PARAMETER_NOT_FOUND_IN_REQUEST",
            "message": "The parameter shown above was not found in the request received by Direct.",
            "propertyName": "bin"
        }
    ]
}
EOD;
        $errorResponse = new ErrorResponse();
        $errorResponse->fromJson($errorResponseJsonString);
        $responseException = new ResponseException($httpStatusCode, $errorResponse);
        $expectedResponseExceptionString = sprintf(
            "exception '%s' with message '%s'. in %s:%d\nHTTP status code: %s\nResponse:\n%s\nStack trace:\n%s",
            'Ingenico\Direct\Sdk\ResponseException',
            $responseException->getMessage(),
            $responseException->getFile(),
            $responseException->getLine(),
            $httpStatusCode,
            $errorResponseJsonString,
            $responseException->getTraceAsString()
        );
        // replace Windows \r\n with Unix \n before comparing
        $this->assertEquals(str_replace("\r\n", "\n", $expectedResponseExceptionString), str_replace("\r\n", "\n", (string) $responseException));
    }

    /**
     * @throws Exception
     */
    public function testAuthorizationException()
    {
        try {
            $invalidMerchantId = "123";
            $this->getClient()->merchant($invalidMerchantId)->services()->testConnection();
        } catch (AuthorizationException $e) {
            $this->assertNotNull($e);
            $this->assertEquals(403, $e->getHttpStatusCode());
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    /**
     * @throws Exception
     */
    public function testDeclinedPaymentExceptionForPaymentCreate()
    {
        $merchantId = $this->getMerchantId();

        $createPaymentRequest = new CreatePaymentRequest();

        $order = new Order();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setCurrencyCode("EUR");
        $amountOfMoney->setAmount(2997);
        $order->setAmountOfMoney($amountOfMoney);

        $customer = new Customer();
        $customer->setLocale("nl");

        $personalInformation = new PersonalInformation();
        $personalName = new PersonalName();
        $personalName->setFirstName("Johan");
        $personalName->setSurname("Cruijff");
        $personalInformation->setName($personalName);

        $customer->setPersonalInformation($personalInformation);

        $billingAddress = new Address();
        $billingAddress->setStreet("Nou Camp");
        $billingAddress->setHouseNumber("14");
        $billingAddress->setZip("1000 AA");
        $billingAddress->setCity("Barcelona");
        $billingAddress->setState("Catalunia");
        $billingAddress->setCountryCode("NL");
        $customer->setBillingAddress($billingAddress);

        $order->setCustomer($customer);
        $createPaymentRequest->setOrder($order);

        $cardPaymentMethodSpecificInput = new CardPaymentMethodSpecificInput();
        $cardPaymentMethodSpecificInput->setPaymentProductId(3);

        $nonExistingCardNumber = "1234567890123452";
        $card = new Card();
        $card->setCvv("123");
        $card->setCardNumber($nonExistingCardNumber);
        $card->setCardholderName("Wile E. Coyote");
        $card->setExpiryDate("1230");
        $cardPaymentMethodSpecificInput->setCard($card);

        $createPaymentRequest->setCardPaymentMethodSpecificInput($cardPaymentMethodSpecificInput);

        try {
            $this->getClient()->merchant($merchantId)->payments()->createPayment($createPaymentRequest);
        } catch (DeclinedPaymentException $e) {
            $paymentResult = $e->getPaymentResult();
            $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\CreatePaymentResponse', $paymentResult);
            $payment = $paymentResult->getPayment();
            $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\PaymentResponse', $payment);
            $this->assertNotEmpty($payment->getId());
            $this->assertEquals('REJECTED', $payment->getStatus());
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

    /**
     * @throws Exception
     */
    public function testDeclinedPayoutExceptionForPayout()
    {
        $this->markTestSkipped('Payouts are not available for all merchants');

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $createPayoutRequest = new CreatePayoutRequest();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount(2345);
        $amountOfMoney->setCurrencyCode("EUR");
        $createPayoutRequest->setAmountOfMoney($amountOfMoney);

        $cardPayoutMethodSpecificInput = new CardPayoutMethodSpecificInput();
        $cardPayoutMethodSpecificInput->setPaymentProductId(1);

        $card = new Card();
        $card->setCardholderName("Wile E. Coyote");
        $card->setCardNumber("4567350000427977");
        $card->setCvv("123");
        $card->setExpiryDate("1230");
        $cardPayoutMethodSpecificInput->setCard($card);

        $payoutReferences = new PaymentReferences();
        $payoutReferences->setMerchantReference("AcmeOrder0001");
        $createPayoutRequest->setReferences($payoutReferences);

        try {
            $client->merchant($merchantId)->payouts()->createPayout($createPayoutRequest);
        } catch (DeclinedPayoutException $e) {
            $payoutResult = $e->getPayoutResult();
            $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\PayoutResult', $payoutResult);
            $this->assertNotEmpty($payoutResult->getId());
            $this->assertEquals('REJECTED', $payoutResult->getStatus());
            return;
        }
        $this->fail('An expected exception has not been raised');
    }

    /**
     * @throws Exception
     */
    public function testDirectExceptionForPayoutWithPayoutResult() {
        $this->markTestSkipped('Payouts are not available for all merchants');

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();

        $createPayoutRequest = new CreatePayoutRequest();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount(2345);
        $amountOfMoney->setCurrencyCode("EUR");
        $createPayoutRequest->setAmountOfMoney($amountOfMoney);

        $cardPayoutMethodSpecificInput = new CardPayoutMethodSpecificInput();
        $cardPayoutMethodSpecificInput->setPaymentProductId(1);

        $payoutReferences = new PaymentReferences();
        $payoutReferences->setMerchantReference("AcmeOrder0001");
        $createPayoutRequest->setReferences($payoutReferences);

        try {
            $client->merchant($merchantId)->payouts()->createPayout($createPayoutRequest);
        } catch (DirectException $e) {
            $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\ErrorResponse', $e->getResponse());
            return;
        }
        $this->fail('An expected exception has not been raised');
    }

    public function testDeclinedPaymentException()
    {
        $paymentErrorResponse = new PaymentErrorResponse();
        $declinedPaymentException = new DeclinedPaymentException(0, $paymentErrorResponse);
        $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\CreatePaymentResponse', $declinedPaymentException->getPaymentResult());
        $paymentErrorResponse->setPaymentResult(new CreatePaymentResponse());
        $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\CreatePaymentResponse', $declinedPaymentException->getPaymentResult());
    }

    public function testDeclinedPayoutException()
    {
        $payoutErrorResponse = new PayoutErrorResponse();
        $declinedPayoutException = new DeclinedPayoutException(0, $payoutErrorResponse);
        $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\PayoutResult', $declinedPayoutException->getPayoutResult());
        $payoutErrorResponse->setPayoutResult(new PayoutResult());
        $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\PayoutResult', $declinedPayoutException->getPayoutResult());
    }

    public function testDeclinedRefundException()
    {
        $refundErrorResponse = new RefundErrorResponse();
        $declinedRefundException = new DeclinedRefundException(0, $refundErrorResponse);
        $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\RefundResponse', $declinedRefundException->getRefundResult());
        $refundErrorResponse->setRefundResult(new RefundResponse());
        $this->assertInstanceOf('\Ingenico\Direct\Sdk\Domain\RefundResponse', $declinedRefundException->getRefundResult());
    }
}
