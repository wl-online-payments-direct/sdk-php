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
     * @var string
     */
    public $cardNumber = null;

    /**
     * @var string
     */
    public $cardholderName = null;

    /**
     * @var string
     */
    public $expiryDate = null;

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
    public function getCardholderName()
    {
        return $this->cardholderName;
    }

    /**
     * @param string
     */
    public function setCardholderName($value)
    {
        $this->cardholderName = $value;
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
