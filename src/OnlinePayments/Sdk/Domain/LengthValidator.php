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
class LengthValidator extends DataObject
{
    // Properties
    /**
     * @var int
     */
    private $maxLength;

    /**
     * @var int
     */
    private $minLength;

    // Methods
    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }
    /**
     * @var int
     */
    public function setMaxLength($value)
    {
        $this->maxLength = $value;
    }

    /**
     * @return int
     */
    public function getMinLength()
    {
        return $this->minLength;
    }
    /**
     * @var int
     */
    public function setMinLength($value)
    {
        $this->minLength = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->maxLength !== null) {
            $object->maxLength = $this->maxLength;
        }
        if ($this->minLength !== null) {
            $object->minLength = $this->minLength;
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
        if (property_exists($object, 'maxLength')) {
            $this->maxLength = $object->maxLength;
        }
        if (property_exists($object, 'minLength')) {
            $this->minLength = $object->minLength;
        }
        return $this;
    }
}
