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
     * @param string|null $value
     * @return $this
     */
    public function withExpiryDate(?string $value): static
    {
        $this->expiryDate = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withIsTemporary(?bool $value): static
    {
        $this->isTemporary = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withMaskedPan(?string $value): static
    {
        $this->maskedPan = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withTokenId(?string $value): static
    {
        $this->tokenId = $value;
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
        if ($this->isTemporary !== null) {
            $object->isTemporary = $this->isTemporary;
        }
        if ($this->maskedPan !== null) {
            $object->maskedPan = $this->maskedPan;
        }
        if ($this->tokenId !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
