<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardEssentials extends DataObject
{
    /**
     * @var string
     */
    public $bin = null;

    /**
     * @var string
     */
    public $cardNumber = null;

    /**
     * @var string
     */
    public $countryCode = null;

    /**
     * @var string
     */
    public $expiryDate = null;

    /**
     * @return string
     */
    public function getBin()
    {
        return $this->bin;
    }

    /**
     * @param string
     */
    public function setBin($value)
    {
        $this->bin = $value;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string
     */
    public function setCardNumber($value)
    {
        $this->cardNumber = $value;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param string
     */
    public function setExpiryDate($value)
    {
        $this->expiryDate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->bin)) {
            $object->bin = $this->bin;
        }
        if (!is_null($this->cardNumber)) {
            $object->cardNumber = $this->cardNumber;
        }
        if (!is_null($this->countryCode)) {
            $object->countryCode = $this->countryCode;
        }
        if (!is_null($this->expiryDate)) {
            $object->expiryDate = $this->expiryDate;
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
        if (property_exists($object, 'bin')) {
            $this->bin = $object->bin;
        }
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        if (property_exists($object, 'countryCode')) {
            $this->countryCode = $object->countryCode;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
