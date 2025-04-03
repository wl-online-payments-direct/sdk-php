<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Shipping extends DataObject
{
    /**
     * @var AddressPersonal
     */
    public $address = null;

    /**
     * @var string
     */
    public $addressIndicator = null;

    /**
     * @var string
     */
    public $emailAddress = null;

    /**
     * @var string
     */
    public $firstUsageDate = null;

    /**
     * @var bool
     */
    public $isFirstUsage = null;

    /**
     * @var ShippingMethod
     */
    public $method = null;

    /**
     * @var int
     */
    public $shippingCost = null;

    /**
     * @var int
     */
    public $shippingCostTax = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @return AddressPersonal
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressPersonal
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param bool
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
     * @param ShippingMethod
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
     * @param int
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
     * @param int
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
     * @param string
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
        if (!is_null($this->address)) {
            $object->address = $this->address->toObject();
        }
        if (!is_null($this->addressIndicator)) {
            $object->addressIndicator = $this->addressIndicator;
        }
        if (!is_null($this->emailAddress)) {
            $object->emailAddress = $this->emailAddress;
        }
        if (!is_null($this->firstUsageDate)) {
            $object->firstUsageDate = $this->firstUsageDate;
        }
        if (!is_null($this->isFirstUsage)) {
            $object->isFirstUsage = $this->isFirstUsage;
        }
        if (!is_null($this->method)) {
            $object->method = $this->method->toObject();
        }
        if (!is_null($this->shippingCost)) {
            $object->shippingCost = $this->shippingCost;
        }
        if (!is_null($this->shippingCostTax)) {
            $object->shippingCostTax = $this->shippingCostTax;
        }
        if (!is_null($this->type)) {
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
