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
class SurchargeRate extends DataObject
{
    // Properties
    /**
     * @var float
     */
    private $adValoremRate;

    /**
     * @var int
     */
    private $specificRate;

    /**
     * @var string
     */
    private $surchargeProductTypeId;

    /**
     * @var string
     */
    private $surchargeProductTypeVersion;

    // Methods
    /**
     * @return float
     */
    public function getAdValoremRate()
    {
        return $this->adValoremRate;
    }
    /**
     * @var float
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
     * @var int
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
     * @var string
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
     * @var string
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
        if ($this->adValoremRate !== null) {
            $object->adValoremRate = $this->adValoremRate;
        }
        if ($this->specificRate !== null) {
            $object->specificRate = $this->specificRate;
        }
        if ($this->surchargeProductTypeId !== null) {
            $object->surchargeProductTypeId = $this->surchargeProductTypeId;
        }
        if ($this->surchargeProductTypeVersion !== null) {
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
