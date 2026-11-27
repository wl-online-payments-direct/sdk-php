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
     * @param CustomerBankAccount|null $value
     * @return $this
     */
    public function withCustomerBankAccount(?CustomerBankAccount $value): static
    {
        $this->customerBankAccount = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->customerBankAccount !== null) {
            $object->customerBankAccount = $this->customerBankAccount->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
