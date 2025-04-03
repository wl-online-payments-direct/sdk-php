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
     * @var string
     */
    public $recurringPaymentSequenceIndicator = null;

    /**
     * @return string
     */
    public function getRecurringPaymentSequenceIndicator()
    {
        return $this->recurringPaymentSequenceIndicator;
    }

    /**
     * @param string
     */
    public function setRecurringPaymentSequenceIndicator($value)
    {
        $this->recurringPaymentSequenceIndicator = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'recurringPaymentSequenceIndicator')) {
            $this->recurringPaymentSequenceIndicator = $object->recurringPaymentSequenceIndicator;
        }
        return $this;
    }
}
