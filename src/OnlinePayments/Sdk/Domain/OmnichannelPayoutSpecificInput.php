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
class OmnichannelPayoutSpecificInput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $paymentId;

    // Methods
    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }
    /**
     * @var string
     */
    public function setPaymentId($value)
    {
        $this->paymentId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->paymentId !== null) {
            $object->paymentId = $this->paymentId;
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
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        return $this;
    }
}
