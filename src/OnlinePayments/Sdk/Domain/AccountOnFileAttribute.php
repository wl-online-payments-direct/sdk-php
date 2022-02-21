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
class AccountOnFileAttribute extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $mustWriteReason;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $value;

    // Methods
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * @var string
     */
    public function setKey($value)
    {
        $this->key = $value;
    }

    /**
     * @return string
     */
    public function getMustWriteReason()
    {
        return $this->mustWriteReason;
    }
    /**
     * @var string
     */
    public function setMustWriteReason($value)
    {
        $this->mustWriteReason = $value;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var string
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @var string
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->key !== null) {
            $object->key = $this->key;
        }
        if ($this->mustWriteReason !== null) {
            $object->mustWriteReason = $this->mustWriteReason;
        }
        if ($this->status !== null) {
            $object->status = $this->status;
        }
        if ($this->value !== null) {
            $object->value = $this->value;
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
        if (property_exists($object, 'key')) {
            $this->key = $object->key;
        }
        if (property_exists($object, 'mustWriteReason')) {
            $this->mustWriteReason = $object->mustWriteReason;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'value')) {
            $this->value = $object->value;
        }
        return $this;
    }
}
