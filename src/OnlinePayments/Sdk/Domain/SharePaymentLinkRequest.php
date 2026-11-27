<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SharePaymentLinkRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $channel = null;

    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var string|null
     */
    public ?string $recipient = null;

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @param string|null $value
     */
    public function setChannel(?string $value): void
    {
        $this->channel = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withChannel(?string $value): static
    {
        $this->channel = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $value
     */
    public function setLocale(?string $value): void
    {
        $this->locale = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withLocale(?string $value): static
    {
        $this->locale = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    /**
     * @param string|null $value
     */
    public function setRecipient(?string $value): void
    {
        $this->recipient = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRecipient(?string $value): static
    {
        $this->recipient = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->channel !== null) {
            $object->channel = $this->channel;
        }
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->recipient !== null) {
            $object->recipient = $this->recipient;
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
        if (property_exists($object, 'channel')) {
            $this->channel = $object->channel;
        }
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'recipient')) {
            $this->recipient = $object->recipient;
        }
        return $this;
    }
}
