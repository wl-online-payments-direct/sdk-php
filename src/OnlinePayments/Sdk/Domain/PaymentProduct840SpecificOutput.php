<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct840SpecificOutput extends DataObject
{
    /**
     * @var Address
     */
    public $billingAddress = null;

    /**
     * @var PaymentProduct840CustomerAccount
     */
    public $customerAccount = null;

    /**
     * @var Address
     */
    public $customerAddress = null;

    /**
     * @var ProtectionEligibility
     */
    public $protectionEligibility = null;

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
     * @return PaymentProduct840CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->customerAccount;
    }

    /**
     * @param PaymentProduct840CustomerAccount
     */
    public function setCustomerAccount($value)
    {
        $this->customerAccount = $value;
    }

    /**
     * @return Address
     */
    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    /**
     * @param Address
     */
    public function setCustomerAddress($value)
    {
        $this->customerAddress = $value;
    }

    /**
     * @return ProtectionEligibility
     */
    public function getProtectionEligibility()
    {
        return $this->protectionEligibility;
    }

    /**
     * @param ProtectionEligibility
     */
    public function setProtectionEligibility($value)
    {
        $this->protectionEligibility = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->billingAddress)) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if (!is_null($this->customerAccount)) {
            $object->customerAccount = $this->customerAccount->toObject();
        }
        if (!is_null($this->customerAddress)) {
            $object->customerAddress = $this->customerAddress->toObject();
        }
        if (!is_null($this->protectionEligibility)) {
            $object->protectionEligibility = $this->protectionEligibility->toObject();
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
        if (property_exists($object, 'billingAddress')) {
            if (!is_object($object->billingAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->billingAddress, true) . '\' is not an object');
            }
            $value = new Address();
            $this->billingAddress = $value->fromObject($object->billingAddress);
        }
        if (property_exists($object, 'customerAccount')) {
            if (!is_object($object->customerAccount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerAccount, true) . '\' is not an object');
            }
            $value = new PaymentProduct840CustomerAccount();
            $this->customerAccount = $value->fromObject($object->customerAccount);
        }
        if (property_exists($object, 'customerAddress')) {
            if (!is_object($object->customerAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerAddress, true) . '\' is not an object');
            }
            $value = new Address();
            $this->customerAddress = $value->fromObject($object->customerAddress);
        }
        if (property_exists($object, 'protectionEligibility')) {
            if (!is_object($object->protectionEligibility)) {
                throw new UnexpectedValueException('value \'' . print_r($object->protectionEligibility, true) . '\' is not an object');
            }
            $value = new ProtectionEligibility();
            $this->protectionEligibility = $value->fromObject($object->protectionEligibility);
        }
        return $this;
    }
}
