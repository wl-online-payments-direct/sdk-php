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
