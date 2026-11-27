<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkEvent extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $dateTime = null;

    /**
     * @var string|null
     */
    public ?string $details = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @return string|null
     */
    public function getDateTime(): ?string
    {
        return $this->dateTime;
    }

    /**
     * @param string|null $value
     */
    public function setDateTime(?string $value): void
    {
        $this->dateTime = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDateTime(?string $value): static
    {
        $this->dateTime = $value;
        return $this;
    }

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
        if ($this->dateTime !== null) {
            $object->dateTime = $this->dateTime;
        }
        if ($this->details !== null) {
            $object->details = $this->details;
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
        if (property_exists($object, 'dateTime')) {
            $this->dateTime = $object->dateTime;
        }
        if (property_exists($object, 'details')) {
            $this->details = $object->details;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
