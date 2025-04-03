<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatePayoutRequest extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $amountOfMoney = null;

    /**
     * @var CardPayoutMethodSpecificInput
     */
    public $cardPayoutMethodSpecificInput = null;

    /**
     * @var string
     */
    public $descriptor = null;

    /**
     * @var Feedbacks
     */
    public $feedbacks = null;

    /**
     * @var OmnichannelPayoutSpecificInput
     */
    public $omnichannelPayoutSpecificInput = null;

    /**
     * @var PaymentReferences
     */
    public $references = null;

    /**
     * @return AmountOfMoney
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney
     */
    public function setAmountOfMoney($value)
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return CardPayoutMethodSpecificInput
     */
    public function getCardPayoutMethodSpecificInput()
    {
        return $this->cardPayoutMethodSpecificInput;
    }

    /**
     * @param CardPayoutMethodSpecificInput
     */
    public function setCardPayoutMethodSpecificInput($value)
    {
        $this->cardPayoutMethodSpecificInput = $value;
    }

    /**
     * @return string
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }

    /**
     * @param string
     */
    public function setDescriptor($value)
    {
        $this->descriptor = $value;
    }

    /**
     * @return Feedbacks
     */
    public function getFeedbacks()
    {
        return $this->feedbacks;
    }

    /**
     * @param Feedbacks
     */
    public function setFeedbacks($value)
    {
        $this->feedbacks = $value;
    }

    /**
     * @return OmnichannelPayoutSpecificInput
     */
    public function getOmnichannelPayoutSpecificInput()
    {
        return $this->omnichannelPayoutSpecificInput;
    }

    /**
     * @param OmnichannelPayoutSpecificInput
     */
    public function setOmnichannelPayoutSpecificInput($value)
    {
        $this->omnichannelPayoutSpecificInput = $value;
    }

    /**
     * @return PaymentReferences
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param PaymentReferences
     */
    public function setReferences($value)
    {
        $this->references = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->cardPayoutMethodSpecificInput)) {
            $object->cardPayoutMethodSpecificInput = $this->cardPayoutMethodSpecificInput->toObject();
        }
        if (!is_null($this->descriptor)) {
            $object->descriptor = $this->descriptor;
        }
        if (!is_null($this->feedbacks)) {
            $object->feedbacks = $this->feedbacks->toObject();
        }
        if (!is_null($this->omnichannelPayoutSpecificInput)) {
            $object->omnichannelPayoutSpecificInput = $this->omnichannelPayoutSpecificInput->toObject();
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
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
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'cardPayoutMethodSpecificInput')) {
            if (!is_object($object->cardPayoutMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPayoutMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new CardPayoutMethodSpecificInput();
            $this->cardPayoutMethodSpecificInput = $value->fromObject($object->cardPayoutMethodSpecificInput);
        }
        if (property_exists($object, 'descriptor')) {
            $this->descriptor = $object->descriptor;
        }
        if (property_exists($object, 'feedbacks')) {
            if (!is_object($object->feedbacks)) {
                throw new UnexpectedValueException('value \'' . print_r($object->feedbacks, true) . '\' is not an object');
            }
            $value = new Feedbacks();
            $this->feedbacks = $value->fromObject($object->feedbacks);
        }
        if (property_exists($object, 'omnichannelPayoutSpecificInput')) {
            if (!is_object($object->omnichannelPayoutSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->omnichannelPayoutSpecificInput, true) . '\' is not an object');
            }
            $value = new OmnichannelPayoutSpecificInput();
            $this->omnichannelPayoutSpecificInput = $value->fromObject($object->omnichannelPayoutSpecificInput);
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new PaymentReferences();
            $this->references = $value->fromObject($object->references);
        }
        return $this;
    }
}
