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
class SurchargeForPaymentLink extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $surchargeMode;

    // Methods
    /**
     * @return string
     */
    public function getSurchargeMode()
    {
        return $this->surchargeMode;
    }
    /**
     * @var string
     */
    public function setSurchargeMode($value)
    {
        $this->surchargeMode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->surchargeMode !== null) {
            $object->surchargeMode = $this->surchargeMode;
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
        if (property_exists($object, 'surchargeMode')) {
            $this->surchargeMode = $object->surchargeMode;
        }
        return $this;
    }
}
