<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeSpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $mode = null;

    /**
     * @var AmountOfMoney
     */
    public $surchargeAmount = null;

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string
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
     * @param AmountOfMoney
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
        if (!is_null($this->mode)) {
            $object->mode = $this->mode;
        }
        if (!is_null($this->surchargeAmount)) {
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
