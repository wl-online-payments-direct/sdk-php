<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RangeValidator extends DataObject
{
    /**
     * @var int
     */
    public $maxValue = null;

    /**
     * @var int
     */
    public $minValue = null;

    /**
     * @return int
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param int
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
     * @param int
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
        if (!is_null($this->maxValue)) {
            $object->maxValue = $this->maxValue;
        }
        if (!is_null($this->minValue)) {
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
