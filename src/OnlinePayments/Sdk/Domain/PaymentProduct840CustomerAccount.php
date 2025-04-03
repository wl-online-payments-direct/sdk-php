<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct840CustomerAccount extends DataObject
{
    /**
     * @var string
     */
    public $accountId = null;

    /**
     * @var string
     */
    public $companyName = null;

    /**
     * @var string
     */
    public $countryCode = null;

    /**
     * @var string
     */
    public $customerAccountStatus = null;

    /**
     * @var string
     */
    public $customerAddressStatus = null;

    /**
     * @var string
     */
    public $firstName = null;

    /**
     * @var string
     */
    public $payerId = null;

    /**
     * @var string
     */
    public $surname = null;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string
     */
    public function setAccountId($value)
    {
        $this->accountId = $value;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string
     */
    public function setCompanyName($value)
    {
        $this->companyName = $value;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @return string
     */
    public function getCustomerAccountStatus()
    {
        return $this->customerAccountStatus;
    }

    /**
     * @param string
     */
    public function setCustomerAccountStatus($value)
    {
        $this->customerAccountStatus = $value;
    }

    /**
     * @return string
     */
    public function getCustomerAddressStatus()
    {
        return $this->customerAddressStatus;
    }

    /**
     * @param string
     */
    public function setCustomerAddressStatus($value)
    {
        $this->customerAddressStatus = $value;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string
     */
    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    /**
     * @return string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * @param string
     */
    public function setPayerId($value)
    {
        $this->payerId = $value;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string
     */
    public function setSurname($value)
    {
        $this->surname = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->accountId)) {
            $object->accountId = $this->accountId;
        }
        if (!is_null($this->companyName)) {
            $object->companyName = $this->companyName;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->customerAccountStatus)) {
            $object->customerAccountStatus = $this->customerAccountStatus;
        }
        if (!is_null($this->customerAddressStatus)) {
            $object->customerAddressStatus = $this->customerAddressStatus;
        }
        if (!is_null($this->firstName)) {
            $object->firstName = $this->firstName;
        }
        if (!is_null($this->payerId)) {
            $object->payerId = $this->payerId;
        }
        if (!is_null($this->surname)) {
            $object->surname = $this->surname;
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
        if (property_exists($object, 'accountId')) {
            $this->accountId = $object->accountId;
        }
        if (property_exists($object, 'companyName')) {
            $this->companyName = $object->companyName;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'customerAccountStatus')) {
            $this->customerAccountStatus = $object->customerAccountStatus;
        }
        if (property_exists($object, 'customerAddressStatus')) {
            $this->customerAddressStatus = $object->customerAddressStatus;
        }
        if (property_exists($object, 'firstName')) {
            $this->firstName = $object->firstName;
        }
        if (property_exists($object, 'payerId')) {
            $this->payerId = $object->payerId;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        return $this;
    }
}
