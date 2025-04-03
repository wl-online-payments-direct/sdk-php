<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SurchargeForPaymentLink extends DataObject
{
    /**
     * @var string
     */
    public $surchargeMode = null;

    /**
     * @return string
     */
    public function getSurchargeMode()
    {
        return $this->surchargeMode;
    }

    /**
     * @param string
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
        if (!is_null($this->surchargeMode)) {
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
