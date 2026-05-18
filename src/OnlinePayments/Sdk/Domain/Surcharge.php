<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Surcharge extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $netAmount = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var string|null
     */
    public ?string $result = null;

    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $surchargeAmount = null;

    /**
     * @var SurchargeRate|null
     */
    public ?SurchargeRate $surchargeRate = null;

    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $totalAmount = null;

    /**
     * @return AmountOfMoney|null
     */
    public function getNetAmount(): ?AmountOfMoney
    {
        return $this->netAmount;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setNetAmount(?AmountOfMoney $value): void
    {
        $this->netAmount = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @param string|null $value
     */
    public function setResult(?string $value): void
    {
        $this->result = $value;
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
     * @return SurchargeRate|null
     */
    public function getSurchargeRate(): ?SurchargeRate
    {
        return $this->surchargeRate;
    }

    /**
     * @param SurchargeRate|null $value
     */
    public function setSurchargeRate(?SurchargeRate $value): void
    {
        $this->surchargeRate = $value;
    }

    /**
     * @return AmountOfMoney|null
     */
    public function getTotalAmount(): ?AmountOfMoney
    {
        return $this->totalAmount;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setTotalAmount(?AmountOfMoney $value): void
    {
        $this->totalAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->netAmount)) {
            $object->netAmount = $this->netAmount->toObject();
        }
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->result)) {
            $object->result = $this->result;
        }
        if (!is_null($this->surchargeAmount)) {
            $object->surchargeAmount = $this->surchargeAmount->toObject();
        }
        if (!is_null($this->surchargeRate)) {
            $object->surchargeRate = $this->surchargeRate->toObject();
        }
        if (!is_null($this->totalAmount)) {
            $object->totalAmount = $this->totalAmount->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Surcharge
    {
        parent::fromObject($object);
        if (property_exists($object, 'netAmount')) {
            if (!is_object($object->netAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->netAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->netAmount = $value->fromObject($object->netAmount);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'result')) {
            $this->result = $object->result;
        }
        if (property_exists($object, 'surchargeAmount')) {
            if (!is_object($object->surchargeAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->surchargeAmount = $value->fromObject($object->surchargeAmount);
        }
        if (property_exists($object, 'surchargeRate')) {
            if (!is_object($object->surchargeRate)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeRate, true) . '\' is not an object');
            }
            $value = new SurchargeRate();
            $this->surchargeRate = $value->fromObject($object->surchargeRate);
        }
        if (property_exists($object, 'totalAmount')) {
            if (!is_object($object->totalAmount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->totalAmount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->totalAmount = $value->fromObject($object->totalAmount);
        }
        return $this;
    }
}
