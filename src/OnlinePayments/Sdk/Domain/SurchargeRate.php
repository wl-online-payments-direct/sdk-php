<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeRate extends DataObject
{
    /**
     * @var float|null
    */
    public ?float $adValoremRate = null;

    /**
     * @var int|null
    */
    public ?int $specificRate = null;

    /**
     * @var string|null
    */
    public ?string $surchargeProductTypeId = null;

    /**
     * @var string|null
    */
    public ?string $surchargeProductTypeVersion = null;

    /**
     * @return float|null
    */
    public function getAdValoremRate(): ?float
    {
        return $this->adValoremRate;
    }

    /**
     * @param float|null $value
    */
    public function setAdValoremRate(?float $value): void
    {
        $this->adValoremRate = $value;
    }

    /**
     * @param float|null $value
     * @return SurchargeRate
    */
    public function withAdValoremRate(?float $value): SurchargeRate
    {
        $this->adValoremRate = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getSpecificRate(): ?int
    {
        return $this->specificRate;
    }

    /**
     * @param int|null $value
    */
    public function setSpecificRate(?int $value): void
    {
        $this->specificRate = $value;
    }

    /**
     * @param int|null $value
     * @return SurchargeRate
    */
    public function withSpecificRate(?int $value): SurchargeRate
    {
        $this->specificRate = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getSurchargeProductTypeId(): ?string
    {
        return $this->surchargeProductTypeId;
    }

    /**
     * @param string|null $value
    */
    public function setSurchargeProductTypeId(?string $value): void
    {
        $this->surchargeProductTypeId = $value;
    }

    /**
     * @param string|null $value
     * @return SurchargeRate
    */
    public function withSurchargeProductTypeId(?string $value): SurchargeRate
    {
        $this->surchargeProductTypeId = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getSurchargeProductTypeVersion(): ?string
    {
        return $this->surchargeProductTypeVersion;
    }

    /**
     * @param string|null $value
    */
    public function setSurchargeProductTypeVersion(?string $value): void
    {
        $this->surchargeProductTypeVersion = $value;
    }

    /**
     * @param string|null $value
     * @return SurchargeRate
    */
    public function withSurchargeProductTypeVersion(?string $value): SurchargeRate
    {
        $this->surchargeProductTypeVersion = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->adValoremRate)) {
            $object->adValoremRate = $this->adValoremRate;
        }
        if (!is_null($this->specificRate)) {
            $object->specificRate = $this->specificRate;
        }
        if (!is_null($this->surchargeProductTypeId)) {
            $object->surchargeProductTypeId = $this->surchargeProductTypeId;
        }
        if (!is_null($this->surchargeProductTypeVersion)) {
            $object->surchargeProductTypeVersion = $this->surchargeProductTypeVersion;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SurchargeRate
    {
        parent::fromObject($object);
        if (property_exists($object, 'adValoremRate')) {
            $this->adValoremRate = $object->adValoremRate;
        }
        if (property_exists($object, 'specificRate')) {
            $this->specificRate = $object->specificRate;
        }
        if (property_exists($object, 'surchargeProductTypeId')) {
            $this->surchargeProductTypeId = $object->surchargeProductTypeId;
        }
        if (property_exists($object, 'surchargeProductTypeVersion')) {
            $this->surchargeProductTypeVersion = $object->surchargeProductTypeVersion;
        }
        return $this;
    }
}
