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
    public ?string $companyName = null;

    /**
     * @var string|null
     */
    public ?string $countryCode = null;

    /**
     * @var string|null
     */
    public ?string $houseNumber = null;

    /**
     * @var PersonalName|null
     */
    public ?PersonalName $name = null;

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
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string|null $value
     */
    public function setCompanyName(?string $value): void
    {
        $this->companyName = $value;
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
     * @return PersonalName|null
     */
    public function getName(): ?PersonalName
    {
        return $this->name;
    }

    /**
     * @param PersonalName|null $value
     */
    public function setName(?PersonalName $value): void
    {
        $this->name = $value;
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
    public function fromObject(object $object): AddressPersonal
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
