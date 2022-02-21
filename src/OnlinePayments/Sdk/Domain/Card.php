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
class Card extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $cardholderName;

    /**
     * @var string
     */
    private $cvv;

    /**
     * @var string
     */
    private $expiryDate;

    // Methods
    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    /**
     * @var string
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
     * @var string
     */
    public function setCardholderName($value)
    {
        $this->cardholderName = $value;
    }

    /**
     * @return string
     */
    public function getCvv()
    {
        return $this->cvv;
    }
    /**
     * @var string
     */
    public function setCvv($value)
    {
        $this->cvv = $value;
    }

    /**
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }
    /**
     * @var string
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
        if ($this->cardNumber !== null) {
            $object->cardNumber = $this->cardNumber;
        }
        if ($this->cardholderName !== null) {
            $object->cardholderName = $this->cardholderName;
        }
        if ($this->cvv !== null) {
            $object->cvv = $this->cvv;
        }
        if ($this->expiryDate !== null) {
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
        if (property_exists($object, 'cvv')) {
            $this->cvv = $object->cvv;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
