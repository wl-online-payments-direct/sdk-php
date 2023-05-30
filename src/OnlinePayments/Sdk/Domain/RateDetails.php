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
class RateDetails extends DataObject
{
    // Properties
    /**
     * @var float
     */
    private $exchangeRate;

    /**
     * @var float
     */
    private $invertedExchangeRate;

    /**
     * @var float
     */
    private $markUpRate;

    /**
     * @var string
     */
    private $quotationDateTime;

    /**
     * @var string
     */
    private $source;

    // Methods
    /**
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }
    /**
     * @var float
     */
    public function setExchangeRate($value)
    {
        $this->exchangeRate = $value;
    }

    /**
     * @return float
     */
    public function getInvertedExchangeRate()
    {
        return $this->invertedExchangeRate;
    }
    /**
     * @var float
     */
    public function setInvertedExchangeRate($value)
    {
        $this->invertedExchangeRate = $value;
    }

    /**
     * @return float
     */
    public function getMarkUpRate()
    {
        return $this->markUpRate;
    }
    /**
     * @var float
     */
    public function setMarkUpRate($value)
    {
        $this->markUpRate = $value;
    }

    /**
     * @return string
     */
    public function getQuotationDateTime()
    {
        return $this->quotationDateTime;
    }
    /**
     * @var string
     */
    public function setQuotationDateTime($value)
    {
        $this->quotationDateTime = $value;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * @var string
     */
    public function setSource($value)
    {
        $this->source = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->exchangeRate !== null) {
            $object->exchangeRate = $this->exchangeRate;
        }
        if ($this->invertedExchangeRate !== null) {
            $object->invertedExchangeRate = $this->invertedExchangeRate;
        }
        if ($this->markUpRate !== null) {
            $object->markUpRate = $this->markUpRate;
        }
        if ($this->quotationDateTime !== null) {
            $object->quotationDateTime = $this->quotationDateTime;
        }
        if ($this->source !== null) {
            $object->source = $this->source;
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
        if (property_exists($object, 'exchangeRate')) {
            $this->exchangeRate = $object->exchangeRate;
        }
        if (property_exists($object, 'invertedExchangeRate')) {
            $this->invertedExchangeRate = $object->invertedExchangeRate;
        }
        if (property_exists($object, 'markUpRate')) {
            $this->markUpRate = $object->markUpRate;
        }
        if (property_exists($object, 'quotationDateTime')) {
            $this->quotationDateTime = $object->quotationDateTime;
        }
        if (property_exists($object, 'source')) {
            $this->source = $object->source;
        }
        return $this;
    }
}
