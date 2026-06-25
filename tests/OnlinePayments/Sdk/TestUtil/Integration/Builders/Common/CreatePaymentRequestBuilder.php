<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Common;

use OnlinePayments\Sdk\Communication\UuidGenerator;
use OnlinePayments\Sdk\Domain\Address;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\AutoCapture;
use OnlinePayments\Sdk\Domain\BrowserData;
use OnlinePayments\Sdk\Domain\Card;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CompanyInformation;
use OnlinePayments\Sdk\Domain\ContactDetails;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\CustomerAccount;
use OnlinePayments\Sdk\Domain\CustomerAccountAuthentication;
use OnlinePayments\Sdk\Domain\CustomerDevice;
use OnlinePayments\Sdk\Domain\CustomerPaymentActivity;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\PaymentAccountOnFile;
use OnlinePayments\Sdk\Domain\PersonalInformation;
use OnlinePayments\Sdk\Domain\PersonalName;
use OnlinePayments\Sdk\Domain\RedirectPaymentMethodSpecificInput;

class CreatePaymentRequestBuilder
{
    public const PAYMENT_METHOD_CARD = 'CARD';
    public const PAYMENT_METHOD_PAYPAL_REDIRECT = 'PAYPAL_REDIRECT';

    private string $cardNumber = '4012000033330026';
    private string $cvv = '123';
    private string $expiryDate = '0530';
    private string $cardholderName = 'Wile E. Coyote';

    private int $amount = 1000;
    private string $currency = 'EUR';

    private string $merchantReference;
    private string $merchantCustomerId = 'CUST-000001';

    private string $paymentMethodType = self::PAYMENT_METHOD_CARD;

    private ?string $token = null;

    private bool $autoCapture = false;

    public static function create(): self
    {
        $instance = new self();
        $instance->merchantReference = $instance->generateMerchantReference();

        return $instance;
    }

    public function withCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function withCvv(string $cvv): self
    {
        $this->cvv = $cvv;
        return $this;
    }

    public function withExpiryDate(string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    public function withCardholderName(string $cardholderName): self
    {
        $this->cardholderName = $cardholderName;
        return $this;
    }

    public function withAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function withCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function withMerchantReference(string $merchantReference): self
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }

    public function withMerchantCustomerId(string $merchantCustomerId): self
    {
        $this->merchantCustomerId = $merchantCustomerId;
        return $this;
    }

    public function withToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function withCardPaymentMethod(): self
    {
        $this->paymentMethodType = self::PAYMENT_METHOD_CARD;
        return $this;
    }

    public function withPayPalRedirectPaymentMethod(): self
    {
        $this->paymentMethodType = self::PAYMENT_METHOD_PAYPAL_REDIRECT;
        return $this;
    }

    public function withAutoCapture(bool $autoCapture): self
    {
        $this->autoCapture = $autoCapture;
        return $this;
    }

    public function build(): CreatePaymentRequest
    {
        $request = new CreatePaymentRequest();

        if ($this->paymentMethodType === self::PAYMENT_METHOD_CARD) {
            $request->setCardPaymentMethodSpecificInput($this->buildCardPaymentInput());
            $request->setOrder($this->buildCardOrder());
        } else {
            $request->setRedirectPaymentMethodSpecificInput($this->buildRedirectPaymentInput());
            $request->setOrder($this->buildPayPalOrder());
        }

        return $request;
    }

    private function buildCardPaymentInput(): CardPaymentMethodSpecificInput
    {
        $cardInput = new CardPaymentMethodSpecificInput();

        if ($this->token !== null) {
            $cardInput->setToken($this->token);
        }
        else {
            $cardInput->setCard($this->buildCard());
        }

        $cardInput->setAuthorizationMode('FINAL_AUTHORIZATION');
        $cardInput->setTransactionChannel('ECOMMERCE');
        $cardInput->setReturnUrl('https://example.com/return');
        $cardInput->setPaymentProductId(1);

        if ($this->autoCapture) {
            $autoCapture = new AutoCapture();
            $autoCapture->setDelayInMinutes(10);
            $cardInput->setAutoCapture($autoCapture);
        }

        return $cardInput;
    }

    private function buildRedirectPaymentInput(): RedirectPaymentMethodSpecificInput
    {
        $redirectInput = new RedirectPaymentMethodSpecificInput();
        $redirectInput->setPaymentProductId(840);

        return $redirectInput;
    }

    private function buildCard(): Card
    {
        $card = new Card();
        $card->setCardholderName($this->cardholderName);
        $card->setCardNumber($this->cardNumber);
        $card->setExpiryDate($this->expiryDate);
        $card->setCvv($this->cvv);

        return $card;
    }

    private function buildCardOrder(): Order
    {
        $order = new Order();
        $order->setAmountOfMoney($this->buildAmountOfMoney());
        $order->setCustomer($this->buildCustomer());
        $order->setReferences($this->buildOrderReferences());

        return $order;
    }

    private function buildPayPalOrder(): Order
    {
        $references = $this->buildOrderReferences();
        $references->setDescriptor('Applefruitcompany');
        $references->setMerchantParameters('SessionID=126548354&ShopperID=73541312');

        $order = new Order();
        $order->setAmountOfMoney($this->buildAmountOfMoney());
        $order->setReferences($references);

        return $order;
    }

    private function buildAmountOfMoney(): AmountOfMoney
    {
        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currency);

        return $amountOfMoney;
    }

    private function buildOrderReferences(): OrderReferences
    {
        $references = new OrderReferences();
        $references->setMerchantReference($this->merchantReference);

        return $references;
    }

    private function buildCustomer(): Customer
    {
        $customer = new Customer();
        $customer->setCompanyInformation($this->buildCompanyInformation());
        $customer->setMerchantCustomerId($this->merchantCustomerId);
        $customer->setAccount($this->buildCustomerAccount());
        $customer->setAccountType('existing');
        $customer->setBillingAddress($this->buildBillingAddress());
        $customer->setContactDetails($this->buildContactDetails());
        $customer->setDevice($this->buildCustomerDevice());
        $customer->setPersonalInformation($this->buildPersonalInformation());

        return $customer;
    }

    private function buildCompanyInformation(): CompanyInformation
    {
        $companyInformation = new CompanyInformation();
        $companyInformation->setName('CUST-000001');

        return $companyInformation;
    }

    private function buildCustomerAccount(): CustomerAccount
    {
        $account = new CustomerAccount();
        $account->setAuthentication($this->buildAuthentication());
        $account->setChangeDate('20200101');
        $account->setChangedDuringCheckout(true);
        $account->setCreateDate('20100101');
        $account->setHadSuspiciousActivity(false);
        $account->setPasswordChangeDate('20200101');
        $account->setPasswordChangedDuringCheckout(false);
        $account->setPaymentAccountOnFile($this->buildPaymentAccountOnFile());
        $account->setPaymentActivity($this->buildPaymentActivity());

        return $account;
    }

    private function buildAuthentication(): CustomerAccountAuthentication
    {
        $authentication = new CustomerAccountAuthentication();
        $authentication->setMethod('guest');
        $authentication->setUtcTimestamp('202309261631');

        return $authentication;
    }

    private function buildPaymentAccountOnFile(): PaymentAccountOnFile
    {
        $paymentAccountOnFile = new PaymentAccountOnFile();
        $paymentAccountOnFile->setCreateDate('20100101');
        $paymentAccountOnFile->setNumberOfCardOnFileCreationAttemptsLast24Hours(1);

        return $paymentAccountOnFile;
    }

    private function buildPaymentActivity(): CustomerPaymentActivity
    {
        $paymentActivity = new CustomerPaymentActivity();
        $paymentActivity->setNumberOfPaymentAttemptsLast24Hours(1);
        $paymentActivity->setNumberOfPaymentAttemptsLastYear(0);
        $paymentActivity->setNumberOfPurchasesLast6Months(0);

        return $paymentActivity;
    }

    private function buildBillingAddress(): Address
    {
        $address = new Address();
        $address->setCountryCode('BE');
        $address->setCity('Brussels');
        $address->setHouseNumber('3');
        $address->setState('Flemish Brabant');
        $address->setStreet('Da Vincilaan');
        $address->setZip('1930');
        $address->setAdditionalInfo('floor 9');

        return $address;
    }

    private function buildContactDetails(): ContactDetails
    {
        $contactDetails = new ContactDetails();
        $contactDetails->setEmailAddress('wile.e.coyote@acmelabs.com');
        $contactDetails->setPhoneNumber('+321234567890');

        return $contactDetails;
    }

    private function buildCustomerDevice(): CustomerDevice
    {
        $device = new CustomerDevice();
        $device->setAcceptHeader('text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8');
        $device->setBrowserData($this->buildBrowserData());
        $device->setIpAddress('123.123.123.123');
        $device->setLocale('en_GB');
        $device->setUserAgent('Mozilla/5.0(WindowsNT10.0;Win64;x64)AppleWebKit/537.36(KHTML,likeGecko)Chrome/75.0.3770.142Safari/537.36');
        $device->setTimezoneOffsetUtcMinutes('-180');

        return $device;
    }

    private function buildBrowserData(): BrowserData
    {
        $browserData = new BrowserData();
        $browserData->setColorDepth(99);
        $browserData->setJavaEnabled(true);
        $browserData->setJavaScriptEnabled(true);
        $browserData->setScreenHeight('768');
        $browserData->setScreenWidth('1024');

        return $browserData;
    }

    private function buildPersonalInformation(): PersonalInformation
    {
        $personalInformation = new PersonalInformation();
        $personalInformation->setName($this->buildPersonalName());
        $personalInformation->setGender('male');
        $personalInformation->setDateOfBirth('19500101');

        return $personalInformation;
    }

    private function buildPersonalName(): PersonalName
    {
        $name = new PersonalName();
        $name->setTitle('M.');
        $name->setFirstName('Wile');
        $name->setSurname('Coyote');

        return $name;
    }

    private function generateMerchantReference(): string
    {
        return 'Ref-' . UuidGenerator::generatedUuid();
    }
}
