<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MarketPlace extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $retailerCountry = null;

    /**
     * @var string|null
     */
    public ?string $retailerName = null;

    /**
     * @return string|null
     */
    public function getRetailerCountry(): ?string
    {
        return $this->retailerCountry;
    }

    /**
     * @param string|null $value
     */
    public function setRetailerCountry(?string $value): void
    {
        $this->retailerCountry = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRetailerCountry(?string $value): static
    {
        $this->retailerCountry = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRetailerName(): ?string
    {
        return $this->retailerName;
    }

    /**
     * @param string|null $value
     */
    public function setRetailerName(?string $value): void
    {
        $this->retailerName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRetailerName(?string $value): static
    {
        $this->retailerName = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->retailerCountry !== null) {
            $object->retailerCountry = $this->retailerCountry;
        }
        if ($this->retailerName !== null) {
            $object->retailerName = $this->retailerName;
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
        if (property_exists($object, 'retailerCountry')) {
            $this->retailerCountry = $object->retailerCountry;
        }
        if (property_exists($object, 'retailerName')) {
            $this->retailerName = $object->retailerName;
        }
        return $this;
    }
}
