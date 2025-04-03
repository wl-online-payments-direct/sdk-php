<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatedPaymentOutput extends DataObject
{
    /**
     * @var PaymentResponse
     */
    public $payment = null;

    /**
     * @var string
     */
    public $paymentStatusCategory = null;

    /**
     * @return PaymentResponse
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param PaymentResponse
     */
    public function setPayment($value)
    {
        $this->payment = $value;
    }

    /**
     * @return string
     */
    public function getPaymentStatusCategory()
    {
        return $this->paymentStatusCategory;
    }

    /**
     * @param string
     */
    public function setPaymentStatusCategory($value)
    {
        $this->paymentStatusCategory = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->payment)) {
            $object->payment = $this->payment->toObject();
        }
        if (!is_null($this->paymentStatusCategory)) {
            $object->paymentStatusCategory = $this->paymentStatusCategory;
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
        if (property_exists($object, 'payment')) {
            if (!is_object($object->payment)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payment, true) . '\' is not an object');
            }
            $value = new PaymentResponse();
            $this->payment = $value->fromObject($object->payment);
        }
        if (property_exists($object, 'paymentStatusCategory')) {
            $this->paymentStatusCategory = $object->paymentStatusCategory;
        }
        return $this;
    }
}
