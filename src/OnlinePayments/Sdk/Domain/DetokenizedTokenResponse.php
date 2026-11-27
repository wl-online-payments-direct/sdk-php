<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DetokenizedTokenResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardBrand = null;

    /**
     * @var string|null
     */
    public ?string $cardExpiryDate = null;

    /**
     * @var string|null
     */
    public ?string $cardHolderName = null;

    /**
     * @var string|null
     */
    public ?string $encryptedCardNumber = null;

    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @var string|null
     */
    public ?string $schemeReferenceData = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @return string|null
     */
    public function getCardBrand(): ?string
    {
        return $this->cardBrand;
    }

    /**
     * @param string|null $value
     */
    public function setCardBrand(?string $value): void
    {
        $this->cardBrand = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCardBrand(?string $value): static
    {
        $this->cardBrand = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    /**
     * @param string|null $value
     */
    public function setCardExpiryDate(?string $value): void
    {
        $this->cardExpiryDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCardExpiryDate(?string $value): static
    {
        $this->cardExpiryDate = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardHolderName(): ?string
    {
        return $this->cardHolderName;
    }

    /**
     * @param string|null $value
     */
    public function setCardHolderName(?string $value): void
    {
        $this->cardHolderName = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCardHolderName(?string $value): static
    {
        $this->cardHolderName = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEncryptedCardNumber(): ?string
    {
        return $this->encryptedCardNumber;
    }

    /**
     * @param string|null $value
     */
    public function setEncryptedCardNumber(?string $value): void
    {
        $this->encryptedCardNumber = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withEncryptedCardNumber(?string $value): static
    {
        $this->encryptedCardNumber = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentId(?string $value): void
    {
        $this->paymentId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentId(?string $value): static
    {
        $this->paymentId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemeReferenceData(): ?string
    {
        return $this->schemeReferenceData;
    }

    /**
     * @param string|null $value
     */
    public function setSchemeReferenceData(?string $value): void
    {
        $this->schemeReferenceData = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withSchemeReferenceData(?string $value): static
    {
        $this->schemeReferenceData = $value;
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
        if ($this->cardBrand !== null) {
            $object->cardBrand = $this->cardBrand;
        }
        if ($this->cardExpiryDate !== null) {
            $object->cardExpiryDate = $this->cardExpiryDate;
        }
        if ($this->cardHolderName !== null) {
            $object->cardHolderName = $this->cardHolderName;
        }
        if ($this->encryptedCardNumber !== null) {
            $object->encryptedCardNumber = $this->encryptedCardNumber;
        }
        if ($this->paymentId !== null) {
            $object->paymentId = $this->paymentId;
        }
        if ($this->schemeReferenceData !== null) {
            $object->schemeReferenceData = $this->schemeReferenceData;
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
        if (property_exists($object, 'cardBrand')) {
            $this->cardBrand = $object->cardBrand;
        }
        if (property_exists($object, 'cardExpiryDate')) {
            $this->cardExpiryDate = $object->cardExpiryDate;
        }
        if (property_exists($object, 'cardHolderName')) {
            $this->cardHolderName = $object->cardHolderName;
        }
        if (property_exists($object, 'encryptedCardNumber')) {
            $this->encryptedCardNumber = $object->encryptedCardNumber;
        }
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        if (property_exists($object, 'schemeReferenceData')) {
            $this->schemeReferenceData = $object->schemeReferenceData;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
