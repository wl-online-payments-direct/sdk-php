<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DccProposal extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $baseAmount = null;

    /**
     * @var string
     */
    public $disclaimerDisplay = null;

    /**
     * @var string
     */
    public $disclaimerReceipt = null;

    /**
     * @var RateDetails
     */
    public $rate = null;

    /**
     * @var AmountOfMoney
     */
    public $targetAmount = null;

    /**
     * @return AmountOfMoney
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * @param AmountOfMoney
     */
    public function setBaseAmount($value)
    {
        $this->baseAmount = $value;
    }

    /**
     * @return string
     */
    public function getDisclaimerDisplay()
    {
        return $this->disclaimerDisplay;
    }

    /**
     * @param string
     */
    public function setDisclaimerDisplay($value)
    {
        $this->disclaimerDisplay = $value;
    }

    /**
     * @return string
     */
    public function getDisclaimerReceipt()
    {
        return $this->disclaimerReceipt;
    }

    /**
     * @param string
     */
    public function setDisclaimerReceipt($value)
    {
        $this->disclaimerReceipt = $value;
    }

    /**
     * @return RateDetails
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param RateDetails
     */
    public function setRate($value)
    {
        $this->rate = $value;
    }

    /**
     * @return AmountOfMoney
     */
    public function getTargetAmount()
    {
        return $this->targetAmount;
    }

    /**
     * @param AmountOfMoney
     */
    public function setTargetAmount($value)
    {
        $this->targetAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->baseAmount)) {
            $object->baseAmount = $this->baseAmount->toObject();
        }
        if (!is_null($this->disclaimerDisplay)) {
            $object->disclaimerDisplay = $this->disclaimerDisplay;
        }
        if (!is_null($this->disclaimerReceipt)) {
            $object->disclaimerReceipt = $this->disclaimerReceipt;
        }
        if (!is_null($this->rate)) {
            $object->rate = $this->rate->toObject();
        }
        if (!is_null($this->targetAmount)) {
            $object->targetAmount = $this->targetAmount->toObject();
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
        if (property_exists($object, 'baseAmount')) {
            if (!is_object($object->baseAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->baseAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->baseAmount = $value->fromObject($object->baseAmount);
        }
        if (property_exists($object, 'disclaimerDisplay')) {
            $this->disclaimerDisplay = $object->disclaimerDisplay;
        }
        if (property_exists($object, 'disclaimerReceipt')) {
            $this->disclaimerReceipt = $object->disclaimerReceipt;
        }
        if (property_exists($object, 'rate')) {
            if (!is_object($object->rate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->rate, true) . '\' is not an object');
            }
            $value = new RateDetails();
            $this->rate = $value->fromObject($object->rate);
        }
        if (property_exists($object, 'targetAmount')) {
            if (!is_object($object->targetAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->targetAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->targetAmount = $value->fromObject($object->targetAmount);
        }
        return $this;
    }
}
