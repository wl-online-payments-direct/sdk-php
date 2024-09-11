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
class RedirectPaymentProduct3203SpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $checkoutType;

    // Methods
    /**
     * @return string
     */
    public function getCheckoutType()
    {
        return $this->checkoutType;
    }
    /**
     * @var string
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
        if ($this->checkoutType !== null) {
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
