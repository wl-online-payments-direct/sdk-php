<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AmountOfMoney extends DataObject
{
    /**
     * @var int
     */
    public $amount = null;

    /**
     * @var string
     */
    public $currencyCode = null;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string
     */
    public function setCurrencyCode($value)
    {
        $this->currencyCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount;
        }
        if (!is_null($this->currencyCode)) {
            $object->currencyCode = $this->currencyCode;
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
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'currencyCode')) {
            $this->currencyCode = $object->currencyCode;
        }
        return $this;
    }
}
