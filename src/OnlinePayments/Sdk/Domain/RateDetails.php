<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RateDetails extends DataObject
{
    /**
     * @var float
     */
    public $exchangeRate = null;

    /**
     * @var float
     */
    public $invertedExchangeRate = null;

    /**
     * @var float
     */
    public $markUpRate = null;

    /**
     * @var string
     */
    public $quotationDateTime = null;

    /**
     * @var string
     */
    public $source = null;

    /**
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * @param float
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
     * @param float
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
     * @param float
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
     * @param string
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
     * @param string
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
        if (!is_null($this->exchangeRate)) {
            $object->exchangeRate = $this->exchangeRate;
        }
        if (!is_null($this->invertedExchangeRate)) {
            $object->invertedExchangeRate = $this->invertedExchangeRate;
        }
        if (!is_null($this->markUpRate)) {
            $object->markUpRate = $this->markUpRate;
        }
        if (!is_null($this->quotationDateTime)) {
            $object->quotationDateTime = $this->quotationDateTime;
        }
        if (!is_null($this->source)) {
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
