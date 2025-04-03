<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct771SpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $mandateReference = null;

    /**
     * @return string
     */
    public function getMandateReference()
    {
        return $this->mandateReference;
    }

    /**
     * @param string
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
        if (!is_null($this->mandateReference)) {
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
