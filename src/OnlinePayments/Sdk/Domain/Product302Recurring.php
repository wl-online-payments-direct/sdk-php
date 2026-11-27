<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Product302Recurring extends DataObject
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
     * @return $this
     */
    public function withRecurringPaymentSequenceIndicator(?string $value): static
    {
        $this->recurringPaymentSequenceIndicator = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->recurringPaymentSequenceIndicator !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'recurringPaymentSequenceIndicator')) {
            $this->recurringPaymentSequenceIndicator = $object->recurringPaymentSequenceIndicator;
        }
        return $this;
    }
}
