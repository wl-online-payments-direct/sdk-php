<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AirlinePassenger extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $airlineLoyaltyStatus;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $passengerType;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $surnamePrefix;

    /**
     * @var string
     */
    private $title;

    // Methods
    /**
     * @return string
     */
    public function getAirlineLoyaltyStatus()
    {
        return $this->airlineLoyaltyStatus;
    }
    /**
     * @var string
     */
    public function setAirlineLoyaltyStatus($value)
    {
        $this->airlineLoyaltyStatus = $value;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @var string
     */
    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    /**
     * @return string
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }
    /**
     * @var string
     */
    public function setPassengerType($value)
    {
        $this->passengerType = $value;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * @var string
     */
    public function setSurname($value)
    {
        $this->surname = $value;
    }

    /**
     * @return string
     */
    public function getSurnamePrefix()
    {
        return $this->surnamePrefix;
    }
    /**
     * @var string
     */
    public function setSurnamePrefix($value)
    {
        $this->surnamePrefix = $value;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->title = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->airlineLoyaltyStatus !== null) {
            $object->airlineLoyaltyStatus = $this->airlineLoyaltyStatus;
        }
        if ($this->firstName !== null) {
            $object->firstName = $this->firstName;
        }
        if ($this->passengerType !== null) {
            $object->passengerType = $this->passengerType;
        }
        if ($this->surname !== null) {
            $object->surname = $this->surname;
        }
        if ($this->surnamePrefix !== null) {
            $object->surnamePrefix = $this->surnamePrefix;
        }
        if ($this->title !== null) {
            $object->title = $this->title;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
