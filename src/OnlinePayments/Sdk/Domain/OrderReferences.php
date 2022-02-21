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
class OrderReferences extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $descriptor;

    /**
     * @var string
     */
    private $merchantParameters;

    /**
     * @var string
     */
    private $merchantReference;

    // Methods
    /**
     * @return string
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }
    /**
     * @var string
     */
    public function setDescriptor($value)
    {
        $this->descriptor = $value;
    }

    /**
     * @return string
     */
    public function getMerchantParameters()
    {
        return $this->merchantParameters;
    }
    /**
     * @var string
     */
    public function setMerchantParameters($value)
    {
        $this->merchantParameters = $value;
    }

    /**
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }
    /**
     * @var string
     */
    public function setMerchantReference($value)
    {
        $this->merchantReference = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->descriptor !== null) {
            $object->descriptor = $this->descriptor;
        }
        if ($this->merchantParameters !== null) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if ($this->merchantReference !== null) {
            $object->merchantReference = $this->merchantReference;
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
        if (property_exists($object, 'descriptor')) {
            $this->descriptor = $object->descriptor;
        }
        if (property_exists($object, 'merchantParameters')) {
            $this->merchantParameters = $object->merchantParameters;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        return $this;
    }
}
