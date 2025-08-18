<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerBankAccount extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $accountHolderName = null;

    /**
     * @var string|null
     */
    public ?string $bic = null;

    /**
     * @var string|null
     */
    public ?string $iban = null;

    /**
     * @return string|null
     */
    public function getAccountHolderName(): ?string
    {
        return $this->accountHolderName;
    }

    /**
     * @param string|null $value
     */
    public function setAccountHolderName(?string $value): void
    {
        $this->accountHolderName = $value;
    }

    /**
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * @param string|null $value
     */
    public function setBic(?string $value): void
    {
        $this->bic = $value;
    }

    /**
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @param string|null $value
     */
    public function setIban(?string $value): void
    {
        $this->iban = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->accountHolderName)) {
            $object->accountHolderName = $this->accountHolderName;
        }
        if (!is_null($this->bic)) {
            $object->bic = $this->bic;
        }
        if (!is_null($this->iban)) {
            $object->iban = $this->iban;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CustomerBankAccount
    {
        parent::fromObject($object);
        if (property_exists($object, 'accountHolderName')) {
            $this->accountHolderName = $object->accountHolderName;
        }
        if (property_exists($object, 'bic')) {
            $this->bic = $object->bic;
        }
        if (property_exists($object, 'iban')) {
            $this->iban = $object->iban;
        }
        return $this;
    }
}
