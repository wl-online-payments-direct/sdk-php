<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ApplePayLineItem extends DataObject
{
    /**
     * @var string
     */
    public $amount = null;

    /**
     * @var string
     */
    public $label = null;

    /**
     * @var string
     */
    public $paymentTiming = null;

    /**
     * @var string
     */
    public $recurringPaymentEndDate = null;

    /**
     * @var int
     */
    public $recurringPaymentIntervalCount = null;

    /**
     * @var string
     */
    public $recurringPaymentIntervalUnit = null;

    /**
     * @var string
     */
    public $recurringPaymentStartDate = null;

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string
     */
    public function setLabel($value)
    {
        $this->label = $value;
    }

    /**
     * @return string
     */
    public function getPaymentTiming()
    {
        return $this->paymentTiming;
    }

    /**
     * @param string
     */
    public function setPaymentTiming($value)
    {
        $this->paymentTiming = $value;
    }

    /**
     * @return string
     */
    public function getRecurringPaymentEndDate()
    {
        return $this->recurringPaymentEndDate;
    }

    /**
     * @param string
     */
    public function setRecurringPaymentEndDate($value)
    {
        $this->recurringPaymentEndDate = $value;
    }

    /**
     * @return int
     */
    public function getRecurringPaymentIntervalCount()
    {
        return $this->recurringPaymentIntervalCount;
    }

    /**
     * @param int
     */
    public function setRecurringPaymentIntervalCount($value)
    {
        $this->recurringPaymentIntervalCount = $value;
    }

    /**
     * @return string
     */
    public function getRecurringPaymentIntervalUnit()
    {
        return $this->recurringPaymentIntervalUnit;
    }

    /**
     * @param string
     */
    public function setRecurringPaymentIntervalUnit($value)
    {
        $this->recurringPaymentIntervalUnit = $value;
    }

    /**
     * @return string
     */
    public function getRecurringPaymentStartDate()
    {
        return $this->recurringPaymentStartDate;
    }

    /**
     * @param string
     */
    public function setRecurringPaymentStartDate($value)
    {
        $this->recurringPaymentStartDate = $value;
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
        if (!is_null($this->label)) {
            $object->label = $this->label;
        }
        if (!is_null($this->paymentTiming)) {
            $object->paymentTiming = $this->paymentTiming;
        }
        if (!is_null($this->recurringPaymentEndDate)) {
            $object->recurringPaymentEndDate = $this->recurringPaymentEndDate;
        }
        if (!is_null($this->recurringPaymentIntervalCount)) {
            $object->recurringPaymentIntervalCount = $this->recurringPaymentIntervalCount;
        }
        if (!is_null($this->recurringPaymentIntervalUnit)) {
            $object->recurringPaymentIntervalUnit = $this->recurringPaymentIntervalUnit;
        }
        if (!is_null($this->recurringPaymentStartDate)) {
            $object->recurringPaymentStartDate = $this->recurringPaymentStartDate;
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
        if (property_exists($object, 'label')) {
            $this->label = $object->label;
        }
        if (property_exists($object, 'paymentTiming')) {
            $this->paymentTiming = $object->paymentTiming;
        }
        if (property_exists($object, 'recurringPaymentEndDate')) {
            $this->recurringPaymentEndDate = $object->recurringPaymentEndDate;
        }
        if (property_exists($object, 'recurringPaymentIntervalCount')) {
            $this->recurringPaymentIntervalCount = $object->recurringPaymentIntervalCount;
        }
        if (property_exists($object, 'recurringPaymentIntervalUnit')) {
            $this->recurringPaymentIntervalUnit = $object->recurringPaymentIntervalUnit;
        }
        if (property_exists($object, 'recurringPaymentStartDate')) {
            $this->recurringPaymentStartDate = $object->recurringPaymentStartDate;
        }
        return $this;
    }
}
