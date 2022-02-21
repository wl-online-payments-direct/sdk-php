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
class AmountOfMoney extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currencyCode;

    // Methods
    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @var int
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * @var string
     */
    public function setCurrencyCode($value)
    {
        $this->currencyCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->amount !== null) {
            $object->amount = $this->amount;
        }
        if ($this->currencyCode !== null) {
            $object->currencyCode = $this->currencyCode;
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
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'currencyCode')) {
            $this->currencyCode = $object->currencyCode;
        }
        return $this;
    }
}
