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
class PaymentProduct771SpecificOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $mandateReference;

    // Methods
    /**
     * @return string
     */
    public function getMandateReference()
    {
        return $this->mandateReference;
    }
    /**
     * @var string
     */
    public function setMandateReference($value)
    {
        $this->mandateReference = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->mandateReference !== null) {
            $object->mandateReference = $this->mandateReference;
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
        if (property_exists($object, 'mandateReference')) {
            $this->mandateReference = $object->mandateReference;
        }
        return $this;
    }
}
