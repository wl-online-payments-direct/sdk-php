<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class NetworkTokenData extends DataObject
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
     * @var int|null
     */
    public ?int $eci = null;

    /**
     * @var string|null
     */
    public ?string $networkToken = null;

    /**
     * @var string|null
     */
    public ?string $schemeTokenRequestorId = null;

    /**
     * @var string|null
     */
    public ?string $tokenExpiryDate = null;

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
    public function getNetworkToken(): ?string
    {
        return $this->networkToken;
    }

    /**
     * @param string|null $value
     */
    public function setNetworkToken(?string $value): void
    {
        $this->networkToken = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withNetworkToken(?string $value): static
    {
        $this->networkToken = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeTokenRequestorId(): ?string
    {
        return $this->schemeTokenRequestorId;
    }

    /**
     * @param string|null $value
     */
    public function setSchemeTokenRequestorId(?string $value): void
    {
        $this->schemeTokenRequestorId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSchemeTokenRequestorId(?string $value): static
    {
        $this->schemeTokenRequestorId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTokenExpiryDate(): ?string
    {
        return $this->tokenExpiryDate;
    }

    /**
     * @param string|null $value
     */
    public function setTokenExpiryDate(?string $value): void
    {
        $this->tokenExpiryDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTokenExpiryDate(?string $value): static
    {
        $this->tokenExpiryDate = $value;
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
        if ($this->eci !== null) {
            $object->eci = $this->eci;
        }
        if ($this->networkToken !== null) {
            $object->networkToken = $this->networkToken;
        }
        if ($this->schemeTokenRequestorId !== null) {
            $object->schemeTokenRequestorId = $this->schemeTokenRequestorId;
        }
        if ($this->tokenExpiryDate !== null) {
            $object->tokenExpiryDate = $this->tokenExpiryDate;
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
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'networkToken')) {
            $this->networkToken = $object->networkToken;
        }
        if (property_exists($object, 'schemeTokenRequestorId')) {
            $this->schemeTokenRequestorId = $object->schemeTokenRequestorId;
        }
        if (property_exists($object, 'tokenExpiryDate')) {
            $this->tokenExpiryDate = $object->tokenExpiryDate;
        }
        return $this;
    }
}
