<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CalculateSurchargeRequest extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var CardSource|null
     */
    public ?CardSource $cardSource = null;

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
     * @return CardSource|null
     */
    public function getCardSource(): ?CardSource
    {
        return $this->cardSource;
    }

    /**
     * @param CardSource|null $value
     */
    public function setCardSource(?CardSource $value): void
    {
        $this->cardSource = $value;
    }

    /**
     * @param CardSource|null $value
     * @return $this
     */
    public function withCardSource(?CardSource $value): static
    {
        $this->cardSource = $value;
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
        if ($this->cardSource !== null) {
            $object->cardSource = $this->cardSource->toObject();
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
