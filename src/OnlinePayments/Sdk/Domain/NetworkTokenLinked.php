<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class NetworkTokenLinked extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $expiryDate = null;

    /**
     * @var string|null
     */
    public ?string $maskedToken = null;

    /**
     * @var string|null
     */
    public ?string $tokenState = null;

    /**
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * @param string|null $value
     */
    public function setExpiryDate(?string $value): void
    {
        $this->expiryDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withExpiryDate(?string $value): static
    {
        $this->expiryDate = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaskedToken(): ?string
    {
        return $this->maskedToken;
    }

    /**
     * @param string|null $value
     */
    public function setMaskedToken(?string $value): void
    {
        $this->maskedToken = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMaskedToken(?string $value): static
    {
        $this->maskedToken = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTokenState(): ?string
    {
        return $this->tokenState;
    }

    /**
     * @param string|null $value
     */
    public function setTokenState(?string $value): void
    {
        $this->tokenState = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTokenState(?string $value): static
    {
        $this->tokenState = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->expiryDate !== null) {
            $object->expiryDate = $this->expiryDate;
        }
        if ($this->maskedToken !== null) {
            $object->maskedToken = $this->maskedToken;
        }
        if ($this->tokenState !== null) {
            $object->tokenState = $this->tokenState;
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
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        if (property_exists($object, 'maskedToken')) {
            $this->maskedToken = $object->maskedToken;
        }
        if (property_exists($object, 'tokenState')) {
            $this->tokenState = $object->tokenState;
        }
        return $this;
    }
}
