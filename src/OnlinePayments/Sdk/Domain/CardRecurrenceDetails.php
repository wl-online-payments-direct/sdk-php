<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardRecurrenceDetails extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $recurringPaymentSequenceIndicator;

    // Methods
    /**
     * @return string
     */
    public function getRecurringPaymentSequenceIndicator()
    {
        return $this->recurringPaymentSequenceIndicator;
    }
    /**
     * @var string
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
        if ($this->recurringPaymentSequenceIndicator !== null) {
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
