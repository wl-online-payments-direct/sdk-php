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
class PaymentProduct840CustomerAccount extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $accountId;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $customerAccountStatus;

    /**
     * @var string
     */
    private $customerAddressStatus;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $payerId;

    /**
     * @var string
     */
    private $surname;

    // Methods
    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->accountId !== null) {
            $object->accountId = $this->accountId;
        }
        if ($this->companyName !== null) {
            $object->companyName = $this->companyName;
        }
        if ($this->countryCode !== null) {
            $object->countryCode = $this->countryCode;
        }
        if ($this->customerAccountStatus !== null) {
            $object->customerAccountStatus = $this->customerAccountStatus;
        }
        if ($this->customerAddressStatus !== null) {
            $object->customerAddressStatus = $this->customerAddressStatus;
        }
        if ($this->firstName !== null) {
            $object->firstName = $this->firstName;
        }
        if ($this->payerId !== null) {
            $object->payerId = $this->payerId;
        }
        if ($this->surname !== null) {
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
