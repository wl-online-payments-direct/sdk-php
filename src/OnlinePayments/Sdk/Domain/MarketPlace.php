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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->retailerCountry)) {
            $object->retailerCountry = $this->retailerCountry;
        }
        if (!is_null($this->retailerName)) {
            $object->retailerName = $this->retailerName;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MarketPlace
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
