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
class CreatedPaymentOutput extends DataObject
{
    // Properties
    /**
     * @var PaymentResponse
     */
    private $payment;

    /**
     * @var string
     */
    private $paymentStatusCategory;

    // Methods
    /**
     * @return PaymentResponse
     */
    public function getPayment()
    {
        return $this->payment;
    }
    /**
     * @var PaymentResponse
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
     * @var string
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
        if ($this->payment !== null) {
            $object->payment = $this->payment->toObject();
        }
        if ($this->paymentStatusCategory !== null) {
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
