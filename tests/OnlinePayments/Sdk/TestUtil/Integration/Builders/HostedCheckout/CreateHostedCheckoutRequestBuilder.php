<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedCheckout;

use OnlinePayments\Sdk\Domain\Address;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CardPaymentMethodSpecificInputForHostedCheckout;
use OnlinePayments\Sdk\Domain\ContactDetails;
use OnlinePayments\Sdk\Domain\CreateHostedCheckoutRequest;
use OnlinePayments\Sdk\Domain\Customer;
use OnlinePayments\Sdk\Domain\HostedCheckoutSpecificInput;
use OnlinePayments\Sdk\Domain\MobilePaymentMethodHostedCheckoutSpecificInput;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\PersonalInformation;
use OnlinePayments\Sdk\Domain\PersonalName;
use OnlinePayments\Sdk\Domain\RedirectPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\SepaDirectDebitPaymentMethodSpecificInputBase;

class CreateHostedCheckoutRequestBuilder
{
    private int $amount = 1000;
    private string $currency = 'EUR';

    private string $merchantReference;
    private string $merchantCustomerId = 'CUST-000001';
    private string $locale = 'en_US';
    private string $returnUrl = 'https://example.com/return';

    private bool $showResultPage = true;
    private int $sessionTimeout = 600;
    private int $allowedNumberOfPaymentAttempts = 10;

    private bool $isRecurring = false;
    private bool $isNewUnscheduledCardOnFileSeries = false;

    private ?string $variant = null;
    private ?string $tokens = null;

    private string $countryCode = 'US';
    private ?string $firstName = 'Test';
    private ?string $surname = 'User';
    private ?string $title = null;
    private ?string $emailAddress = null;
    private ?string $phoneNumber = null;
    private ?string $city = null;
    private ?string $street = null;
    private ?string $houseNumber = null;
    private ?string $additionalInfo = null;
    private ?string $state = null;
    private ?string $zip = null;

    private $paymentProductFilters = null;
    private $splitPaymentProductFilters = null;
    private $feedbacks = null;
    private $fraudFields = null;

    private bool $cardClickToPay = false;
    private bool $cardGroupCards = false;

    private int $redirectPaymentProductId = 3;
    private int $sepaPaymentProductId = 771;
    private ?int $mobilePaymentProductId = null;

    private bool $useRedirectPayment = false;
    private bool $useSepaPayment = false;
    private bool $useMobilePayment = false;

    public static function create(): self
    {
        $builder = new self();

        $builder->merchantReference = $builder->generateMerchantReference();

        return $builder;
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

    public function withLocale(string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function withReturnUrl(string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    public function withShowResultPage(bool $showResultPage): self
    {
        $this->showResultPage = $showResultPage;
        return $this;
    }

    public function withSessionTimeout(int $sessionTimeout): self
    {
        $this->sessionTimeout = $sessionTimeout;
        return $this;
    }

    public function withAllowedNumberOfPaymentAttempts(int $attempts): self
    {
        $this->allowedNumberOfPaymentAttempts = $attempts;
        return $this;
    }

    public function withIsRecurring(bool $isRecurring): self
    {
        $this->isRecurring = $isRecurring;
        return $this;
    }

    public function withIsNewUnscheduledCardOnFileSeries(bool $value): self
    {
        $this->isNewUnscheduledCardOnFileSeries = $value;
        return $this;
    }

    public function withVariant(string $variant): self
    {
        $this->variant = $variant;
        return $this;
    }

    public function withTokens(string $tokens): self
    {
        $this->tokens = $tokens;
        return $this;
    }

    public function withCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function withFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function withSurname(string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    public function withTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function withEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function withPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function withCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function withStreet(string $street): self
    {
        $this->street = $street;
        return $this;
    }

    public function withHouseNumber(string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function withAdditionalInfo(string $additionalInfo): self
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    public function withState(string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function withZip(string $zip): self
    {
        $this->zip = $zip;
        return $this;
    }

    public function withPaymentProductFilters($paymentProductFilters): self
    {
        $this->paymentProductFilters = $paymentProductFilters;
        return $this;
    }

    public function withSplitPaymentProductFilters($splitPaymentProductFilters): self
    {
        $this->splitPaymentProductFilters = $splitPaymentProductFilters;
        return $this;
    }

    public function withFeedbacks($feedbacks): self
    {
        $this->feedbacks = $feedbacks;
        return $this;
    }

    public function withFraudFields($fraudFields): self
    {
        $this->fraudFields = $fraudFields;
        return $this;
    }

    public function withCardClickToPay(bool $value): self
    {
        $this->cardClickToPay = $value;
        return $this;
    }

    public function withCardGroupCards(bool $value): self
    {
        $this->cardGroupCards = $value;
        return $this;
    }

    public function build(): CreateHostedCheckoutRequest
    {
        $request = new CreateHostedCheckoutRequest();
        $request->setHostedCheckoutSpecificInput($this->buildHostedCheckoutSpecificInput());
        $request->setOrder($this->buildOrder());

        if ($this->useRedirectPayment) {
            $request->setRedirectPaymentMethodSpecificInput($this->buildRedirectPaymentInput());
        } elseif ($this->useSepaPayment) {
            $request->setSepaDirectDebitPaymentMethodSpecificInput($this->buildSepaPaymentInput());
        } elseif ($this->useMobilePayment) {
            $request->setMobilePaymentMethodSpecificInput($this->buildMobilePaymentInput());
        }

        if ($this->feedbacks !== null) {
            $request->setFeedbacks($this->feedbacks);
        }

        if ($this->fraudFields !== null) {
            $request->setFraudFields($this->fraudFields);
            $request['fraudFields'] = $this->fraudFields;
        }

        return $request;
    }

    private function buildHostedCheckoutSpecificInput(): HostedCheckoutSpecificInput
    {
        $hostedCheckoutSpecificInput = new HostedCheckoutSpecificInput();
        $hostedCheckoutSpecificInput->setLocale($this->locale);
        $hostedCheckoutSpecificInput->setReturnUrl($this->returnUrl);
        $hostedCheckoutSpecificInput->setShowResultPage($this->showResultPage);
        $hostedCheckoutSpecificInput->setSessionTimeout($this->sessionTimeout);
        $hostedCheckoutSpecificInput->setAllowedNumberOfPaymentAttempts($this->allowedNumberOfPaymentAttempts);
        $hostedCheckoutSpecificInput->setIsRecurring($this->isRecurring);
        $hostedCheckoutSpecificInput->setIsNewUnscheduledCardOnFileSeries($this->isNewUnscheduledCardOnFileSeries);

        if ($this->variant !== null) {
            $hostedCheckoutSpecificInput->setVariant($this->variant);
        }

        if ($this->tokens !== null) {
            $hostedCheckoutSpecificInput->setTokens($this->tokens);
        }

        if (
            !$this->useRedirectPayment &&
            !$this->useSepaPayment &&
            !$this->useMobilePayment
        ) {
            $hostedCheckoutSpecificInput->setCardPaymentMethodSpecificInput($this->buildCardPaymentInput());
        }

        if ($this->paymentProductFilters !== null) {
            $hostedCheckoutSpecificInput->setPaymentProductFilters($this->paymentProductFilters);
        }

        if ($this->splitPaymentProductFilters !== null) {
            $hostedCheckoutSpecificInput->setSplitPaymentProductFilters($this->splitPaymentProductFilters);
        }

        return $hostedCheckoutSpecificInput;
    }

    private function buildCardPaymentInput(): CardPaymentMethodSpecificInputForHostedCheckout
    {
        $cardPaymentMethodSpecificInputForHostedCheckout = new CardPaymentMethodSpecificInputForHostedCheckout();

        $cardPaymentMethodSpecificInputForHostedCheckout->setClickToPay($this->cardClickToPay);
        $cardPaymentMethodSpecificInputForHostedCheckout->setGroupCards($this->cardGroupCards);

        return $cardPaymentMethodSpecificInputForHostedCheckout;
    }

    private function buildRedirectPaymentInput(): RedirectPaymentMethodSpecificInput
    {
        $redirectPaymentMethodSpecificInput = new RedirectPaymentMethodSpecificInput();

        $redirectPaymentMethodSpecificInput->setPaymentProductId($this->redirectPaymentProductId);

        return $redirectPaymentMethodSpecificInput;
    }

    private function buildSepaPaymentInput(): SepaDirectDebitPaymentMethodSpecificInputBase
    {
        $sepaDirectDebitPaymentMethodSpecificInputBase = new SepaDirectDebitPaymentMethodSpecificInputBase();

        $sepaDirectDebitPaymentMethodSpecificInputBase->setPaymentProductId($this->sepaPaymentProductId);

        return $sepaDirectDebitPaymentMethodSpecificInputBase;
    }

    private function buildMobilePaymentInput(): MobilePaymentMethodHostedCheckoutSpecificInput
    {
        $mobilePaymentMethodHostedCheckoutSpecificInput = new MobilePaymentMethodHostedCheckoutSpecificInput();

        $mobilePaymentMethodHostedCheckoutSpecificInput->setPaymentProductId($this->mobilePaymentProductId);

        return $mobilePaymentMethodHostedCheckoutSpecificInput;
    }

    private function buildOrder(): Order
    {
        $order = new Order();

        $order->setAmountOfMoney($this->buildAmountOfMoney());
        $order->setCustomer($this->buildCustomer());
        $order->setReferences($this->buildOrderReferences());

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
        $orderReferences = new OrderReferences();

        $orderReferences->setMerchantReference($this->merchantReference);

        return $orderReferences;
    }

    private function buildCustomer(): Customer
    {
        $customer = new Customer();

        $customer->setMerchantCustomerId($this->merchantCustomerId);
        $customer->setBillingAddress($this->buildBillingAddress());

        if ($this->firstName !== null || $this->surname !== null) {
            $customer->setPersonalInformation($this->buildPersonalInformation());
        }

        if ($this->emailAddress !== null || $this->phoneNumber !== null) {
            $customer->setContactDetails($this->buildContactDetails());
        }

        return $customer;
    }

    private function buildBillingAddress(): Address
    {
        $address = new Address();

        $address->setCountryCode($this->countryCode);

        if ($this->city !== null) {
            $address->setCity($this->city);
        }

        if ($this->street !== null) {
            $address->setStreet($this->street);
        }

        if ($this->houseNumber !== null) {
            $address->setHouseNumber($this->houseNumber);
        }

        if ($this->additionalInfo !== null) {
            $address->setAdditionalInfo($this->additionalInfo);
        }

        if ($this->state !== null) {
            $address->setState($this->state);
        }

        if ($this->zip !== null) {
            $address->setZip($this->zip);
        }

        return $address;
    }

    private function buildPersonalInformation(): PersonalInformation
    {
        $personalInformation = new PersonalInformation();

        $personalInformation->setName($this->buildPersonalName());

        return $personalInformation;
    }

    private function buildPersonalName(): PersonalName
    {
        $personalName = new PersonalName();

        $personalName->setFirstName($this->firstName);
        $personalName->setSurname($this->surname);

        if ($this->title !== null) {
            $personalName->setTitle($this->title);
        }

        return $personalName;
    }

    private function buildContactDetails(): ContactDetails
    {
        $contactDetails = new ContactDetails();

        if ($this->emailAddress !== null) {
            $contactDetails->setEmailAddress($this->emailAddress);
        }

        if ($this->phoneNumber !== null) {
            $contactDetails->setPhoneNumber($this->phoneNumber);
        }

        return $contactDetails;
    }

    private function generateMerchantReference(): string
    {
        return 'Ord-' . uniqid('', true);
    }
}
