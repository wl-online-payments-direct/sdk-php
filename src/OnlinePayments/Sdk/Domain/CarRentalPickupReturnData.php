<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CarRentalPickupReturnData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var int|null
     */
    public ?int $country = null;

    /**
     * @var string|null
     */
    public ?string $date = null;

    /**
     * @var string|null
     */
    public ?string $location = null;

    /**
     * @var string|null
     */
    public ?string $postcode = null;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $value
     */
    public function setAddress(?string $value): void
    {
        $this->address = $value;
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
     * @return int|null
     */
    public function getCountry(): ?int
    {
        return $this->country;
    }

    /**
     * @param int|null $value
     */
    public function setCountry(?int $value): void
    {
        $this->country = $value;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null $value
     */
    public function setDate(?string $value): void
    {
        $this->date = $value;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string|null $value
     */
    public function setLocation(?string $value): void
    {
        $this->location = $value;
    }

    /**
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @param string|null $value
     */
    public function setPostcode(?string $value): void
    {
        $this->postcode = $value;
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->address)) {
            $object->address = $this->address;
        }
        if (!is_null($this->city)) {
            $object->city = $this->city;
        }
        if (!is_null($this->country)) {
            $object->country = $this->country;
        }
        if (!is_null($this->date)) {
            $object->date = $this->date;
        }
        if (!is_null($this->location)) {
            $object->location = $this->location;
        }
        if (!is_null($this->postcode)) {
            $object->postcode = $this->postcode;
        }
        if (!is_null($this->state)) {
            $object->state = $this->state;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CarRentalPickupReturnData
    {
        parent::fromObject($object);
        if (property_exists($object, 'address')) {
            $this->address = $object->address;
        }
        if (property_exists($object, 'city')) {
            $this->city = $object->city;
        }
        if (property_exists($object, 'country')) {
            $this->country = $object->country;
        }
        if (property_exists($object, 'date')) {
            $this->date = $object->date;
        }
        if (property_exists($object, 'location')) {
            $this->location = $object->location;
        }
        if (property_exists($object, 'postcode')) {
            $this->postcode = $object->postcode;
        }
        if (property_exists($object, 'state')) {
            $this->state = $object->state;
        }
        return $this;
    }
}
