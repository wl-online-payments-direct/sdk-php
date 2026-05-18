<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeSpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $mode = null;

    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $surchargeAmount = null;

    /**
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * @param string|null $value
     */
    public function setMode(?string $value): void
    {
        $this->mode = $value;
    }

    /**
     * @return AmountOfMoney|null
     */
    public function getSurchargeAmount(): ?AmountOfMoney
    {
        return $this->surchargeAmount;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setSurchargeAmount(?AmountOfMoney $value): void
    {
        $this->surchargeAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->mode)) {
            $object->mode = $this->mode;
        }
        if (!is_null($this->surchargeAmount)) {
            $object->surchargeAmount = $this->surchargeAmount->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SurchargeSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'mode')) {
            $this->mode = $object->mode;
        }
        if (property_exists($object, 'surchargeAmount')) {
            if (!is_object($object->surchargeAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->surchargeAmount = $value->fromObject($object->surchargeAmount);
        }
        return $this;
    }
}
