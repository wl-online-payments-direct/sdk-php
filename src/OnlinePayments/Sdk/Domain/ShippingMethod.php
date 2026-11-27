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
     * @return $this
     */
    public function withDetails(?string $value): static
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
     * @return $this
     */
    public function withName(?string $value): static
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
     * @return $this
     */
    public function withSpeed(?int $value): static
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
     * @return $this
     */
    public function withType(?string $value): static
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->details !== null) {
            $object->details = $this->details;
        }
        if ($this->name !== null) {
            $object->name = $this->name;
        }
        if ($this->speed !== null) {
            $object->speed = $this->speed;
        }
        if ($this->type !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
