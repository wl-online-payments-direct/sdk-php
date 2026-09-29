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
     * @return PaymentLinkEvent
    */
    public function withDateTime(?string $value): PaymentLinkEvent
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
     * @return PaymentLinkEvent
    */
    public function withDetails(?string $value): PaymentLinkEvent
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
     * @return PaymentLinkEvent
    */
    public function withType(?string $value): PaymentLinkEvent
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
        if (!is_null($this->dateTime)) {
            $object->dateTime = $this->dateTime;
        }
        if (!is_null($this->details)) {
            $object->details = $this->details;
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
    public function fromObject(object $object): PaymentLinkEvent
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
