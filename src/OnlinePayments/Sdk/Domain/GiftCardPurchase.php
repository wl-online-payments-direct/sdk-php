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
     * @return $this
     */
    public function withAmountOfMoney(?AmountOfMoney $value): static
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
     * @return $this
     */
    public function withNumberOfGiftCards(?int $value): static
    {
        $this->numberOfGiftCards = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
