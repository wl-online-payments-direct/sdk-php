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
class Transaction extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $amount;

    /**
     * @var string
     */
    private $localDateTime;

    // Methods
    /**
     * @return AmountOfMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @var AmountOfMoney
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @return string
     */
    public function getLocalDateTime()
    {
        return $this->localDateTime;
    }
    /**
     * @var string
     */
    public function setLocalDateTime($value)
    {
        $this->localDateTime = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->amount !== null) {
            $object->amount = $this->amount->toObject();
        }
        if ($this->localDateTime !== null) {
            $object->localDateTime = $this->localDateTime;
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
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'localDateTime')) {
            $this->localDateTime = $object->localDateTime;
        }
        return $this;
    }
}
