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
class SurchargeSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $mode;

    /**
     * @var AmountOfMoney
     */
    private $surchargeAmount;

    // Methods
    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * @var string
     */
    public function setMode($value)
    {
        $this->mode = $value;
    }

    /**
     * @return AmountOfMoney
     */
    public function getSurchargeAmount()
    {
        return $this->surchargeAmount;
    }
    /**
     * @var AmountOfMoney
     */
    public function setSurchargeAmount($value)
    {
        $this->surchargeAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->mode !== null) {
            $object->mode = $this->mode;
        }
        if ($this->surchargeAmount !== null) {
            $object->surchargeAmount = $this->surchargeAmount->toObject();
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
        if (property_exists($object, 'mode')) {
            $this->mode = $object->mode;
        }
        if (property_exists($object, 'surchargeAmount')) {
            if (!is_object($object->surchargeAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->surchargeAmount = $value->fromObject($object->surchargeAmount);
        }
        return $this;
    }
}
