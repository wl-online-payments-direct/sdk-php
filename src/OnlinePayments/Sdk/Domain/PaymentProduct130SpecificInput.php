<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct130SpecificInput extends DataObject
{
    /**
     * @var PaymentProduct130SpecificThreeDSecure
     */
    public $threeDSecure = null;

    /**
     * @return PaymentProduct130SpecificThreeDSecure
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * @param PaymentProduct130SpecificThreeDSecure
     */
    public function setThreeDSecure($value)
    {
        $this->threeDSecure = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->threeDSecure)) {
            $object->threeDSecure = $this->threeDSecure->toObject();
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
        if (property_exists($object, 'threeDSecure')) {
            if (!is_object($object->threeDSecure)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecure, true) . '\' is not an object');
            }
            $value = new PaymentProduct130SpecificThreeDSecure();
            $this->threeDSecure = $value->fromObject($object->threeDSecure);
        }
        return $this;
    }
}
