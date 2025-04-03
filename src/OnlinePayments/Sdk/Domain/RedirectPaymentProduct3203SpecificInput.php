<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3203SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $checkoutType = null;

    /**
     * @return string
     */
    public function getCheckoutType()
    {
        return $this->checkoutType;
    }

    /**
     * @param string
     */
    public function setCheckoutType($value)
    {
        $this->checkoutType = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->checkoutType)) {
            $object->checkoutType = $this->checkoutType;
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
        if (property_exists($object, 'checkoutType')) {
            $this->checkoutType = $object->checkoutType;
        }
        return $this;
    }
}
