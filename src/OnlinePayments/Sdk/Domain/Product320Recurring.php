<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Product320Recurring extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $recurringPaymentSequenceIndicator = null;

    /**
     * @return string|null
    */
    public function getRecurringPaymentSequenceIndicator(): ?string
    {
        return $this->recurringPaymentSequenceIndicator;
    }

    /**
     * @param string|null $value
    */
    public function setRecurringPaymentSequenceIndicator(?string $value): void
    {
        $this->recurringPaymentSequenceIndicator = $value;
    }

    /**
     * @param string|null $value
     * @return Product320Recurring
    */
    public function withRecurringPaymentSequenceIndicator(?string $value): Product320Recurring
    {
        $this->recurringPaymentSequenceIndicator = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->recurringPaymentSequenceIndicator)) {
            $object->recurringPaymentSequenceIndicator = $this->recurringPaymentSequenceIndicator;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Product320Recurring
    {
        parent::fromObject($object);
        if (property_exists($object, 'recurringPaymentSequenceIndicator')) {
            $this->recurringPaymentSequenceIndicator = $object->recurringPaymentSequenceIndicator;
        }
        return $this;
    }
}
