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
class MandateAddress extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $houseNumber;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $zip;

    // Methods
    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @var string
     */
    public function setCity($value)
    {
        $this->city = $value;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * @var string
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }
    /**
     * @var string
     */
    public function setHouseNumber($value)
    {
        $this->houseNumber = $value;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * @var string
     */
    public function setStreet($value)
    {
        $this->street = $value;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * @var string
     */
    public function setZip($value)
    {
        $this->zip = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->city !== null) {
            $object->city = $this->city;
        }
        if ($this->countryCode !== null) {
            $object->countryCode = $this->countryCode;
        }
        if ($this->houseNumber !== null) {
            $object->houseNumber = $this->houseNumber;
        }
        if ($this->street !== null) {
            $object->street = $this->street;
        }
        if ($this->zip !== null) {
            $object->zip = $this->zip;
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
        if (property_exists($object, 'city')) {
            $this->city = $object->city;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'houseNumber')) {
            $this->houseNumber = $object->houseNumber;
        }
        if (property_exists($object, 'street')) {
            $this->street = $object->street;
        }
        if (property_exists($object, 'zip')) {
            $this->zip = $object->zip;
        }
        return $this;
    }
}
