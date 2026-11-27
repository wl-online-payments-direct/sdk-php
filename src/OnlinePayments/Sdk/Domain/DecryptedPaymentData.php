<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DecryptedPaymentData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardholderName = null;

    /**
     * @var string|null
     */
    public ?string $cryptogram = null;

    /**
     * @var string|null
     */
    public ?string $dpan = null;

    /**
     * @var int|null
     */
    public ?int $eci = null;

    /**
     * @var string|null
     */
    public ?string $expiryDate = null;

    /**
     * @return string|null
     */
    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    /**
     * @param string|null $value
     */
    public function setCardholderName(?string $value): void
    {
        $this->cardholderName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCardholderName(?string $value): static
    {
        $this->cardholderName = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCryptogram(): ?string
    {
        return $this->cryptogram;
    }

    /**
     * @param string|null $value
     */
    public function setCryptogram(?string $value): void
    {
        $this->cryptogram = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCryptogram(?string $value): static
    {
        $this->cryptogram = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDpan(): ?string
    {
        return $this->dpan;
    }

    /**
     * @param string|null $value
     */
    public function setDpan(?string $value): void
    {
        $this->dpan = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDpan(?string $value): static
    {
        $this->dpan = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEci(): ?int
    {
        return $this->eci;
    }

    /**
     * @param int|null $value
     */
    public function setEci(?int $value): void
    {
        $this->eci = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withEci(?int $value): static
    {
        $this->eci = $value;
        return $this;
    }

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
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->cardholderName !== null) {
            $object->cardholderName = $this->cardholderName;
        }
        if ($this->cryptogram !== null) {
            $object->cryptogram = $this->cryptogram;
        }
        if ($this->dpan !== null) {
            $object->dpan = $this->dpan;
        }
        if ($this->eci !== null) {
            $object->eci = $this->eci;
        }
        if ($this->expiryDate !== null) {
            $object->expiryDate = $this->expiryDate;
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
        if (property_exists($object, 'cardholderName')) {
            $this->cardholderName = $object->cardholderName;
        }
        if (property_exists($object, 'cryptogram')) {
            $this->cryptogram = $object->cryptogram;
        }
        if (property_exists($object, 'dpan')) {
            $this->dpan = $object->dpan;
        }
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
