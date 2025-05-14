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
     * @var string
     */
    public $birthCity = null;

    /**
     * @var string
     */
    public $birthCountry = null;

    /**
     * @var string
     */
    public $birthZipCode = null;

    /**
     * @var string
     */
    public $channel = null;

    /**
     * @var string
     */
    public $loyaltyCardNumber = null;

    /**
     * @var string
     */
    public $secondInstallmentPaymentDate = null;

    /**
     * @var int
     */
    public $sessionDuration = null;

    /**
     * @return string
     */
    public function getBirthCity()
    {
        return $this->birthCity;
    }

    /**
     * @param string
     */
    public function setBirthCity($value)
    {
        $this->birthCity = $value;
    }

    /**
     * @return string
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }

    /**
     * @param string
     */
    public function setBirthCountry($value)
    {
        $this->birthCountry = $value;
    }

    /**
     * @return string
     */
    public function getBirthZipCode()
    {
        return $this->birthZipCode;
    }

    /**
     * @param string
     */
    public function setBirthZipCode($value)
    {
        $this->birthZipCode = $value;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string
     */
    public function setChannel($value)
    {
        $this->channel = $value;
    }

    /**
     * @return string
     */
    public function getLoyaltyCardNumber()
    {
        return $this->loyaltyCardNumber;
    }

    /**
     * @param string
     */
    public function setLoyaltyCardNumber($value)
    {
        $this->loyaltyCardNumber = $value;
    }

    /**
     * @return string
     */
    public function getSecondInstallmentPaymentDate()
    {
        return $this->secondInstallmentPaymentDate;
    }

    /**
     * @param string
     */
    public function setSecondInstallmentPaymentDate($value)
    {
        $this->secondInstallmentPaymentDate = $value;
    }

    /**
     * @return int
     */
    public function getSessionDuration()
    {
        return $this->sessionDuration;
    }

    /**
     * @param int
     */
    public function setSessionDuration($value)
    {
        $this->sessionDuration = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
