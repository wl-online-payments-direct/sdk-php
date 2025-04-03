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
     * @var CustomerAccount
     */
    public $account = null;

    /**
     * @var string
     */
    public $accountType = null;

    /**
     * @var Address
     */
    public $billingAddress = null;

    /**
     * @var CompanyInformation
     */
    public $companyInformation = null;

    /**
     * @var ContactDetails
     */
    public $contactDetails = null;

    /**
     * @var CustomerDevice
     */
    public $device = null;

    /**
     * @var string
     */
    public $fiscalNumber = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $merchantCustomerId = null;

    /**
     * @var PersonalInformation
     */
    public $personalInformation = null;

    /**
     * @return CustomerAccount
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param CustomerAccount
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
     * @param string
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
     * @param Address
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
     * @param CompanyInformation
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
     * @param ContactDetails
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
     * @param CustomerDevice
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param PersonalInformation
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
