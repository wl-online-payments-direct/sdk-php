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
class CalculateSurchargeRequest extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $amountOfMoney;

    /**
     * @var CardSource
     */
    private $cardSource;

    // Methods
    /**
     * @return AmountOfMoney
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }
    /**
     * @var AmountOfMoney
     */
    public function setAmountOfMoney($value)
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return CardSource
     */
    public function getCardSource()
    {
        return $this->cardSource;
    }
    /**
     * @var CardSource
     */
    public function setCardSource($value)
    {
        $this->cardSource = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->amountOfMoney !== null) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if ($this->cardSource !== null) {
            $object->cardSource = $this->cardSource->toObject();
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
        if (property_exists($object, 'cardSource')) {
            if (!is_object($object->cardSource)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardSource, true) . '\' is not an object');
            }
            $value = new CardSource();
            $this->cardSource = $value->fromObject($object->cardSource);
        }
        return $this;
    }
}
