<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Customer extends DataObject
{
    // Properties
    /**
     * @var CustomerAccount
     */
    private $account;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var Address
     */
    private $billingAddress;

    /**
     * @var CompanyInformation
     */
    private $companyInformation;

    /**
     * @var ContactDetails
     */
    private $contactDetails;

    /**
     * @var CustomerDevice
     */
    private $device;

    /**
     * @var string
     */
    private $fiscalNumber;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $merchantCustomerId;

    /**
     * @var PersonalInformation
     */
    private $personalInformation;

    // Methods
    /**
     * @return CustomerAccount
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * @var CustomerAccount
     */
    public function setAccount($value)
    {
        $this->account = $value;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }
    /**
     * @var string
     */
    public function setAccountType($value)
    {
        $this->accountType = $value;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
    /**
     * @var Address
     */
    public function setBillingAddress($value)
    {
        $this->billingAddress = $value;
    }

    /**
     * @return CompanyInformation
     */
    public function getCompanyInformation()
    {
        return $this->companyInformation;
    }
    /**
     * @var CompanyInformation
     */
    public function setCompanyInformation($value)
    {
        $this->companyInformation = $value;
    }

    /**
     * @return ContactDetails
     */
    public function getContactDetails()
    {
        return $this->contactDetails;
    }
    /**
     * @var ContactDetails
     */
    public function setContactDetails($value)
    {
        $this->contactDetails = $value;
    }

    /**
     * @return CustomerDevice
     */
    public function getDevice()
    {
        return $this->device;
    }
    /**
     * @var CustomerDevice
     */
    public function setDevice($value)
    {
        $this->device = $value;
    }

    /**
     * @return string
     */
    public function getFiscalNumber()
    {
        return $this->fiscalNumber;
    }
    /**
     * @var string
     */
    public function setFiscalNumber($value)
    {
        $this->fiscalNumber = $value;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * @var string
     */
    public function setLocale($value)
    {
        $this->locale = $value;
    }

    /**
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->merchantCustomerId;
    }
    /**
     * @var string
     */
    public function setMerchantCustomerId($value)
    {
        $this->merchantCustomerId = $value;
    }

    /**
     * @return PersonalInformation
     */
    public function getPersonalInformation()
    {
        return $this->personalInformation;
    }
    /**
     * @var PersonalInformation
     */
    public function setPersonalInformation($value)
    {
        $this->personalInformation = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->account !== null) {
            $object->account = $this->account->toObject();
        }
        if ($this->accountType !== null) {
            $object->accountType = $this->accountType;
        }
        if ($this->billingAddress !== null) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if ($this->companyInformation !== null) {
            $object->companyInformation = $this->companyInformation->toObject();
        }
        if ($this->contactDetails !== null) {
            $object->contactDetails = $this->contactDetails->toObject();
        }
        if ($this->device !== null) {
            $object->device = $this->device->toObject();
        }
        if ($this->fiscalNumber !== null) {
            $object->fiscalNumber = $this->fiscalNumber;
        }
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->merchantCustomerId !== null) {
            $object->merchantCustomerId = $this->merchantCustomerId;
        }
        if ($this->personalInformation !== null) {
            $object->personalInformation = $this->personalInformation->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
