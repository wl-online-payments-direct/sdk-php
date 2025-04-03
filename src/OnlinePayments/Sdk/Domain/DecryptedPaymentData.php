<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DecryptedPaymentData extends DataObject
{
    /**
     * @var string
     */
    public $cardholderName = null;

    /**
     * @var string
     */
    public $cryptogram = null;

    /**
     * @var string
     */
    public $dpan = null;

    /**
     * @var int
     */
    public $eci = null;

    /**
     * @var string
     */
    public $expiryDate = null;

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
    public function getCryptogram()
    {
        return $this->cryptogram;
    }

    /**
     * @param string
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
     * @param string
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
     * @param int
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
        if (!is_null($this->cardholderName)) {
            $object->cardholderName = $this->cardholderName;
        }
        if (!is_null($this->cryptogram)) {
            $object->cryptogram = $this->cryptogram;
        }
        if (!is_null($this->dpan)) {
            $object->dpan = $this->dpan;
        }
        if (!is_null($this->eci)) {
            $object->eci = $this->eci;
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
