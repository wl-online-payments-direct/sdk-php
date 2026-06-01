<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenInfo extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $expiryDate = null;

    /**
     * @var bool|null
     */
    public ?bool $isTemporary = null;

    /**
     * @var string|null
     */
    public ?string $maskedPan = null;

    /**
     * @var string|null
     */
    public ?string $tokenId = null;

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
     * @return bool|null
     */
    public function getIsTemporary(): ?bool
    {
        return $this->isTemporary;
    }

    /**
     * @param bool|null $value
     */
    public function setIsTemporary(?bool $value): void
    {
        $this->isTemporary = $value;
    }

    /**
     * @return string|null
     */
    public function getMaskedPan(): ?string
    {
        return $this->maskedPan;
    }

    /**
     * @param string|null $value
     */
    public function setMaskedPan(?string $value): void
    {
        $this->maskedPan = $value;
    }

    /**
     * @return string|null
     */
    public function getTokenId(): ?string
    {
        return $this->tokenId;
    }

    /**
     * @param string|null $value
     */
    public function setTokenId(?string $value): void
    {
        $this->tokenId = $value;
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
        if (!is_null($this->isTemporary)) {
            $object->isTemporary = $this->isTemporary;
        }
        if (!is_null($this->maskedPan)) {
            $object->maskedPan = $this->maskedPan;
        }
        if (!is_null($this->tokenId)) {
            $object->tokenId = $this->tokenId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): TokenInfo
    {
        parent::fromObject($object);
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        if (property_exists($object, 'isTemporary')) {
            $this->isTemporary = $object->isTemporary;
        }
        if (property_exists($object, 'maskedPan')) {
            $this->maskedPan = $object->maskedPan;
        }
        if (property_exists($object, 'tokenId')) {
            $this->tokenId = $object->tokenId;
        }
        return $this;
    }
}
