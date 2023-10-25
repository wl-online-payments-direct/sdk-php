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
class RedirectPaymentProduct5408SpecificInput extends DataObject
{
    // Properties
    /**
     * @var CustomerBankAccount
     */
    private $customerBankAccount;

    /**
     * @var bool
     */
    private $instantPaymentOnly;

    // Methods
    /**
     * @return CustomerBankAccount
     */
    public function getCustomerBankAccount()
    {
        return $this->customerBankAccount;
    }
    /**
     * @var CustomerBankAccount
     */
    public function setCustomerBankAccount($value)
    {
        $this->customerBankAccount = $value;
    }

    /**
     * @return bool
     */
    public function getInstantPaymentOnly()
    {
        return $this->instantPaymentOnly;
    }
    /**
     * @var bool
     */
    public function setInstantPaymentOnly($value)
    {
        $this->instantPaymentOnly = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->customerBankAccount !== null) {
            $object->customerBankAccount = $this->customerBankAccount->toObject();
        }
        if ($this->instantPaymentOnly !== null) {
            $object->instantPaymentOnly = $this->instantPaymentOnly;
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
        if (property_exists($object, 'customerBankAccount')) {
            if (!is_object($object->customerBankAccount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerBankAccount, true) . '\' is not an object');
            }
            $value = new CustomerBankAccount();
            $this->customerBankAccount = $value->fromObject($object->customerBankAccount);
        }
        if (property_exists($object, 'instantPaymentOnly')) {
            $this->instantPaymentOnly = $object->instantPaymentOnly;
        }
        return $this;
    }
}
