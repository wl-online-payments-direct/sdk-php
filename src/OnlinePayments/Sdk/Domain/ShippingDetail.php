<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShippingDetail extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $shippingCost = null;

    /**
     * @var int|null
     */
    public ?int $shippingCostTax = null;

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
     * @return $this
     */
    public function withShippingCost(?int $value): static
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
     * @return $this
     */
    public function withShippingCostTax(?int $value): static
    {
        $this->shippingCostTax = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->shippingCost !== null) {
            $object->shippingCost = $this->shippingCost;
        }
        if ($this->shippingCostTax !== null) {
            $object->shippingCostTax = $this->shippingCostTax;
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
        if (property_exists($object, 'shippingCost')) {
            $this->shippingCost = $object->shippingCost;
        }
        if (property_exists($object, 'shippingCostTax')) {
            $this->shippingCostTax = $object->shippingCostTax;
        }
        return $this;
    }
}
