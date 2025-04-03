<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OmnichannelPayoutSpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $paymentId = null;

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string
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
        if (!is_null($this->paymentId)) {
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
