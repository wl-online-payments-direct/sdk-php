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
     * @var int
     */
    public $maxLength = null;

    /**
     * @var int
     */
    public $minLength = null;

    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @param int
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
     * @param int
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
