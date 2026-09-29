<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShippingMethod extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $details = null;

    /**
     * @var string|null
    */
    public ?string $name = null;

    /**
     * @var int|null
    */
    public ?int $speed = null;

    /**
     * @var string|null
    */
    public ?string $type = null;

    /**
     * @return string|null
    */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * @param string|null $value
    */
    public function setDetails(?string $value): void
    {
        $this->details = $value;
    }

    /**
     * @param string|null $value
     * @return ShippingMethod
    */
    public function withDetails(?string $value): ShippingMethod
    {
        $this->details = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $value
    */
    public function setName(?string $value): void
    {
        $this->name = $value;
    }

    /**
     * @param string|null $value
     * @return ShippingMethod
    */
    public function withName(?string $value): ShippingMethod
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    /**
     * @param int|null $value
    */
    public function setSpeed(?int $value): void
    {
        $this->speed = $value;
    }

    /**
     * @param int|null $value
     * @return ShippingMethod
    */
    public function withSpeed(?int $value): ShippingMethod
    {
        $this->speed = $value;
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
     * @return ShippingMethod
    */
    public function withType(?string $value): ShippingMethod
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
        if (!is_null($this->details)) {
            $object->details = $this->details;
        }
        if (!is_null($this->name)) {
            $object->name = $this->name;
        }
        if (!is_null($this->speed)) {
            $object->speed = $this->speed;
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
    public function fromObject(object $object): ShippingMethod
    {
        parent::fromObject($object);
        if (property_exists($object, 'details')) {
            $this->details = $object->details;
        }
        if (property_exists($object, 'name')) {
            $this->name = $object->name;
        }
        if (property_exists($object, 'speed')) {
            $this->speed = $object->speed;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
