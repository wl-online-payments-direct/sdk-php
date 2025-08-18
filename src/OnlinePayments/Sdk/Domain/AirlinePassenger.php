<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AirlinePassenger extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $airlineLoyaltyStatus = null;

    /**
     * @var string|null
     */
    public ?string $firstName = null;

    /**
     * @var string|null
     */
    public ?string $passengerType = null;

    /**
     * @var string|null
     */
    public ?string $surname = null;

    /**
     * @var string|null
     */
    public ?string $surnamePrefix = null;

    /**
     * @var string|null
     * @deprecated This field is not used by any payment product Title of the passenger (this property is used for fraud screening on the payment platform)
     */
    public ?string $title = null;

    /**
     * @return string|null
     */
    public function getAirlineLoyaltyStatus(): ?string
    {
        return $this->airlineLoyaltyStatus;
    }

    /**
     * @param string|null $value
     */
    public function setAirlineLoyaltyStatus(?string $value): void
    {
        $this->airlineLoyaltyStatus = $value;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $value
     */
    public function setFirstName(?string $value): void
    {
        $this->firstName = $value;
    }

    /**
     * @return string|null
     */
    public function getPassengerType(): ?string
    {
        return $this->passengerType;
    }

    /**
     * @param string|null $value
     */
    public function setPassengerType(?string $value): void
    {
        $this->passengerType = $value;
    }

    /**
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $value
     */
    public function setSurname(?string $value): void
    {
        $this->surname = $value;
    }

    /**
     * @return string|null
     */
    public function getSurnamePrefix(): ?string
    {
        return $this->surnamePrefix;
    }

    /**
     * @param string|null $value
     */
    public function setSurnamePrefix(?string $value): void
    {
        $this->surnamePrefix = $value;
    }

    /**
     * @return string|null
     * @deprecated This field is not used by any payment product Title of the passenger (this property is used for fraud screening on the payment platform)
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $value
     * @deprecated This field is not used by any payment product Title of the passenger (this property is used for fraud screening on the payment platform)
     */
    public function setTitle(?string $value): void
    {
        $this->title = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->airlineLoyaltyStatus)) {
            $object->airlineLoyaltyStatus = $this->airlineLoyaltyStatus;
        }
        if (!is_null($this->firstName)) {
            $object->firstName = $this->firstName;
        }
        if (!is_null($this->passengerType)) {
            $object->passengerType = $this->passengerType;
        }
        if (!is_null($this->surname)) {
            $object->surname = $this->surname;
        }
        if (!is_null($this->surnamePrefix)) {
            $object->surnamePrefix = $this->surnamePrefix;
        }
        if (!is_null($this->title)) {
            $object->title = $this->title;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AirlinePassenger
    {
        parent::fromObject($object);
        if (property_exists($object, 'airlineLoyaltyStatus')) {
            $this->airlineLoyaltyStatus = $object->airlineLoyaltyStatus;
        }
        if (property_exists($object, 'firstName')) {
            $this->firstName = $object->firstName;
        }
        if (property_exists($object, 'passengerType')) {
            $this->passengerType = $object->passengerType;
        }
        if (property_exists($object, 'surname')) {
            $this->surname = $object->surname;
        }
        if (property_exists($object, 'surnamePrefix')) {
            $this->surnamePrefix = $object->surnamePrefix;
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        return $this;
    }
}
