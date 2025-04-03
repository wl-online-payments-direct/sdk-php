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
     * @var string
     */
    public $airlineLoyaltyStatus = null;

    /**
     * @var string
     */
    public $firstName = null;

    /**
     * @var string
     */
    public $passengerType = null;

    /**
     * @var string
     */
    public $surname = null;

    /**
     * @var string
     */
    public $surnamePrefix = null;

    /**
     * @var string
     * @deprecated This field is not used by any payment product Title of the passenger (this property is used for fraud screening on the payment platform)
     */
    public $title = null;

    /**
     * @return string
     */
    public function getAirlineLoyaltyStatus()
    {
        return $this->airlineLoyaltyStatus;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
     */
    public function setSurnamePrefix($value)
    {
        $this->surnamePrefix = $value;
    }

    /**
     * @return string
     * @deprecated This field is not used by any payment product Title of the passenger (this property is used for fraud screening on the payment platform)
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product Title of the passenger (this property is used for fraud screening on the payment platform)
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
