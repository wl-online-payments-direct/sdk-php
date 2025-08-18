<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ApplePayLineItem extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $amount = null;

    /**
     * @var string|null
     */
    public ?string $label = null;

    /**
     * @var string|null
     */
    public ?string $paymentTiming = null;

    /**
     * @var string|null
     */
    public ?string $recurringPaymentEndDate = null;

    /**
     * @var int|null
     */
    public ?int $recurringPaymentIntervalCount = null;

    /**
     * @var string|null
     */
    public ?string $recurringPaymentIntervalUnit = null;

    /**
     * @var string|null
     */
    public ?string $recurringPaymentStartDate = null;

    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string|null $value
     */
    public function setAmount(?string $value): void
    {
        $this->amount = $value;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $value
     */
    public function setLabel(?string $value): void
    {
        $this->label = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentTiming(): ?string
    {
        return $this->paymentTiming;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentTiming(?string $value): void
    {
        $this->paymentTiming = $value;
    }

    /**
     * @return string|null
     */
    public function getRecurringPaymentEndDate(): ?string
    {
        return $this->recurringPaymentEndDate;
    }

    /**
     * @param string|null $value
     */
    public function setRecurringPaymentEndDate(?string $value): void
    {
        $this->recurringPaymentEndDate = $value;
    }

    /**
     * @return int|null
     */
    public function getRecurringPaymentIntervalCount(): ?int
    {
        return $this->recurringPaymentIntervalCount;
    }

    /**
     * @param int|null $value
     */
    public function setRecurringPaymentIntervalCount(?int $value): void
    {
        $this->recurringPaymentIntervalCount = $value;
    }

    /**
     * @return string|null
     */
    public function getRecurringPaymentIntervalUnit(): ?string
    {
        return $this->recurringPaymentIntervalUnit;
    }

    /**
     * @param string|null $value
     */
    public function setRecurringPaymentIntervalUnit(?string $value): void
    {
        $this->recurringPaymentIntervalUnit = $value;
    }

    /**
     * @return string|null
     */
    public function getRecurringPaymentStartDate(): ?string
    {
        return $this->recurringPaymentStartDate;
    }

    /**
     * @param string|null $value
     */
    public function setRecurringPaymentStartDate(?string $value): void
    {
        $this->recurringPaymentStartDate = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount;
        }
        if (!is_null($this->label)) {
            $object->label = $this->label;
        }
        if (!is_null($this->paymentTiming)) {
            $object->paymentTiming = $this->paymentTiming;
        }
        if (!is_null($this->recurringPaymentEndDate)) {
            $object->recurringPaymentEndDate = $this->recurringPaymentEndDate;
        }
        if (!is_null($this->recurringPaymentIntervalCount)) {
            $object->recurringPaymentIntervalCount = $this->recurringPaymentIntervalCount;
        }
        if (!is_null($this->recurringPaymentIntervalUnit)) {
            $object->recurringPaymentIntervalUnit = $this->recurringPaymentIntervalUnit;
        }
        if (!is_null($this->recurringPaymentStartDate)) {
            $object->recurringPaymentStartDate = $this->recurringPaymentStartDate;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ApplePayLineItem
    {
        parent::fromObject($object);
        if (property_exists($object, 'amount')) {
            $this->amount = $object->amount;
        }
        if (property_exists($object, 'label')) {
            $this->label = $object->label;
        }
        if (property_exists($object, 'paymentTiming')) {
            $this->paymentTiming = $object->paymentTiming;
        }
        if (property_exists($object, 'recurringPaymentEndDate')) {
            $this->recurringPaymentEndDate = $object->recurringPaymentEndDate;
        }
        if (property_exists($object, 'recurringPaymentIntervalCount')) {
            $this->recurringPaymentIntervalCount = $object->recurringPaymentIntervalCount;
        }
        if (property_exists($object, 'recurringPaymentIntervalUnit')) {
            $this->recurringPaymentIntervalUnit = $object->recurringPaymentIntervalUnit;
        }
        if (property_exists($object, 'recurringPaymentStartDate')) {
            $this->recurringPaymentStartDate = $object->recurringPaymentStartDate;
        }
        return $this;
    }
}
