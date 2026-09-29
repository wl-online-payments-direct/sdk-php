<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Shipping extends DataObject
{
    /**
     * @var AddressPersonal|null
    */
    public ?AddressPersonal $address = null;

    /**
     * @var string|null
    */
    public ?string $addressIndicator = null;

    /**
     * @var string|null
    */
    public ?string $emailAddress = null;

    /**
     * @var string|null
    */
    public ?string $firstUsageDate = null;

    /**
     * @var bool|null
    */
    public ?bool $isFirstUsage = null;

    /**
     * @var ShippingMethod|null
    */
    public ?ShippingMethod $method = null;

    /**
     * @var int|null
    */
    public ?int $shippingCost = null;

    /**
     * @var int|null
    */
    public ?int $shippingCostTax = null;

    /**
     * @var string|null
    */
    public ?string $type = null;

    /**
     * @return AddressPersonal|null
    */
    public function getAddress(): ?AddressPersonal
    {
        return $this->address;
    }

    /**
     * @param AddressPersonal|null $value
    */
    public function setAddress(?AddressPersonal $value): void
    {
        $this->address = $value;
    }

    /**
     * @param AddressPersonal|null $value
     * @return Shipping
    */
    public function withAddress(?AddressPersonal $value): Shipping
    {
        $this->address = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getAddressIndicator(): ?string
    {
        return $this->addressIndicator;
    }

    /**
     * @param string|null $value
    */
    public function setAddressIndicator(?string $value): void
    {
        $this->addressIndicator = $value;
    }

    /**
     * @param string|null $value
     * @return Shipping
    */
    public function withAddressIndicator(?string $value): Shipping
    {
        $this->addressIndicator = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * @param string|null $value
    */
    public function setEmailAddress(?string $value): void
    {
        $this->emailAddress = $value;
    }

    /**
     * @param string|null $value
     * @return Shipping
    */
    public function withEmailAddress(?string $value): Shipping
    {
        $this->emailAddress = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getFirstUsageDate(): ?string
    {
        return $this->firstUsageDate;
    }

    /**
     * @param string|null $value
    */
    public function setFirstUsageDate(?string $value): void
    {
        $this->firstUsageDate = $value;
    }

    /**
     * @param string|null $value
     * @return Shipping
    */
    public function withFirstUsageDate(?string $value): Shipping
    {
        $this->firstUsageDate = $value;
        return $this;
    }

    /**
     * @return bool|null
    */
    public function getIsFirstUsage(): ?bool
    {
        return $this->isFirstUsage;
    }

    /**
     * @param bool|null $value
    */
    public function setIsFirstUsage(?bool $value): void
    {
        $this->isFirstUsage = $value;
    }

    /**
     * @param bool|null $value
     * @return Shipping
    */
    public function withIsFirstUsage(?bool $value): Shipping
    {
        $this->isFirstUsage = $value;
        return $this;
    }

    /**
     * @return ShippingMethod|null
    */
    public function getMethod(): ?ShippingMethod
    {
        return $this->method;
    }

    /**
     * @param ShippingMethod|null $value
    */
    public function setMethod(?ShippingMethod $value): void
    {
        $this->method = $value;
    }

    /**
     * @param ShippingMethod|null $value
     * @return Shipping
    */
    public function withMethod(?ShippingMethod $value): Shipping
    {
        $this->method = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getShippingCost(): ?int
    {
        return $this->shippingCost;
    }

    /**
     * @param int|null $value
    */
    public function setShippingCost(?int $value): void
    {
        $this->shippingCost = $value;
    }

    /**
     * @param int|null $value
     * @return Shipping
    */
    public function withShippingCost(?int $value): Shipping
    {
        $this->shippingCost = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getShippingCostTax(): ?int
    {
        return $this->shippingCostTax;
    }

    /**
     * @param int|null $value
    */
    public function setShippingCostTax(?int $value): void
    {
        $this->shippingCostTax = $value;
    }

    /**
     * @param int|null $value
     * @return Shipping
    */
    public function withShippingCostTax(?int $value): Shipping
    {
        $this->shippingCostTax = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $value
    */
    public function setType(?string $value): void
    {
        $this->type = $value;
    }

    /**
     * @param string|null $value
     * @return Shipping
    */
    public function withType(?string $value): Shipping
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->address)) {
            $object->address = $this->address->toObject();
        }
        if (!is_null($this->addressIndicator)) {
            $object->addressIndicator = $this->addressIndicator;
        }
        if (!is_null($this->emailAddress)) {
            $object->emailAddress = $this->emailAddress;
        }
        if (!is_null($this->firstUsageDate)) {
            $object->firstUsageDate = $this->firstUsageDate;
        }
        if (!is_null($this->isFirstUsage)) {
            $object->isFirstUsage = $this->isFirstUsage;
        }
        if (!is_null($this->method)) {
            $object->method = $this->method->toObject();
        }
        if (!is_null($this->shippingCost)) {
            $object->shippingCost = $this->shippingCost;
        }
        if (!is_null($this->shippingCostTax)) {
            $object->shippingCostTax = $this->shippingCostTax;
        }
        if (!is_null($this->type)) {
            $object->type = $this->type;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Shipping
    {
        parent::fromObject($object);
        if (property_exists($object, 'address')) {
            if (!is_object($object->address)) {
                throw new UnexpectedValueException('value \'' . print_r($object->address, true) . '\' is not an object');
            }
            $value = new AddressPersonal();
            $this->address = $value->fromObject($object->address);
        }
        if (property_exists($object, 'addressIndicator')) {
            $this->addressIndicator = $object->addressIndicator;
        }
        if (property_exists($object, 'emailAddress')) {
            $this->emailAddress = $object->emailAddress;
        }
        if (property_exists($object, 'firstUsageDate')) {
            $this->firstUsageDate = $object->firstUsageDate;
        }
        if (property_exists($object, 'isFirstUsage')) {
            $this->isFirstUsage = $object->isFirstUsage;
        }
        if (property_exists($object, 'method')) {
            if (!is_object($object->method)) {
                throw new UnexpectedValueException('value \'' . print_r($object->method, true) . '\' is not an object');
            }
            $value = new ShippingMethod();
            $this->method = $value->fromObject($object->method);
        }
        if (property_exists($object, 'shippingCost')) {
            $this->shippingCost = $object->shippingCost;
        }
        if (property_exists($object, 'shippingCostTax')) {
            $this->shippingCostTax = $object->shippingCostTax;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
