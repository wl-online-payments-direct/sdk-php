<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Mandates;

use OnlinePayments\Sdk\Domain\BankAccountIban;
use OnlinePayments\Sdk\Domain\CreateMandateRequest;
use OnlinePayments\Sdk\Domain\MandateAddress;
use OnlinePayments\Sdk\Domain\MandateContactDetails;
use OnlinePayments\Sdk\Domain\MandateCustomer;
use OnlinePayments\Sdk\Domain\MandatePersonalInformation;
use OnlinePayments\Sdk\Domain\MandatePersonalName;

class CreateMandateRequestBuilder
{
    private string $alias = 'Test Mandate';
    private string $customerIban = 'BE45000253450589';
    private string $companyName = 'BEL Labs';
    private string $emailAddress = 'wile.e.coyote@acmelabs.com';
    private string $city = 'Brussels';
    private string $countryCode = 'BE';
    private string $houseNumber = '3';
    private string $street = 'Da Vincilaan';
    private string $zip = '1930';
    private string $firstName = 'Jane';
    private string $surname = 'Doe';
    private string $title = 'Mrs';
    private string $customerReference = 'CUST123';
    private string $recurrenceType = 'UNIQUE';
    private string $signatureType = 'UNSIGNED';
    private string $returnUrl = 'https://example-mandate-signing-url.com';
    private string $uniqueMandateReference = 'MANDATE123';

    public static function create(): self
    {
        return new self();
    }

    public function withAlias(string $alias): self
    {
        $this->alias = $alias;
        return $this;
    }

    public function withCustomerIban(string $customerIban): self
    {
        $this->customerIban = $customerIban;
        return $this;
    }

    public function withCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function withEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function withCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function withCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function withHouseNumber(string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function withStreet(string $street): self
    {
        $this->street = $street;
        return $this;
    }

    public function withZip(string $zip): self
    {
        $this->zip = $zip;
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

    public function withCustomerReference(string $customerReference): self
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    public function withRecurrenceType(string $recurrenceType): self
    {
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    public function withSignatureType(string $signatureType): self
    {
        $this->signatureType = $signatureType;
        return $this;
    }

    public function withReturnUrl(string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    public function withUniqueMandateReference(string $uniqueMandateReference): self
    {
        $this->uniqueMandateReference = $uniqueMandateReference;
        return $this;
    }

    public function build(): CreateMandateRequest
    {
        $bankAccountIban = new BankAccountIban();
        $bankAccountIban->setIban($this->customerIban);

        $contactDetails = new MandateContactDetails();
        $contactDetails->setEmailAddress($this->emailAddress);

        $address = new MandateAddress();
        $address->setStreet($this->street);
        $address->setHouseNumber($this->houseNumber);
        $address->setCity($this->city);
        $address->setZip($this->zip);
        $address->setCountryCode($this->countryCode);

        $personalName = new MandatePersonalName();
        $personalName->setFirstName($this->firstName);
        $personalName->setSurname($this->surname);

        $personalInformation = new MandatePersonalInformation();
        $personalInformation->setName($personalName);
        $personalInformation->setTitle($this->title);

        $customer = new MandateCustomer();
        $customer->setBankAccountIban($bankAccountIban);
        $customer->setCompanyName($this->companyName);
        $customer->setContactDetails($contactDetails);
        $customer->setMandateAddress($address);
        $customer->setPersonalInformation($personalInformation);

        $request = new CreateMandateRequest();
        $request->setAlias($this->alias);
        $request->setCustomer($customer);
        $request->setCustomerReference($this->customerReference);
        $request->setRecurrenceType($this->recurrenceType);
        $request->setSignatureType($this->signatureType);
        $request->setReturnUrl($this->returnUrl);
        $request->setUniqueMandateReference($this->uniqueMandateReference);

        return $request;
    }
}
