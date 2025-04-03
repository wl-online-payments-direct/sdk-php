<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkOrderInput extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $amount = null;

    /**
     * @var string
     */
    public $merchantReference = null;

    /**
     * @var SurchargeForPaymentLink
     */
    public $surchargeSpecificInput = null;

    /**
     * @return AmountOfMoney
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param AmountOfMoney
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param string
     */
    public function setMerchantReference($value)
    {
        $this->merchantReference = $value;
    }

    /**
     * @return SurchargeForPaymentLink
     */
    public function getSurchargeSpecificInput()
    {
        return $this->surchargeSpecificInput;
    }

    /**
     * @param SurchargeForPaymentLink
     */
    public function setSurchargeSpecificInput($value)
    {
        $this->surchargeSpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount->toObject();
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->surchargeSpecificInput)) {
            $object->surchargeSpecificInput = $this->surchargeSpecificInput->toObject();
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
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'surchargeSpecificInput')) {
            if (!is_object($object->surchargeSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeSpecificInput, true) . '\' is not an object');
            }
            $value = new SurchargeForPaymentLink();
            $this->surchargeSpecificInput = $value->fromObject($object->surchargeSpecificInput);
        }
        return $this;
    }
}
