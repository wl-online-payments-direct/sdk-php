<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use DateTime;
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
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var DateTime|null
     */
    public ?DateTime $transactionExpirationDateTime = null;

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
     * @param string|null $value
     * @return $this
     */
    public function withBirthCity(?string $value): static
    {
        $this->birthCity = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withBirthCountry(?string $value): static
    {
        $this->birthCountry = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withBirthZipCode(?string $value): static
    {
        $this->birthZipCode = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withChannel(?string $value): static
    {
        $this->channel = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withLoyaltyCardNumber(?string $value): static
    {
        $this->loyaltyCardNumber = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSecondInstallmentPaymentDate(?string $value): static
    {
        $this->secondInstallmentPaymentDate = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withSessionDuration(?int $value): static
    {
        $this->sessionDuration = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $value
     */
    public function setTitle(?string $value): void
    {
        $this->title = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTitle(?string $value): static
    {
        $this->title = $value;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getTransactionExpirationDateTime(): ?DateTime
    {
        return $this->transactionExpirationDateTime;
    }

    /**
     * @param DateTime|null $value
     */
    public function setTransactionExpirationDateTime(?DateTime $value): void
    {
        $this->transactionExpirationDateTime = $value;
    }

    /**
     * @param DateTime|null $value
     * @return $this
     */
    public function withTransactionExpirationDateTime(?DateTime $value): static
    {
        $this->transactionExpirationDateTime = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->birthCity !== null) {
            $object->birthCity = $this->birthCity;
        }
        if ($this->birthCountry !== null) {
            $object->birthCountry = $this->birthCountry;
        }
        if ($this->birthZipCode !== null) {
            $object->birthZipCode = $this->birthZipCode;
        }
        if ($this->channel !== null) {
            $object->channel = $this->channel;
        }
        if ($this->loyaltyCardNumber !== null) {
            $object->loyaltyCardNumber = $this->loyaltyCardNumber;
        }
        if ($this->secondInstallmentPaymentDate !== null) {
            $object->secondInstallmentPaymentDate = $this->secondInstallmentPaymentDate;
        }
        if ($this->sessionDuration !== null) {
            $object->sessionDuration = $this->sessionDuration;
        }
        if ($this->title !== null) {
            $object->title = $this->title;
        }
        if ($this->transactionExpirationDateTime !== null) {
            $object->transactionExpirationDateTime = $this->transactionExpirationDateTime->format('Y-m-d\\TH:i:s.vP');
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
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        if (property_exists($object, 'transactionExpirationDateTime')) {
            $this->transactionExpirationDateTime = new DateTime($object->transactionExpirationDateTime);
        }
        return $this;
    }
}
