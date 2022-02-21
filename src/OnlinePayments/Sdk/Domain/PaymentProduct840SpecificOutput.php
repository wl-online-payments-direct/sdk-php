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
class PaymentProduct840SpecificOutput extends DataObject
{
    // Properties
    /**
     * @var Address
     */
    private $billingAddress;

    /**
     * @var PaymentProduct840CustomerAccount
     */
    private $customerAccount;

    /**
     * @var Address
     */
    private $customerAddress;

    /**
     * @var ProtectionEligibility
     */
    private $protectionEligibility;

    // Methods
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
     * @return PaymentProduct840CustomerAccount
     */
    public function getCustomerAccount()
    {
        return $this->customerAccount;
    }
    /**
     * @var PaymentProduct840CustomerAccount
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
     * @var Address
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
     * @var ProtectionEligibility
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
        if ($this->billingAddress !== null) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if ($this->customerAccount !== null) {
            $object->customerAccount = $this->customerAccount->toObject();
        }
        if ($this->customerAddress !== null) {
            $object->customerAddress = $this->customerAddress->toObject();
        }
        if ($this->protectionEligibility !== null) {
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
