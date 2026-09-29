<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardWithoutCvv extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $cardNumber = null;

    /**
     * @var string|null
    */
    public ?string $cardholderName = null;

    /**
     * @var string|null
    */
    public ?string $expiryDate = null;

    /**
     * @return string|null
    */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * @param string|null $value
    */
    public function setCardNumber(?string $value): void
    {
        $this->cardNumber = $value;
    }

    /**
     * @param string|null $value
     * @return CardWithoutCvv
    */
    public function withCardNumber(?string $value): CardWithoutCvv
    {
        $this->cardNumber = $value;
        return $this;
    }

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
     * @return CardWithoutCvv
    */
    public function withCardholderName(?string $value): CardWithoutCvv
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
     * @return CardWithoutCvv
    */
    public function withExpiryDate(?string $value): CardWithoutCvv
    {
        $this->expiryDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardNumber)) {
            $object->cardNumber = $this->cardNumber;
        }
        if (!is_null($this->cardholderName)) {
            $object->cardholderName = $this->cardholderName;
        }
        if (!is_null($this->expiryDate)) {
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
    public function fromObject(object $object): CardWithoutCvv
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        if (property_exists($object, 'cardholderName')) {
            $this->cardholderName = $object->cardholderName;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
