<?php
namespace OnlinePayments\Sdk\V1;

use Exception;
use OnlinePayments\Sdk\ClientTestCase;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\DeclinedPayoutException;
use OnlinePayments\Sdk\DeclinedRefundException;
use OnlinePayments\Sdk\Domain\Address;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\Card;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CardPayoutMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\CreatePaymentResponse;
use OnlinePayments\Sdk\Domain\CreatePayoutRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\GetIINDetailsRequest;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use OnlinePayments\Sdk\Domain\PaymentReferences;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutResult;
use OnlinePayments\Sdk\Domain\PersonalInformation;
use OnlinePayments\Sdk\Domain\PersonalName;
use OnlinePayments\Sdk\Domain\RefundErrorResponse;
use OnlinePayments\Sdk\Domain\RefundResponse;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ResponseException;
use OnlinePayments\Sdk\ValidationException;

/**
 * @group exceptions
 */
class ExceptionTest extends ClientTestCase
{
    /**
     * @throws Exception
     */
    public function testExceptionErrors()
    {
        try {
            $emptyBody = new GetIINDetailsRequest();
            $this->getClient()->merchant($this->getMerchantId())->services()->getIINdetails($emptyBody);
        } catch (ResponseException $e) {
            $this->assertNotEmpty($e->getErrorId());
            $errors = $e->getErrors();
            $this->assertCount(1, $errors);
            $this->assertContainsOnlyInstancesOf('\OnlinePayments\Sdk\Domain\APIError', $errors);
            return;
        }
        $this->fail('An expected exception has not been raised.');
    }

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
            "errorCode": null,
            "httpStatusCode": 400,
            "id": "PARAMETER_NOT_FOUND_IN_REQUEST",
            "message": "The parameter shown above was not found in the request received by OnlinePayments.",
            "propertyName": "bin",
            "retriable": null
        }
    ]
}
EOD;
        $errorResponse = new ErrorResponse();
        $errorResponse->fromJson($errorResponseJsonString);
        $responseException = new ResponseException($httpStatusCode, $errorResponse);
        $expectedResponseExceptionString = sprintf(
            "exception '%s' with message '%s'. in %s:%d\nHTTP status code: %s\nResponse:\n%s\nStack trace:\n%s",
            'OnlinePayments\Sdk\ResponseException',
            $responseException->getMessage(),
            $responseException->getFile(),
            $responseException->getLine(),
            $httpStatusCode,
            $errorResponseJsonString,
            $responseException->getTraceAsString()
        );
        // replace Windows \r\n with Unix \n before comparing
        $this->assertEquals(str_replace("\r\n", "\n", $expectedResponseExceptionString), str_replace("\r\n", "\n", (string)$responseException));
    }

    /**
     * @throws Exception
     */
    public function testValidationException()
    {
        $this->expectNotToPerformAssertions();

        try {
            $emptyBody = new GetIINDetailsRequest();
            $this->getClient()->merchant($this->getMerchantId())->services()->getIINdetails($emptyBody);
        } catch (ValidationException $e) {
            return;
        }
        $this->fail('An expected exception has not been raised.');
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
            $paymentResult = $e->getCreatePaymentResponse();
            $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\CreatePaymentResponse', $paymentResult);
            $payment = $paymentResult->getPayment();
            $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\PaymentResponse', $payment);
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
            $this->assertInstanceOf('\OnlinePayments\Sdk\V2\Domain\PayoutResult', $payoutResult);
            $this->assertNotEmpty($payoutResult->getId());
            $this->assertEquals('REJECTED', $payoutResult->getStatus());
            return;
        }
        $this->fail('An expected exception has not been raised');
    }

    /**
     * @throws Exception
     */
    public function testOnlinePaymentsExceptionForPayoutWithPayoutResult()
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

        $payoutReferences = new PaymentReferences();
        $payoutReferences->setMerchantReference("AcmeOrder0001");
        $createPayoutRequest->setReferences($payoutReferences);

        try {
            $client->merchant($merchantId)->payouts()->createPayout($createPayoutRequest);
        } catch (PlatformException $e) {
            $this->assertInstanceOf('\OnlinePayments\Sdk\V2\Domain\ErrorResponse', $e->getResponse());
            return;
        }
        $this->fail('An expected exception has not been raised');
    }

    public function testDeclinedPaymentException()
    {
        $paymentErrorResponse = new PaymentErrorResponse();
        $declinedPaymentException = new DeclinedPaymentException(0, $paymentErrorResponse);
        $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\CreatePaymentResponse', $declinedPaymentException->getCreatePaymentResponse());
        $paymentErrorResponse->setPaymentResult(new CreatePaymentResponse());
        $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\CreatePaymentResponse', $declinedPaymentException->getCreatePaymentResponse());
    }

    public function testDeclinedPayoutException()
    {
        $payoutErrorResponse = new PayoutErrorResponse();
        $declinedPayoutException = new DeclinedPayoutException(0, $payoutErrorResponse);
        $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\PayoutResult', $declinedPayoutException->getPayoutResult());
        $payoutErrorResponse->setPayoutResult(new PayoutResult());
        $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\PayoutResult', $declinedPayoutException->getPayoutResult());
    }

    public function testDeclinedRefundException()
    {
        $refundErrorResponse = new RefundErrorResponse();
        $declinedRefundException = new DeclinedRefundException(0, $refundErrorResponse);
        $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\RefundResponse', $declinedRefundException->getRefundResponse());
        $refundErrorResponse->setRefundResult(new RefundResponse());
        $this->assertInstanceOf('\OnlinePayments\Sdk\Domain\RefundResponse', $declinedRefundException->getRefundResponse());
    }
}
