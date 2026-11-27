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
     * @param string|null $value
     * @return $this
     */
    public function withAmount(?string $value): static
    {
        $this->amount = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withLabel(?string $value): static
    {
        $this->label = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPaymentTiming(?string $value): static
    {
        $this->paymentTiming = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withRecurringPaymentEndDate(?string $value): static
    {
        $this->recurringPaymentEndDate = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withRecurringPaymentIntervalCount(?int $value): static
    {
        $this->recurringPaymentIntervalCount = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withRecurringPaymentIntervalUnit(?string $value): static
    {
        $this->recurringPaymentIntervalUnit = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withRecurringPaymentStartDate(?string $value): static
    {
        $this->recurringPaymentStartDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->amount !== null) {
            $object->amount = $this->amount;
        }
        if ($this->label !== null) {
            $object->label = $this->label;
        }
        if ($this->paymentTiming !== null) {
            $object->paymentTiming = $this->paymentTiming;
        }
        if ($this->recurringPaymentEndDate !== null) {
            $object->recurringPaymentEndDate = $this->recurringPaymentEndDate;
        }
        if ($this->recurringPaymentIntervalCount !== null) {
            $object->recurringPaymentIntervalCount = $this->recurringPaymentIntervalCount;
        }
        if ($this->recurringPaymentIntervalUnit !== null) {
            $object->recurringPaymentIntervalUnit = $this->recurringPaymentIntervalUnit;
        }
        if ($this->recurringPaymentStartDate !== null) {
            $object->recurringPaymentStartDate = $this->recurringPaymentStartDate;
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
