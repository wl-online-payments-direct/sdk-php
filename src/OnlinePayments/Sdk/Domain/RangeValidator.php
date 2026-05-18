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
     * @var int|null
     */
    public ?int $maxValue = null;

    /**
     * @var int|null
     */
    public ?int $minValue = null;

    /**
     * @return int|null
     */
    public function getMaxValue(): ?int
    {
        return $this->maxValue;
    }

    /**
     * @param int|null $value
     */
    public function setMaxValue(?int $value): void
    {
        $this->maxValue = $value;
    }

    /**
     * @return int|null
     */
    public function getMinValue(): ?int
    {
        return $this->minValue;
    }

    /**
     * @param int|null $value
     */
    public function setMinValue(?int $value): void
    {
        $this->minValue = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): RangeValidator
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
