<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5408SpecificInput extends DataObject
{
    /**
     * @var CustomerBankAccount
     */
    public $customerBankAccount = null;

    /**
     * @var bool
     */
    public $instantPaymentOnly = null;

    /**
     * @return CustomerBankAccount
     */
    public function getCustomerBankAccount()
    {
        return $this->customerBankAccount;
    }

    /**
     * @param CustomerBankAccount
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
     * @param bool
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
        if (!is_null($this->customerBankAccount)) {
            $object->customerBankAccount = $this->customerBankAccount->toObject();
        }
        if (!is_null($this->instantPaymentOnly)) {
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
