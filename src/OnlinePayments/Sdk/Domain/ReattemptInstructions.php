<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ReattemptInstructions extends DataObject
{
    /**
     * @var ReattemptInstructionsConditions
     */
    public $conditions = null;

    /**
     * @var int
     */
    public $frozenPeriod = null;

    /**
     * @var string
     */
    public $indicator = null;

    /**
     * @return ReattemptInstructionsConditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param ReattemptInstructionsConditions
     */
    public function setConditions($value)
    {
        $this->conditions = $value;
    }

    /**
     * @return int
     */
    public function getFrozenPeriod()
    {
        return $this->frozenPeriod;
    }

    /**
     * @param int
     */
    public function setFrozenPeriod($value)
    {
        $this->frozenPeriod = $value;
    }

    /**
     * @return string
     */
    public function getIndicator()
    {
        return $this->indicator;
    }

    /**
     * @param string
     */
    public function setIndicator($value)
    {
        $this->indicator = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->conditions)) {
            $object->conditions = $this->conditions->toObject();
        }
        if (!is_null($this->frozenPeriod)) {
            $object->frozenPeriod = $this->frozenPeriod;
        }
        if (!is_null($this->indicator)) {
            $object->indicator = $this->indicator;
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
        if (property_exists($object, 'conditions')) {
            if (!is_object($object->conditions)) {
                throw new UnexpectedValueException('value \'' . print_r($object->conditions, true) . '\' is not an object');
            }
            $value = new ReattemptInstructionsConditions();
            $this->conditions = $value->fromObject($object->conditions);
        }
        if (property_exists($object, 'frozenPeriod')) {
            $this->frozenPeriod = $object->frozenPeriod;
        }
        if (property_exists($object, 'indicator')) {
            $this->indicator = $object->indicator;
        }
        return $this;
    }
}
