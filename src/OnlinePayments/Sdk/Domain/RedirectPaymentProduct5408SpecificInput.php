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
     * @var CustomerBankAccount|null
     */
    public ?CustomerBankAccount $customerBankAccount = null;

    /**
     * @var bool|null
     */
    public ?bool $instantPaymentOnly = null;

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
     * @return bool|null
     */
    public function getInstantPaymentOnly(): ?bool
    {
        return $this->instantPaymentOnly;
    }

    /**
     * @param bool|null $value
     */
    public function setInstantPaymentOnly(?bool $value): void
    {
        $this->instantPaymentOnly = $value;
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
    public function fromObject(object $object): RedirectPaymentProduct5408SpecificInput
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
