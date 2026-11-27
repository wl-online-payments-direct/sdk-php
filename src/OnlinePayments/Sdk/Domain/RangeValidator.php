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
     * @param int|null $value
     * @return $this
     */
    public function withMaxValue(?int $value): static
    {
        $this->maxValue = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withMinValue(?int $value): static
    {
        $this->minValue = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
