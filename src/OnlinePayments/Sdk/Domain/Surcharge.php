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
class Surcharge extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $netAmount;

    /**
     * @var int
     */
    private $paymentProductId;

    /**
     * @var string
     */
    private $result;

    /**
     * @var AmountOfMoney
     */
    private $surchargeAmount;

    /**
     * @var SurchargeRate
     */
    private $surchargeRate;

    /**
     * @var AmountOfMoney
     */
    private $totalAmount;

    // Methods
    /**
     * @return AmountOfMoney
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }
    /**
     * @var AmountOfMoney
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
     * @var int
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
     * @var string
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
     * @var AmountOfMoney
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
     * @var SurchargeRate
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
     * @var AmountOfMoney
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
        if ($this->netAmount !== null) {
            $object->netAmount = $this->netAmount->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->result !== null) {
            $object->result = $this->result;
        }
        if ($this->surchargeAmount !== null) {
            $object->surchargeAmount = $this->surchargeAmount->toObject();
        }
        if ($this->surchargeRate !== null) {
            $object->surchargeRate = $this->surchargeRate->toObject();
        }
        if ($this->totalAmount !== null) {
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
