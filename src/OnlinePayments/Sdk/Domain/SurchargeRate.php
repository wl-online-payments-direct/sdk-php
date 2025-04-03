<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeRate extends DataObject
{
    /**
     * @var float
     */
    public $adValoremRate = null;

    /**
     * @var int
     */
    public $specificRate = null;

    /**
     * @var string
     */
    public $surchargeProductTypeId = null;

    /**
     * @var string
     */
    public $surchargeProductTypeVersion = null;

    /**
     * @return float
     */
    public function getAdValoremRate()
    {
        return $this->adValoremRate;
    }

    /**
     * @param float
     */
    public function setAdValoremRate($value)
    {
        $this->adValoremRate = $value;
    }

    /**
     * @return int
     */
    public function getSpecificRate()
    {
        return $this->specificRate;
    }

    /**
     * @param int
     */
    public function setSpecificRate($value)
    {
        $this->specificRate = $value;
    }

    /**
     * @return string
     */
    public function getSurchargeProductTypeId()
    {
        return $this->surchargeProductTypeId;
    }

    /**
     * @param string
     */
    public function setSurchargeProductTypeId($value)
    {
        $this->surchargeProductTypeId = $value;
    }

    /**
     * @return string
     */
    public function getSurchargeProductTypeVersion()
    {
        return $this->surchargeProductTypeVersion;
    }

    /**
     * @param string
     */
    public function setSurchargeProductTypeVersion($value)
    {
        $this->surchargeProductTypeVersion = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->adValoremRate)) {
            $object->adValoremRate = $this->adValoremRate;
        }
        if (!is_null($this->specificRate)) {
            $object->specificRate = $this->specificRate;
        }
        if (!is_null($this->surchargeProductTypeId)) {
            $object->surchargeProductTypeId = $this->surchargeProductTypeId;
        }
        if (!is_null($this->surchargeProductTypeVersion)) {
            $object->surchargeProductTypeVersion = $this->surchargeProductTypeVersion;
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
        if (property_exists($object, 'adValoremRate')) {
            $this->adValoremRate = $object->adValoremRate;
        }
        if (property_exists($object, 'specificRate')) {
            $this->specificRate = $object->specificRate;
        }
        if (property_exists($object, 'surchargeProductTypeId')) {
            $this->surchargeProductTypeId = $object->surchargeProductTypeId;
        }
        if (property_exists($object, 'surchargeProductTypeVersion')) {
            $this->surchargeProductTypeVersion = $object->surchargeProductTypeVersion;
        }
        return $this;
    }
}
