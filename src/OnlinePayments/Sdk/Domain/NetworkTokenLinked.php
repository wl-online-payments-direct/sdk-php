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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->expiryDate)) {
            $object->expiryDate = $this->expiryDate;
        }
        if (!is_null($this->maskedToken)) {
            $object->maskedToken = $this->maskedToken;
        }
        if (!is_null($this->tokenState)) {
            $object->tokenState = $this->tokenState;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): NetworkTokenLinked
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
