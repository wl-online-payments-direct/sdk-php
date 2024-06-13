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
class PaymentProduct840 extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $orderId;

    // Methods
    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * @var string
     */
    public function setOrderId($value)
    {
        $this->orderId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->orderId !== null) {
            $object->orderId = $this->orderId;
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
        if (property_exists($object, 'orderId')) {
            $this->orderId = $object->orderId;
        }
        return $this;
    }
}
