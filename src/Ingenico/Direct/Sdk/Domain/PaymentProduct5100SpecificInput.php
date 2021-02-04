<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class PaymentProduct5100SpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $brand;

    // Methods
    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * @var string
     */
    public function setBrand($value)
    {
        $this->brand = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->brand !== null) {
            $object->brand = $this->brand;
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
        if (property_exists($object, 'brand')) {
            $this->brand = $object->brand;
        }
        return $this;
    }
}
