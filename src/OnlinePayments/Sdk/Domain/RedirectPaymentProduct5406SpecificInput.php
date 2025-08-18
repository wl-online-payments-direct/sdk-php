<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5406SpecificInput extends DataObject
{
    /**
     * @var CustomerBankAccount|null
     */
    public ?CustomerBankAccount $customerBankAccount = null;

    /**
     * @return CustomerBankAccount|null
     */
    public function getCustomerBankAccount(): ?CustomerBankAccount
    {
        return $this->customerBankAccount;
    }

    /**
     * @param CustomerBankAccount|null $value
     */
    public function setCustomerBankAccount(?CustomerBankAccount $value): void
    {
        $this->customerBankAccount = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->customerBankAccount)) {
            $object->customerBankAccount = $this->customerBankAccount->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct5406SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'customerBankAccount')) {
            if (!is_object($object->customerBankAccount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customerBankAccount, true) . '\' is not an object');
            }
            $value = new CustomerBankAccount();
            $this->customerBankAccount = $value->fromObject($object->customerBankAccount);
        }
        return $this;
    }
}
