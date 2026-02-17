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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardBrand)) {
            $object->cardBrand = $this->cardBrand;
        }
        if (!is_null($this->cardExpiryDate)) {
            $object->cardExpiryDate = $this->cardExpiryDate;
        }
        if (!is_null($this->cardHolderName)) {
            $object->cardHolderName = $this->cardHolderName;
        }
        if (!is_null($this->encryptedCardNumber)) {
            $object->encryptedCardNumber = $this->encryptedCardNumber;
        }
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        if (!is_null($this->schemeReferenceData)) {
            $object->schemeReferenceData = $this->schemeReferenceData;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): DetokenizedTokenResponse
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
