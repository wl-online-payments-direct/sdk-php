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
class DccProposal extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $baseAmount;

    /**
     * @var string
     */
    private $disclaimerDisplay;

    /**
     * @var string
     */
    private $disclaimerReceipt;

    /**
     * @var RateDetails
     */
    private $rate;

    /**
     * @var AmountOfMoney
     */
    private $targetAmount;

    // Methods
    /**
     * @return AmountOfMoney
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }
    /**
     * @var AmountOfMoney
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
     * @var string
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
     * @var string
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
     * @var RateDetails
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
     * @var AmountOfMoney
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
        if ($this->baseAmount !== null) {
            $object->baseAmount = $this->baseAmount->toObject();
        }
        if ($this->disclaimerDisplay !== null) {
            $object->disclaimerDisplay = $this->disclaimerDisplay;
        }
        if ($this->disclaimerReceipt !== null) {
            $object->disclaimerReceipt = $this->disclaimerReceipt;
        }
        if ($this->rate !== null) {
            $object->rate = $this->rate->toObject();
        }
        if ($this->targetAmount !== null) {
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
