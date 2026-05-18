<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PayoutOutput extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var string|null
     */
    public ?string $payoutReason = null;

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
     * @return string|null
     */
    public function getPayoutReason(): ?string
    {
        return $this->payoutReason;
    }

    /**
     * @param string|null $value
     */
    public function setPayoutReason(?string $value): void
    {
        $this->payoutReason = $value;
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
        if (!is_null($this->payoutReason)) {
            $object->payoutReason = $this->payoutReason;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PayoutOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'payoutReason')) {
            $this->payoutReason = $object->payoutReason;
        }
        return $this;
    }
}
