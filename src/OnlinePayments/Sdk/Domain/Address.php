<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Address extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $additionalInfo = null;

    /**
     * @var string|null
    */
    public ?string $city = null;

    /**
     * @var string|null
    */
    public ?string $countryCode = null;

    /**
     * @var string|null
    */
    public ?string $houseNumber = null;

    /**
     * @var string|null
    */
    public ?string $state = null;

    /**
     * @var string|null
    */
    public ?string $street = null;

    /**
     * @var string|null
    */
    public ?string $zip = null;

    /**
     * @return string|null
    */
    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    /**
     * @param string|null $value
    */
    public function setAdditionalInfo(?string $value): void
    {
        $this->additionalInfo = $value;
    }

    /**
     * @param string|null $value
     * @return Address
    */
    public function withAdditionalInfo(?string $value): Address
    {
        $this->additionalInfo = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $value
    */
    public function setCity(?string $value): void
    {
        $this->city = $value;
    }

    /**
     * @param string|null $value
     * @return Address
    */
    public function withCity(?string $value): Address
    {
        $this->city = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $value
    */
    public function setCountryCode(?string $value): void
    {
        $this->countryCode = $value;
    }

    /**
     * @param string|null $value
     * @return Address
    */
    public function withCountryCode(?string $value): Address
    {
        $this->countryCode = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param string|null $value
    */
    public function setHouseNumber(?string $value): void
    {
        $this->houseNumber = $value;
    }

    /**
     * @param string|null $value
     * @return Address
    */
    public function withHouseNumber(?string $value): Address
    {
        $this->houseNumber = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $value
    */
    public function setState(?string $value): void
    {
        $this->state = $value;
    }

    /**
     * @param string|null $value
     * @return Address
    */
    public function withState(?string $value): Address
    {
        $this->state = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $value
    */
    public function setStreet(?string $value): void
    {
        $this->street = $value;
    }

    /**
     * @param string|null $value
     * @return Address
    */
    public function withStreet(?string $value): Address
    {
        $this->street = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * @param string|null $value
    */
    public function setZip(?string $value): void
    {
        $this->zip = $value;
    }

    /**
     * @param string|null $value
     * @return Address
    */
    public function withZip(?string $value): Address
    {
        $this->zip = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->additionalInfo)) {
            $object->additionalInfo = $this->additionalInfo;
        }
        if (!is_null($this->city)) {
            $object->city = $this->city;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->houseNumber)) {
            $object->houseNumber = $this->houseNumber;
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Address
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
