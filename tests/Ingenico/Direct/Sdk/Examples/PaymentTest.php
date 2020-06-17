<?php
namespace Ingenico\Direct\Sdk\Examples;

use DateTime;
use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\CallContext;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\CapturePaymentRequest;
use Ingenico\Direct\Sdk\Domain\CaptureResponse;
use Ingenico\Direct\Sdk\Domain\ShoppingCart;
use Ingenico\Direct\Sdk\ValidationException;
use Ingenico\Direct\Sdk\Domain\Address;
use Ingenico\Direct\Sdk\Domain\AmountOfMoney;
use Ingenico\Direct\Sdk\Domain\Card;
use Ingenico\Direct\Sdk\Domain\CompanyInformation;
use Ingenico\Direct\Sdk\Domain\CreatePaymentRequest;
use Ingenico\Direct\Sdk\Domain\CreatePaymentResponse;
use Ingenico\Direct\Sdk\Domain\PaymentResponse;
use Ingenico\Direct\Sdk\Domain\AddressPersonal;
use Ingenico\Direct\Sdk\Domain\CardPaymentMethodSpecificInput;
use Ingenico\Direct\Sdk\Domain\ContactDetails;
use Ingenico\Direct\Sdk\Domain\Customer;
use Ingenico\Direct\Sdk\Domain\LineItem;
use Ingenico\Direct\Sdk\Domain\LineItemInvoiceData;
use Ingenico\Direct\Sdk\Domain\Order;
use Ingenico\Direct\Sdk\Domain\OrderReferences;
use Ingenico\Direct\Sdk\Domain\PersonalInformation;
use Ingenico\Direct\Sdk\Domain\PersonalName;

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
        $this->markTestSkipped('Payment may or may not succeed');

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

        $lineItem1 = new LineItem();

        $itemAmountOfMoney1 = new AmountOfMoney();
        $itemAmountOfMoney1->setAmount(2500);
        $itemAmountOfMoney1->setCurrencyCode("EUR");
        $lineItem1->setAmountOfMoney($itemAmountOfMoney1);

        $lineItemInvoiceData1 = new LineItemInvoiceData();
        $lineItemInvoiceData1->setDescription("ACME Super Outfit");
        $lineItem1->setInvoiceData($lineItemInvoiceData1);

        $lineItem2 = new LineItem();

        $itemAmountOfMoney2 = new AmountOfMoney();
        $itemAmountOfMoney2->setCurrencyCode("EUR");
        $itemAmountOfMoney2->setAmount(480);
        $lineItem2->setAmountOfMoney($itemAmountOfMoney2);

        $lineItemInvoiceData2 = new LineItemInvoiceData();
        $lineItemInvoiceData2->setDescription("Aspirin");
        $lineItem2->setInvoiceData($lineItemInvoiceData2);

        $shoppingCart = new ShoppingCart();
        $shoppingCart->setItems(array($lineItem1, $lineItem2));
        $order->setShoppingCart($shoppingCart);

        $createPaymentRequest->setOrder($order);

        $cardPaymentMethodSpecificInput = new CardPaymentMethodSpecificInput();
        $cardPaymentMethodSpecificInput->setPaymentProductId(1);
        $cardPaymentMethodSpecificInput->setSkipAuthentication(false);

        $card = new Card();
        $card->setCvv("123");
        $card->setCardNumber("4567350000427977");
        $card->setExpiryDate("1230");
        $card->setCardholderName("Wile E. Coyote");
        $cardPaymentMethodSpecificInput->setCard($card);

        $createPaymentRequest->setCardPaymentMethodSpecificInput($cardPaymentMethodSpecificInput);

        /** @var CreatePaymentResponse $createPaymentResponse */
        $createPaymentResponse = $client->merchant($merchantId)->payments()->createPayment($createPaymentRequest);
        return $createPaymentResponse->getPayment()->getId();
    }

    /**
     * @depends testCreatePayment
     * @param string $paymentId
     * @return string
     * @throws Exception
     * @throws ApiException
     */
    public function testRetrievePayment($paymentId)
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        /** @var PaymentResponse $paymentResponse */
        $paymentResponse = $client->merchant($merchantId)->payments()->getPayment($paymentId);
        return $paymentResponse->getId();
    }

    /**
     * @depends testRetrievePayment
     * @param string $paymentId
     * @return string
     * @throws ApiException
     * @throws Exception
     */
    public function testCapturePayment($paymentId)
    {
        $this->markTestSkipped('Payment may or may not be approvable');

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $capturePaymentRequest = new CapturePaymentRequest();

        $capturePaymentRequest->setAmount(2980);

        /** @var CaptureResponse $captureResponse */
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
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        /** @var CreatePaymentResponse $createPaymentResponse */
        $createPaymentResponse = $client->merchant($merchantId)->payments()->createPayment(
            $this->getMinimalCreatePaymentRequest()
        );
        return $createPaymentResponse->getPayment()->getId();
    }

    /**
     * @param bool $correctCreditCardNumber
     * @return CreatePaymentRequest
     */
    protected function getMinimalCreatePaymentRequest($correctCreditCardNumber = true)
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
     * @return string
     * @throws Exception
     */
    public function testCreatePaymentWithIdempotenceKeySuccess()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $callContext = new CallContext();
        $dateTimeWitMicroseconds = DateTime::createFromFormat('U.u', microtime(true));
        $callContext->setIdempotenceKey(__FUNCTION__ . '::' . $dateTimeWitMicroseconds->format('Ymd-His-u'));
        $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());

        /** @var CreatePaymentResponse $createPaymentResponse1 */
        $createPaymentResponse1 = $client->merchant($merchantId)->payments()->createPayment(
            $this->getMinimalCreatePaymentRequest(),
            $callContext
        );
        $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());
        /** @var CreatePaymentResponse $createPaymentResponse2 */
        $createPaymentResponse2 = $client->merchant($merchantId)->payments()->createPayment(
            $this->getMinimalCreatePaymentRequest(),
            $callContext
        );
        $idempotenceRequestTimestamp = $callContext->getIdempotenceRequestTimestamp();
        $this->assertNotEmpty($idempotenceRequestTimestamp);
        $this->assertEquals($createPaymentResponse1->getPayment()->getId(), $createPaymentResponse2->getPayment()->getId());
        /** @var CreatePaymentResponse $createPaymentResponse3 */
        $createPaymentResponse3 = $client->merchant($merchantId)->payments()->createPayment(
            $this->getMinimalCreatePaymentRequest(),
            $callContext
        );
        $this->assertEquals($createPaymentResponse1->getPayment()->getId(), $createPaymentResponse3->getPayment()->getId());
        $this->assertEquals($idempotenceRequestTimestamp, $callContext->getIdempotenceRequestTimestamp());
        return $createPaymentResponse1->getPayment()->getId();
    }

    /**
     * @throws Exception
     */
    public function testCreatePaymentWithIdempotenceKeyFailure()
    {
        $this->markTestSkipped('Payment may or may not succeed');

        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $callContext = new CallContext();
        $dateTimeWitMicroseconds = DateTime::createFromFormat('U.u', microtime(true));
        $callContext->setIdempotenceKey(__FUNCTION__ . '::' . $dateTimeWitMicroseconds->format('Ymd-His-u'));
        $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());

        try {
            $client->merchant($merchantId)->payments()->createPayment(
                $this->getMinimalCreatePaymentRequest(false),
                $callContext
            );
            $this->fail('excepted exception');
        } catch (ValidationException $e) {
            $this->assertEmpty($callContext->getIdempotenceRequestTimestamp());
        }
        try {
            $client->merchant($merchantId)->payments()->createPayment(
                $this->getMinimalCreatePaymentRequest(false),
                $callContext
            );
            $this->fail('excepted exception');
        } catch (ValidationException $e) {
            $idempotenceRequestTimestamp = $callContext->getIdempotenceRequestTimestamp();
            $this->assertNotEmpty($idempotenceRequestTimestamp);
        }
        try {
            $client->merchant($merchantId)->payments()->createPayment(
                $this->getMinimalCreatePaymentRequest(false),
                $callContext
            );
            $this->fail('excepted exception');
        } catch (ValidationException $e) {
            $this->assertEquals($idempotenceRequestTimestamp, $callContext->getIdempotenceRequestTimestamp());
        }
    }
}
