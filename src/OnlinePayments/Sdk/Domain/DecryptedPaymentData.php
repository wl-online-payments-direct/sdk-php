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
class DecryptedPaymentData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $cardholderName;

    /**
     * @var string
     */
    private $cryptogram;

    /**
     * @var string
     */
    private $dpan;

    /**
     * @var int
     */
    private $eci;

    /**
     * @var string
     */
    private $expiryDate;

    // Methods
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
    public function getCryptogram()
    {
        return $this->cryptogram;
    }
    /**
     * @var string
     */
    public function setCryptogram($value)
    {
        $this->cryptogram = $value;
    }

    /**
     * @return string
     */
    public function getDpan()
    {
        return $this->dpan;
    }
    /**
     * @var string
     */
    public function setDpan($value)
    {
        $this->dpan = $value;
    }

    /**
     * @return int
     */
    public function getEci()
    {
        return $this->eci;
    }
    /**
     * @var int
     */
    public function setEci($value)
    {
        $this->eci = $value;
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
        if ($this->cardholderName !== null) {
            $object->cardholderName = $this->cardholderName;
        }
        if ($this->cryptogram !== null) {
            $object->cryptogram = $this->cryptogram;
        }
        if ($this->dpan !== null) {
            $object->dpan = $this->dpan;
        }
        if ($this->eci !== null) {
            $object->eci = $this->eci;
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
        if (property_exists($object, 'cardholderName')) {
            $this->cardholderName = $object->cardholderName;
        }
        if (property_exists($object, 'cryptogram')) {
            $this->cryptogram = $object->cryptogram;
        }
        if (property_exists($object, 'dpan')) {
            $this->dpan = $object->dpan;
        }
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
