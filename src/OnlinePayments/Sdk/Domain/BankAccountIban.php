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
class BankAccountIban extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $iban;

    // Methods
    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }
    /**
     * @var string
     */
    public function setIban($value)
    {
        $this->iban = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->iban !== null) {
            $object->iban = $this->iban;
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
        if (property_exists($object, 'iban')) {
            $this->iban = $object->iban;
        }
        return $this;
    }
}
