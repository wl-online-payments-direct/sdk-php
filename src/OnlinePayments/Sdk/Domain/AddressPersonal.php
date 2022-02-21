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
class AddressPersonal extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $additionalInfo;

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
     * @var PersonalName
     */
    private $name;

    /**
     * @var string
     */
    private $state;

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
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
    /**
     * @var string
     */
    public function setAdditionalInfo($value)
    {
        $this->additionalInfo = $value;
    }

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
     * @return PersonalName
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var PersonalName
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * @var string
     */
    public function setState($value)
    {
        $this->state = $value;
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
        if ($this->additionalInfo !== null) {
            $object->additionalInfo = $this->additionalInfo;
        }
        if ($this->city !== null) {
            $object->city = $this->city;
        }
        if ($this->countryCode !== null) {
            $object->countryCode = $this->countryCode;
        }
        if ($this->houseNumber !== null) {
            $object->houseNumber = $this->houseNumber;
        }
        if ($this->name !== null) {
            $object->name = $this->name->toObject();
        }
        if ($this->state !== null) {
            $object->state = $this->state;
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
        if (property_exists($object, 'additionalInfo')) {
            $this->additionalInfo = $object->additionalInfo;
        }
        if (property_exists($object, 'city')) {
            $this->city = $object->city;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'houseNumber')) {
            $this->houseNumber = $object->houseNumber;
        }
        if (property_exists($object, 'name')) {
            if (!is_object($object->name)) {
                throw new UnexpectedValueException('value \'' . print_r($object->name, true) . '\' is not an object');
            }
            $value = new PersonalName();
            $this->name = $value->fromObject($object->name);
        }
        if (property_exists($object, 'state')) {
            $this->state = $object->state;
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
