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
     * @param string|null $value
     * @return $this
     */
    public function withAddress(?string $value): static
    {
        $this->address = $value;
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
     * @return $this
     */
    public function withCity(?string $value): static
    {
        $this->city = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withCountry(?int $value): static
    {
        $this->country = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withDate(?string $value): static
    {
        $this->date = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withLocation(?string $value): static
    {
        $this->location = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPostcode(?string $value): static
    {
        $this->postcode = $value;
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
     * @return $this
     */
    public function withState(?string $value): static
    {
        $this->state = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->address !== null) {
            $object->address = $this->address;
        }
        if ($this->city !== null) {
            $object->city = $this->city;
        }
        if ($this->country !== null) {
            $object->country = $this->country;
        }
        if ($this->date !== null) {
            $object->date = $this->date;
        }
        if ($this->location !== null) {
            $object->location = $this->location;
        }
        if ($this->postcode !== null) {
            $object->postcode = $this->postcode;
        }
        if ($this->state !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
