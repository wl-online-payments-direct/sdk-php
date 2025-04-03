<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AddressPersonal extends DataObject
{
    /**
     * @var string
     */
    public $additionalInfo = null;

    /**
     * @var string
     */
    public $city = null;

    /**
     * @var string
     */
    public $companyName = null;

    /**
     * @var string
     */
    public $countryCode = null;

    /**
     * @var string
     */
    public $houseNumber = null;

    /**
     * @var PersonalName
     */
    public $name = null;

    /**
     * @var string
     */
    public $state = null;

    /**
     * @var string
     */
    public $street = null;

    /**
     * @var string
     */
    public $zip = null;

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param string
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
     * @param string
     */
    public function setCity($value)
    {
        $this->city = $value;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string
     */
    public function setCompanyName($value)
    {
        $this->companyName = $value;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string
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
     * @param string
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
     * @param PersonalName
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
     * @param string
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
     * @param string
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
     * @param string
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
        if (!is_null($this->additionalInfo)) {
            $object->additionalInfo = $this->additionalInfo;
        }
        if (!is_null($this->city)) {
            $object->city = $this->city;
        }
        if (!is_null($this->companyName)) {
            $object->companyName = $this->companyName;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->houseNumber)) {
            $object->houseNumber = $this->houseNumber;
        }
        if (!is_null($this->name)) {
            $object->name = $this->name->toObject();
        }
        if (!is_null($this->state)) {
            $object->state = $this->state;
        }
        if (!is_null($this->street)) {
            $object->street = $this->street;
        }
        if (!is_null($this->zip)) {
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
        if (property_exists($object, 'companyName')) {
            $this->companyName = $object->companyName;
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
