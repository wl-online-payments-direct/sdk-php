<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5402SpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $brand = null;

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $value
     */
    public function setBrand(?string $value): void
    {
        $this->brand = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withBrand(?string $value): static
    {
        $this->brand = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->brand !== null) {
            $object->brand = $this->brand;
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
        if (property_exists($object, 'brand')) {
            $this->brand = $object->brand;
        }
        return $this;
    }
}
