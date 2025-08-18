<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5300SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $birthCity = null;

    /**
     * @var string|null
     */
    public ?string $birthCountry = null;

    /**
     * @var string|null
     */
    public ?string $birthZipCode = null;

    /**
     * @var string|null
     */
    public ?string $channel = null;

    /**
     * @var string|null
     */
    public ?string $loyaltyCardNumber = null;

    /**
     * @var string|null
     */
    public ?string $secondInstallmentPaymentDate = null;

    /**
     * @var int|null
     */
    public ?int $sessionDuration = null;

    /**
     * @return string|null
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    /**
     * @param string|null $value
     */
    public function setBirthCity(?string $value): void
    {
        $this->birthCity = $value;
    }

    /**
     * @return string|null
     */
    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    /**
     * @param string|null $value
     */
    public function setBirthCountry(?string $value): void
    {
        $this->birthCountry = $value;
    }

    /**
     * @return string|null
     */
    public function getBirthZipCode(): ?string
    {
        return $this->birthZipCode;
    }

    /**
     * @param string|null $value
     */
    public function setBirthZipCode(?string $value): void
    {
        $this->birthZipCode = $value;
    }

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
     * @return string|null
     */
    public function getLoyaltyCardNumber(): ?string
    {
        return $this->loyaltyCardNumber;
    }

    /**
     * @param string|null $value
     */
    public function setLoyaltyCardNumber(?string $value): void
    {
        $this->loyaltyCardNumber = $value;
    }

    /**
     * @return string|null
     */
    public function getSecondInstallmentPaymentDate(): ?string
    {
        return $this->secondInstallmentPaymentDate;
    }

    /**
     * @param string|null $value
     */
    public function setSecondInstallmentPaymentDate(?string $value): void
    {
        $this->secondInstallmentPaymentDate = $value;
    }

    /**
     * @return int|null
     */
    public function getSessionDuration(): ?int
    {
        return $this->sessionDuration;
    }

    /**
     * @param int|null $value
     */
    public function setSessionDuration(?int $value): void
    {
        $this->sessionDuration = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->birthCity)) {
            $object->birthCity = $this->birthCity;
        }
        if (!is_null($this->birthCountry)) {
            $object->birthCountry = $this->birthCountry;
        }
        if (!is_null($this->birthZipCode)) {
            $object->birthZipCode = $this->birthZipCode;
        }
        if (!is_null($this->channel)) {
            $object->channel = $this->channel;
        }
        if (!is_null($this->loyaltyCardNumber)) {
            $object->loyaltyCardNumber = $this->loyaltyCardNumber;
        }
        if (!is_null($this->secondInstallmentPaymentDate)) {
            $object->secondInstallmentPaymentDate = $this->secondInstallmentPaymentDate;
        }
        if (!is_null($this->sessionDuration)) {
            $object->sessionDuration = $this->sessionDuration;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct5300SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'birthCity')) {
            $this->birthCity = $object->birthCity;
        }
        if (property_exists($object, 'birthCountry')) {
            $this->birthCountry = $object->birthCountry;
        }
        if (property_exists($object, 'birthZipCode')) {
            $this->birthZipCode = $object->birthZipCode;
        }
        if (property_exists($object, 'channel')) {
            $this->channel = $object->channel;
        }
        if (property_exists($object, 'loyaltyCardNumber')) {
            $this->loyaltyCardNumber = $object->loyaltyCardNumber;
        }
        if (property_exists($object, 'secondInstallmentPaymentDate')) {
            $this->secondInstallmentPaymentDate = $object->secondInstallmentPaymentDate;
        }
        if (property_exists($object, 'sessionDuration')) {
            $this->sessionDuration = $object->sessionDuration;
        }
        return $this;
    }
}
