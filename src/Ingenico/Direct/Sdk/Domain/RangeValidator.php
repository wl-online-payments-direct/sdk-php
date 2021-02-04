<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class RangeValidator extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $maxValue;

    /**
     * @var int
     */
    private $minValue;

    // Methods
    /**
     * @return int
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }
    /**
     * @var int
     */
    public function setMaxValue($value)
    {
        $this->maxValue = $value;
    }

    /**
     * @return int
     */
    public function getMinValue()
    {
        return $this->minValue;
    }
    /**
     * @var int
     */
    public function setMinValue($value)
    {
        $this->minValue = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->maxValue !== null) {
            $object->maxValue = $this->maxValue;
        }
        if ($this->minValue !== null) {
            $object->minValue = $this->minValue;
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
        if (property_exists($object, 'maxValue')) {
            $this->maxValue = $object->maxValue;
        }
        if (property_exists($object, 'minValue')) {
            $this->minValue = $object->minValue;
        }
        return $this;
    }
}
