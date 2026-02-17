<?php

namespace OnlinePayments\Sdk\Examples;

use DateTime;
use Exception;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\ClientTestCase;
use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\Domain\Address;
use OnlinePayments\Sdk\Domain\AddressPersonal;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CapturePaymentRequest;
use OnlinePayments\Sdk\Domain\Card;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CompanyInformation;
use OnlinePayments\Sdk\Domain\ContactDetails;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\PersonalInformation;
use OnlinePayments\Sdk\Domain\PersonalName;
use OnlinePayments\Sdk\ValidationException;

/**
 * @group examples
 *
 */
class PaymentTest extends ClientTestCase
{
    /**
     * @return string
     * @throws Exception
     */
    public function testCreatePayment()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $createPaymentRequest = new CreatePaymentRequest();

        $order = new Order();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount(2980);
        $amountOfMoney->setCurrencyCode("EUR");
        $order->setAmountOfMoney($amountOfMoney);

        $customer = new Customer();
        $customer->setMerchantCustomerId("1234");
        $customer->setLocale("en_GB");

        $personalInformation = new PersonalInformation();

        $personalName = new PersonalName();
        $personalName->setTitle("Mr.");
        $personalName->setFirstName("Wile");
        $personalName->setSurname("Coyote");

        $personalInformation->setName($personalName);
        $personalInformation->setGender("male");
        $personalInformation->setDateOfBirth("19490917");
        $customer->setPersonalInformation($personalInformation);

        $companyInformation = new CompanyInformation();
        $companyInformation->setName("Acme Labs");
        $customer->setCompanyInformation($companyInformation);

        $billingAddress = new Address();
        $billingAddress->setStreet("Desertroad");
        $billingAddress->setHouseNumber("13");
        $billingAddress->setAdditionalInfo("b");
        $billingAddress->setZip("84536");
        $billingAddress->setCity("Monument Valley");
        $billingAddress->setState("Utah");
        $billingAddress->setCountryCode("US");
        $customer->setBillingAddress($billingAddress);

        $shippingAddress = new AddressPersonal();

        $shippingName = new PersonalName();
        $shippingName->setTitle("Miss");
        $shippingName->setFirstName("Road");
        $shippingName->setSurname("Runner");
        $shippingAddress->setName($shippingName);

        $contactDetails = new ContactDetails();
        $contactDetails->setEmailAddress("wile.e.coyote@acmelabs.com");
        $contactDetails->setPhoneNumber("+1234567890");
        $contactDetails->setFaxNumber("+1234567891");
        $customer->setContactDetails($contactDetails);

        $order->setCustomer($customer);

        $references = new OrderReferences();
        $references->setMerchantReference("AcmeOrder0001");
        $references->setDescriptor("Fast and Furry-ous");

        $order->setReferences($references);

        $createPaymentRequest->setOrder($order);

        $cardPaymentMethodSpecificInput = new CardPaymentMethodSpecificInput();
        $cardPaymentMethodSpecificInput->setPaymentProductId(1);

        $card = new Card();
        $card->setCvv("123");
        $card->setCardNumber("4567350000427977");
        $card->setExpiryDate("1230");
        $card->setCardholderName("Wile E. Coyote");
        $cardPaymentMethodSpecificInput->setCard($card);

        $createPaymentRequest->setCardPaymentMethodSpecificInput($cardPaymentMethodSpecificInput);

        try {
            $createPaymentResponse = $client
                ->merchant($merchantId)
                ->payments()
                ->createPayment($createPaymentRequest);

            $paymentId = $createPaymentResponse->getPayment()->getId();

            $this->assertNotEmpty($paymentId, 'Payment ID should not be empty');

            return $paymentId;
        } catch (ValidationException $e) {
            $message = "ValidationException (HTTP 400) - input validation error:" . PHP_EOL;

            foreach ($e->getErrors() as $error) {
                $message .= "- ";

                if (!empty($error->getPropertyName())) {
                    $message .= $error->getPropertyName() . ": ";
                }

                $message .= $error->getMessage();
                $message .= " (" . $error->getErrorCode() . ")" . PHP_EOL;
            }

            $this->fail($message);
        }
    }

    /**
     * @depends testCreatePayment
     * @param string $paymentId
     * @return string
     * @throws Exception
     * @throws ApiException
     */
    public function testRetrievePayment(string $paymentId)
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $paymentResponse = $client->merchant($merchantId)->payments()->getPayment($paymentId);
        $retrievedId = $paymentResponse->getId();

        $this->assertNotEmpty($retrievedId, 'Retrieved payment ID should not be empty');

        $this->assertSame(
            $paymentId,
            $retrievedId,
            'Retrieved payment ID should match the original payment ID'
        );

        return $paymentResponse->getId();
    }

    /**
     * @depends testRetrievePayment
     * @param string $paymentId
     * @return string
     * @throws ApiException
     * @throws Exception
     */
    public function testCapturePayment(string $paymentId)
    {
        $this->markTestSkipped(
            'Cannot test capture: for this test merchant the created payment remains in status PENDING_PAYMENT ' .
            'and capturePayment always fails with ACTION_NOT_ALLOWED_ON_TRANSACTION (50001127).'
        );

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $capturePaymentRequest = new CapturePaymentRequest();

        $capturePaymentRequest->setAmount(2980);

        $captureResponse =
            $client->merchant($merchantId)->payments()->capturePayment($paymentId, $capturePaymentRequest);
        return $captureResponse->getId();
    }

    /**
     * @return string
     * @throws Exception
     */
    public function testCreateMinimalPayment()
    {
        $this->expectNotToPerformAssertions();

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $createPaymentResponse = $client->merchant($merchantId)->payments()->createPayment(
            $this->getMinimalCreatePaymentRequest()
        );
        return $createPaymentResponse->getPayment()->getId();
    }

    /**
     * @param bool $correctCreditCardNumber
     * @return CreatePaymentRequest
     */
    protected function getMinimalCreatePaymentRequest(bool $correctCreditCardNumber = true) : CreatePaymentRequest
    {
        $createPaymentRequest = new CreatePaymentRequest();

        $order = new Order();

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setCurrencyCode("EUR");
        $amountOfMoney->setAmount(16523);
        $order->setAmountOfMoney($amountOfMoney);

        $customer = new Customer();
        $customer->setLocale("en");

        $billingAddress = new Address();
        $billingAddress->setCountryCode("NL");
        $customer->setBillingAddress($billingAddress);

        $order->setCustomer($customer);

        $createPaymentRequest->setOrder($order);

        $cardPaymentMethodSpecificInput = new CardPaymentMethodSpecificInput();
        $cardPaymentMethodSpecificInput->setPaymentProductId(1);

        $card = new Card();
        $card->setCvv("123");
        $card->setCardholderName("Wile E. Coyote");
        $card->setCardNumber($correctCreditCardNumber ? "4567350000427977" : "4444333322211212");
        $card->setExpiryDate("1230");
        $cardPaymentMethodSpecificInput->setCard($card);

        $createPaymentRequest->setCardPaymentMethodSpecificInput($cardPaymentMethodSpecificInput);

        return $createPaymentRequest;
    }

    /**
     * @throws Exception
     */
    public function testCreatePaymentWithIdempotenceKeyFailure()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $callContext = new CallContext();

        $dateTimeWithMicroseconds = DateTime::createFromFormat('U.u', (string) microtime(true));
        $callContext->setIdempotenceKey(__FUNCTION__ . '::' . $dateTimeWithMicroseconds->format('Ymd-His-u'));

        $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());

        try {
            $client->merchant($merchantId)->payments()->createPayment(
                $this->getMinimalCreatePaymentRequest(false),
                $callContext
            );
            $this->fail('Expected exception on first attempt');
        } catch (ValidationException|DeclinedPaymentException $e) {
            $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());
        }

        try {
            $client->merchant($merchantId)->payments()->createPayment(
                $this->getMinimalCreatePaymentRequest(false),
                $callContext
            );
            $this->fail('Expected exception on second attempt');
        } catch (ValidationException|DeclinedPaymentException $e) {
            $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());
        }

        try {
            $client->merchant($merchantId)->payments()->createPayment(
                $this->getMinimalCreatePaymentRequest(false),
                $callContext
            );
            $this->fail('Expected exception on third attempt');
        } catch (ValidationException|DeclinedPaymentException $e) {
            $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());
        }
    }
}
