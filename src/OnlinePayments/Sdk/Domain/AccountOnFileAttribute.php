<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AccountOnFileAttribute extends DataObject
{
    /**
     * @var string
     */
    public $key = null;

    /**
     * @var string
     * @deprecated Deprecated
     */
    public $mustWriteReason = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $value = null;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string
     */
    public function setKey($value)
    {
        $this->key = $value;
    }

    /**
     * @return string
     * @deprecated Deprecated
     */
    public function getMustWriteReason()
    {
        return $this->mustWriteReason;
    }

    /**
     * @param string
     * @deprecated Deprecated
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
     * @param string
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
     * @param string
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
        if (!is_null($this->key)) {
            $object->key = $this->key;
        }
        if (!is_null($this->mustWriteReason)) {
            $object->mustWriteReason = $this->mustWriteReason;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->value)) {
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
