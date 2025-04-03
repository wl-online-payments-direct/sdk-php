<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Surcharge extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $netAmount = null;

    /**
     * @var int
     */
    public $paymentProductId = null;

    /**
     * @var string
     */
    public $result = null;

    /**
     * @var AmountOfMoney
     */
    public $surchargeAmount = null;

    /**
     * @var SurchargeRate
     */
    public $surchargeRate = null;

    /**
     * @var AmountOfMoney
     */
    public $totalAmount = null;

    /**
     * @return AmountOfMoney
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @param AmountOfMoney
     */
    public function setNetAmount($value)
    {
        $this->netAmount = $value;
    }

    /**
     * @return int
     */
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }

    /**
     * @param int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string
     */
    public function setResult($value)
    {
        $this->result = $value;
    }

    /**
     * @return AmountOfMoney
     */
    public function getSurchargeAmount()
    {
        return $this->surchargeAmount;
    }

    /**
     * @param AmountOfMoney
     */
    public function setSurchargeAmount($value)
    {
        $this->surchargeAmount = $value;
    }

    /**
     * @return SurchargeRate
     */
    public function getSurchargeRate()
    {
        return $this->surchargeRate;
    }

    /**
     * @param SurchargeRate
     */
    public function setSurchargeRate($value)
    {
        $this->surchargeRate = $value;
    }

    /**
     * @return AmountOfMoney
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param AmountOfMoney
     */
    public function setTotalAmount($value)
    {
        $this->totalAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->netAmount)) {
            $object->netAmount = $this->netAmount->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->result)) {
            $object->result = $this->result;
        }
        if (!is_null($this->surchargeAmount)) {
            $object->surchargeAmount = $this->surchargeAmount->toObject();
        }
        if (!is_null($this->surchargeRate)) {
            $object->surchargeRate = $this->surchargeRate->toObject();
        }
        if (!is_null($this->totalAmount)) {
            $object->totalAmount = $this->totalAmount->toObject();
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
        if (property_exists($object, 'netAmount')) {
            if (!is_object($object->netAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->netAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->netAmount = $value->fromObject($object->netAmount);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        if (property_exists($object, 'surchargeAmount')) {
            if (!is_object($object->surchargeAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->surchargeAmount = $value->fromObject($object->surchargeAmount);
        }
        if (property_exists($object, 'surchargeRate')) {
            if (!is_object($object->surchargeRate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeRate, true) . '\' is not an object');
            }
            $value = new SurchargeRate();
            $this->surchargeRate = $value->fromObject($object->surchargeRate);
        }
        if (property_exists($object, 'totalAmount')) {
            if (!is_object($object->totalAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->totalAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->totalAmount = $value->fromObject($object->totalAmount);
        }
        return $this;
    }
}
