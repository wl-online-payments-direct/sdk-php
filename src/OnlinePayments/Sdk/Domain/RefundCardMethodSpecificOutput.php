<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundCardMethodSpecificOutput extends DataObject
{
    /**
     * @var CurrencyConversion
     */
    public $currencyConversion = null;

    /**
     * @var int
     */
    public $totalAmountPaid = null;

    /**
     * @var int
     */
    public $totalAmountRefunded = null;

    /**
     * @return CurrencyConversion
     */
    public function getCurrencyConversion()
    {
        return $this->currencyConversion;
    }

    /**
     * @param CurrencyConversion
     */
    public function setCurrencyConversion($value)
    {
        $this->currencyConversion = $value;
    }

    /**
     * @return int
     */
    public function getTotalAmountPaid()
    {
        return $this->totalAmountPaid;
    }

    /**
     * @param int
     */
    public function setTotalAmountPaid($value)
    {
        $this->totalAmountPaid = $value;
    }

    /**
     * @return int
     */
    public function getTotalAmountRefunded()
    {
        return $this->totalAmountRefunded;
    }

    /**
     * @param int
     */
    public function setTotalAmountRefunded($value)
    {
        $this->totalAmountRefunded = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->currencyConversion)) {
            $object->currencyConversion = $this->currencyConversion->toObject();
        }
        if (!is_null($this->totalAmountPaid)) {
            $object->totalAmountPaid = $this->totalAmountPaid;
        }
        if (!is_null($this->totalAmountRefunded)) {
            $object->totalAmountRefunded = $this->totalAmountRefunded;
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
        if (property_exists($object, 'currencyConversion')) {
            if (!is_object($object->currencyConversion)) {
                throw new UnexpectedValueException('value \'' . print_r($object->currencyConversion, true) . '\' is not an object');
            }
            $value = new CurrencyConversion();
            $this->currencyConversion = $value->fromObject($object->currencyConversion);
        }
        if (property_exists($object, 'totalAmountPaid')) {
            $this->totalAmountPaid = $object->totalAmountPaid;
        }
        if (property_exists($object, 'totalAmountRefunded')) {
            $this->totalAmountRefunded = $object->totalAmountRefunded;
        }
        return $this;
    }
}
