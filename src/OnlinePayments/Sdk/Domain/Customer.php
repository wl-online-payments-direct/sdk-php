<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Customer extends DataObject
{
    /**
     * @var CustomerAccount|null
     */
    public ?CustomerAccount $account = null;

    /**
     * @var string|null
     */
    public ?string $accountType = null;

    /**
     * @var Address|null
     */
    public ?Address $billingAddress = null;

    /**
     * @var CompanyInformation|null
     */
    public ?CompanyInformation $companyInformation = null;

    /**
     * @var ContactDetails|null
     */
    public ?ContactDetails $contactDetails = null;

    /**
     * @var CustomerDevice|null
     */
    public ?CustomerDevice $device = null;

    /**
     * @var string|null
     */
    public ?string $fiscalNumber = null;

    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var string|null
     */
    public ?string $merchantCustomerId = null;

    /**
     * @var PersonalInformation|null
     */
    public ?PersonalInformation $personalInformation = null;

    /**
     * @return CustomerAccount|null
     */
    public function getAccount(): ?CustomerAccount
    {
        return $this->account;
    }

    /**
     * @param CustomerAccount|null $value
     */
    public function setAccount(?CustomerAccount $value): void
    {
        $this->account = $value;
    }

    /**
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param string|null $value
     */
    public function setAccountType(?string $value): void
    {
        $this->accountType = $value;
    }

    /**
     * @return Address|null
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address|null $value
     */
    public function setBillingAddress(?Address $value): void
    {
        $this->billingAddress = $value;
    }

    /**
     * @return CompanyInformation|null
     */
    public function getCompanyInformation(): ?CompanyInformation
    {
        return $this->companyInformation;
    }

    /**
     * @param CompanyInformation|null $value
     */
    public function setCompanyInformation(?CompanyInformation $value): void
    {
        $this->companyInformation = $value;
    }

    /**
     * @return ContactDetails|null
     */
    public function getContactDetails(): ?ContactDetails
    {
        return $this->contactDetails;
    }

    /**
     * @param ContactDetails|null $value
     */
    public function setContactDetails(?ContactDetails $value): void
    {
        $this->contactDetails = $value;
    }

    /**
     * @return CustomerDevice|null
     */
    public function getDevice(): ?CustomerDevice
    {
        return $this->device;
    }

    /**
     * @param CustomerDevice|null $value
     */
    public function setDevice(?CustomerDevice $value): void
    {
        $this->device = $value;
    }

    /**
     * @return string|null
     */
    public function getFiscalNumber(): ?string
    {
        return $this->fiscalNumber;
    }

    /**
     * @param string|null $value
     */
    public function setFiscalNumber(?string $value): void
    {
        $this->fiscalNumber = $value;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $value
     */
    public function setLocale(?string $value): void
    {
        $this->locale = $value;
    }

    /**
     * @return string|null
     */
    public function getMerchantCustomerId(): ?string
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantCustomerId(?string $value): void
    {
        $this->merchantCustomerId = $value;
    }

    /**
     * @return PersonalInformation|null
     */
    public function getPersonalInformation(): ?PersonalInformation
    {
        return $this->personalInformation;
    }

    /**
     * @param PersonalInformation|null $value
     */
    public function setPersonalInformation(?PersonalInformation $value): void
    {
        $this->personalInformation = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->account)) {
            $object->account = $this->account->toObject();
        }
        if (!is_null($this->accountType)) {
            $object->accountType = $this->accountType;
        }
        if (!is_null($this->billingAddress)) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if (!is_null($this->companyInformation)) {
            $object->companyInformation = $this->companyInformation->toObject();
        }
        if (!is_null($this->contactDetails)) {
            $object->contactDetails = $this->contactDetails->toObject();
        }
        if (!is_null($this->device)) {
            $object->device = $this->device->toObject();
        }
        if (!is_null($this->fiscalNumber)) {
            $object->fiscalNumber = $this->fiscalNumber;
        }
        if (!is_null($this->locale)) {
            $object->locale = $this->locale;
        }
        if (!is_null($this->merchantCustomerId)) {
            $object->merchantCustomerId = $this->merchantCustomerId;
        }
        if (!is_null($this->personalInformation)) {
            $object->personalInformation = $this->personalInformation->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Customer
    {
        parent::fromObject($object);
        if (property_exists($object, 'account')) {
            if (!is_object($object->account)) {
                throw new UnexpectedValueException('value \'' . print_r($object->account, true) . '\' is not an object');
            }
            $value = new CustomerAccount();
            $this->account = $value->fromObject($object->account);
        }
        if (property_exists($object, 'accountType')) {
            $this->accountType = $object->accountType;
        }
        if (property_exists($object, 'billingAddress')) {
            if (!is_object($object->billingAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->billingAddress, true) . '\' is not an object');
            }
            $value = new Address();
            $this->billingAddress = $value->fromObject($object->billingAddress);
        }
        if (property_exists($object, 'companyInformation')) {
            if (!is_object($object->companyInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->companyInformation, true) . '\' is not an object');
            }
            $value = new CompanyInformation();
            $this->companyInformation = $value->fromObject($object->companyInformation);
        }
        if (property_exists($object, 'contactDetails')) {
            if (!is_object($object->contactDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->contactDetails, true) . '\' is not an object');
            }
            $value = new ContactDetails();
            $this->contactDetails = $value->fromObject($object->contactDetails);
        }
        if (property_exists($object, 'device')) {
            if (!is_object($object->device)) {
                throw new UnexpectedValueException('value \'' . print_r($object->device, true) . '\' is not an object');
            }
            $value = new CustomerDevice();
            $this->device = $value->fromObject($object->device);
        }
        if (property_exists($object, 'fiscalNumber')) {
            $this->fiscalNumber = $object->fiscalNumber;
        }
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'merchantCustomerId')) {
            $this->merchantCustomerId = $object->merchantCustomerId;
        }
        if (property_exists($object, 'personalInformation')) {
            if (!is_object($object->personalInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->personalInformation, true) . '\' is not an object');
            }
            $value = new PersonalInformation();
            $this->personalInformation = $value->fromObject($object->personalInformation);
        }
        return $this;
    }
}
