<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LengthValidator extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $maxLength = null;

    /**
     * @var int|null
     */
    public ?int $minLength = null;

    /**
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @param int|null $value
     */
    public function setMaxLength(?int $value): void
    {
        $this->maxLength = $value;
    }

    /**
     * @return int|null
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @param int|null $value
     */
    public function setMinLength(?int $value): void
    {
        $this->minLength = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->maxLength)) {
            $object->maxLength = $this->maxLength;
        }
        if (!is_null($this->minLength)) {
            $object->minLength = $this->minLength;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): LengthValidator
    {
        parent::fromObject($object);
        if (property_exists($object, 'maxLength')) {
            $this->maxLength = $object->maxLength;
        }
        if (property_exists($object, 'minLength')) {
            $this->minLength = $object->minLength;
        }
        return $this;
    }
}
