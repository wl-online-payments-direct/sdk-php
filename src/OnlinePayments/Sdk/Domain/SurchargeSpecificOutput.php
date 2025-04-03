<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeSpecificOutput extends DataObject
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
     * @var SurchargeRate
     */
    public $surchargeRate = null;

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
     * @return SurchargeRate
     */
    public function getSurchargeRate()
    {
        return $this->surchargeRate;
    }

    /**
     * @param SurchargeRate
     */
    public function setSurchargeRate($value)
    {
        $this->surchargeRate = $value;
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
        if (!is_null($this->surchargeRate)) {
            $object->surchargeRate = $this->surchargeRate->toObject();
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
        if (property_exists($object, 'surchargeRate')) {
            if (!is_object($object->surchargeRate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeRate, true) . '\' is not an object');
            }
            $value = new SurchargeRate();
            $this->surchargeRate = $value->fromObject($object->surchargeRate);
        }
        return $this;
    }
}
