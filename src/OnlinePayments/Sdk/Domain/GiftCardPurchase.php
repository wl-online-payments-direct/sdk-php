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
class GiftCardPurchase extends DataObject
{
    // Properties
    /**
     * @var AmountOfMoney
     */
    private $amountOfMoney;

    /**
     * @var int
     */
    private $numberOfGiftCards;

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
     * @return int
     */
    public function getNumberOfGiftCards()
    {
        return $this->numberOfGiftCards;
    }
    /**
     * @var int
     */
    public function setNumberOfGiftCards($value)
    {
        $this->numberOfGiftCards = $value;
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
        if ($this->numberOfGiftCards !== null) {
            $object->numberOfGiftCards = $this->numberOfGiftCards;
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
        if (property_exists($object, 'numberOfGiftCards')) {
            $this->numberOfGiftCards = $object->numberOfGiftCards;
        }
        return $this;
    }
}
