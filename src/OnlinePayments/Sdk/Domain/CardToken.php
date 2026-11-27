<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardToken extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardholderName = null;

    /**
     * @var string|null
     */
    public ?string $expiryDate = null;

    /**
     * @var string|null
     */
    public ?string $logoUrl = null;

    /**
     * @var string|null
     */
    public ?string $maskedPan = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var string|null
     */
    public ?string $productName = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

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
    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    /**
     * @param string|null $value
     */
    public function setLogoUrl(?string $value): void
    {
        $this->logoUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withLogoUrl(?string $value): static
    {
        $this->logoUrl = $value;
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
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withPaymentProductId(?int $value): static
    {
        $this->paymentProductId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string|null $value
     */
    public function setProductName(?string $value): void
    {
        $this->productName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withProductName(?string $value): static
    {
        $this->productName = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $value
     */
    public function setToken(?string $value): void
    {
        $this->token = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withToken(?string $value): static
    {
        $this->token = $value;
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
        if ($this->expiryDate !== null) {
            $object->expiryDate = $this->expiryDate;
        }
        if ($this->logoUrl !== null) {
            $object->logoUrl = $this->logoUrl;
        }
        if ($this->maskedPan !== null) {
            $object->maskedPan = $this->maskedPan;
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->productName !== null) {
            $object->productName = $this->productName;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
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
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        if (property_exists($object, 'logoUrl')) {
            $this->logoUrl = $object->logoUrl;
        }
        if (property_exists($object, 'maskedPan')) {
            $this->maskedPan = $object->maskedPan;
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'productName')) {
            $this->productName = $object->productName;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
