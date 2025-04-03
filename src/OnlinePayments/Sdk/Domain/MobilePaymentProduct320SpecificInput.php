<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentProduct320SpecificInput extends DataObject
{
    /**
     * @var GPayThreeDSecure
     */
    public $threeDSecure = null;

    /**
     * @return GPayThreeDSecure
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * @param GPayThreeDSecure
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
            $value = new GPayThreeDSecure();
            $this->threeDSecure = $value->fromObject($object->threeDSecure);
        }
        return $this;
    }
}
