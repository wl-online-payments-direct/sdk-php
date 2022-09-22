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
class Shipping extends DataObject
{
    // Properties
    /**
     * @var AddressPersonal
     */
    private $address;

    /**
     * @var string
     */
    private $addressIndicator;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $firstUsageDate;

    /**
     * @var bool
     */
    private $isFirstUsage;

    /**
     * @var ShippingMethod
     */
    private $method;

    /**
     * @var int
     */
    private $shippingCost;

    /**
     * @var int
     */
    private $shippingCostTax;

    /**
     * @var string
     */
    private $type;

    // Methods
    /**
     * @return AddressPersonal
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @var AddressPersonal
     */
    public function setAddress($value)
    {
        $this->address = $value;
    }

    /**
     * @return string
     */
    public function getAddressIndicator()
    {
        return $this->addressIndicator;
    }
    /**
     * @var string
     */
    public function setAddressIndicator($value)
    {
        $this->addressIndicator = $value;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * @var string
     */
    public function setEmailAddress($value)
    {
        $this->emailAddress = $value;
    }

    /**
     * @return string
     */
    public function getFirstUsageDate()
    {
        return $this->firstUsageDate;
    }
    /**
     * @var string
     */
    public function setFirstUsageDate($value)
    {
        $this->firstUsageDate = $value;
    }

    /**
     * @return bool
     */
    public function getIsFirstUsage()
    {
        return $this->isFirstUsage;
    }
    /**
     * @var bool
     */
    public function setIsFirstUsage($value)
    {
        $this->isFirstUsage = $value;
    }

    /**
     * @return ShippingMethod
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * @var ShippingMethod
     */
    public function setMethod($value)
    {
        $this->method = $value;
    }

    /**
     * @return int
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }
    /**
     * @var int
     */
    public function setShippingCost($value)
    {
        $this->shippingCost = $value;
    }

    /**
     * @return int
     */
    public function getShippingCostTax()
    {
        return $this->shippingCostTax;
    }
    /**
     * @var int
     */
    public function setShippingCostTax($value)
    {
        $this->shippingCostTax = $value;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var string
     */
    public function setType($value)
    {
        $this->type = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->address !== null) {
            $object->address = $this->address->toObject();
        }
        if ($this->addressIndicator !== null) {
            $object->addressIndicator = $this->addressIndicator;
        }
        if ($this->emailAddress !== null) {
            $object->emailAddress = $this->emailAddress;
        }
        if ($this->firstUsageDate !== null) {
            $object->firstUsageDate = $this->firstUsageDate;
        }
        if ($this->isFirstUsage !== null) {
            $object->isFirstUsage = $this->isFirstUsage;
        }
        if ($this->method !== null) {
            $object->method = $this->method->toObject();
        }
        if ($this->shippingCost !== null) {
            $object->shippingCost = $this->shippingCost;
        }
        if ($this->shippingCostTax !== null) {
            $object->shippingCostTax = $this->shippingCostTax;
        }
        if ($this->type !== null) {
            $object->type = $this->type;
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
        if (property_exists($object, 'address')) {
            if (!is_object($object->address)) {
                throw new UnexpectedValueException('value \'' . print_r($object->address, true) . '\' is not an object');
            }
            $value = new AddressPersonal();
            $this->address = $value->fromObject($object->address);
        }
        if (property_exists($object, 'addressIndicator')) {
            $this->addressIndicator = $object->addressIndicator;
        }
        if (property_exists($object, 'emailAddress')) {
            $this->emailAddress = $object->emailAddress;
        }
        if (property_exists($object, 'firstUsageDate')) {
            $this->firstUsageDate = $object->firstUsageDate;
        }
        if (property_exists($object, 'isFirstUsage')) {
            $this->isFirstUsage = $object->isFirstUsage;
        }
        if (property_exists($object, 'method')) {
            if (!is_object($object->method)) {
                throw new UnexpectedValueException('value \'' . print_r($object->method, true) . '\' is not an object');
            }
            $value = new ShippingMethod();
            $this->method = $value->fromObject($object->method);
        }
        if (property_exists($object, 'shippingCost')) {
            $this->shippingCost = $object->shippingCost;
        }
        if (property_exists($object, 'shippingCostTax')) {
            $this->shippingCostTax = $object->shippingCostTax;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
