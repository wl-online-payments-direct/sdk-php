<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GiftCardPurchase extends DataObject
{
    /**
     * @var AmountOfMoney|null
    */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var int|null
    */
    public ?int $numberOfGiftCards = null;

    /**
     * @return AmountOfMoney|null
    */
    public function getAmountOfMoney(): ?AmountOfMoney
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney|null $value
    */
    public function setAmountOfMoney(?AmountOfMoney $value): void
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @param AmountOfMoney|null $value
     * @return GiftCardPurchase
    */
    public function withAmountOfMoney(?AmountOfMoney $value): GiftCardPurchase
    {
        $this->amountOfMoney = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getNumberOfGiftCards(): ?int
    {
        return $this->numberOfGiftCards;
    }

    /**
     * @param int|null $value
    */
    public function setNumberOfGiftCards(?int $value): void
    {
        $this->numberOfGiftCards = $value;
    }

    /**
     * @param int|null $value
     * @return GiftCardPurchase
    */
    public function withNumberOfGiftCards(?int $value): GiftCardPurchase
    {
        $this->numberOfGiftCards = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->numberOfGiftCards)) {
            $object->numberOfGiftCards = $this->numberOfGiftCards;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): GiftCardPurchase
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
