<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateAddress extends DataObject
{
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
    public ?string $street = null;

    /**
     * @var string|null
     */
    public ?string $zip = null;

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
     * @return $this
     */
    public function withCountryCode(?string $value): static
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
     * @return $this
     */
    public function withHouseNumber(?string $value): static
    {
        $this->houseNumber = $value;
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
     * @return $this
     */
    public function withStreet(?string $value): static
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
     * @return $this
     */
    public function withZip(?string $value): static
    {
        $this->zip = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
