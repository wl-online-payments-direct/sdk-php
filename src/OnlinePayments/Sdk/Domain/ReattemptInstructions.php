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
     * @var ReattemptInstructionsConditions|null
     */
    public ?ReattemptInstructionsConditions $conditions = null;

    /**
     * @var int|null
     */
    public ?int $frozenPeriod = null;

    /**
     * @var string|null
     */
    public ?string $indicator = null;

    /**
     * @return ReattemptInstructionsConditions|null
     */
    public function getConditions(): ?ReattemptInstructionsConditions
    {
        return $this->conditions;
    }

    /**
     * @param ReattemptInstructionsConditions|null $value
     */
    public function setConditions(?ReattemptInstructionsConditions $value): void
    {
        $this->conditions = $value;
    }

    /**
     * @return int|null
     */
    public function getFrozenPeriod(): ?int
    {
        return $this->frozenPeriod;
    }

    /**
     * @param int|null $value
     */
    public function setFrozenPeriod(?int $value): void
    {
        $this->frozenPeriod = $value;
    }

    /**
     * @return string|null
     */
    public function getIndicator(): ?string
    {
        return $this->indicator;
    }

    /**
     * @param string|null $value
     */
    public function setIndicator(?string $value): void
    {
        $this->indicator = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): ReattemptInstructions
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
