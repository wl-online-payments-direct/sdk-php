<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardRecurrenceDetails extends DataObject
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardRecurrenceDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'recurringPaymentSequenceIndicator')) {
            $this->recurringPaymentSequenceIndicator = $object->recurringPaymentSequenceIndicator;
        }
        return $this;
    }
}
