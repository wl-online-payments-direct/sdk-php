<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class BankAccountIban extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $iban = null;

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
    public function fromObject(object $object): BankAccountIban
    {
        parent::fromObject($object);
        if (property_exists($object, 'iban')) {
            $this->iban = $object->iban;
        }
        return $this;
    }
}
