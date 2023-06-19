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
class ShowFormData extends DataObject
{
    // Properties
    /**
     * @var PaymentProduct5404
     */
    private $paymentProduct5404;

    /**
     * @var PaymentProduct5407
     */
    private $paymentProduct5407;

    // Methods
    /**
     * @return PaymentProduct5404
     */
    public function getPaymentProduct5404()
    {
        return $this->paymentProduct5404;
    }
    /**
     * @var PaymentProduct5404
     */
    public function setPaymentProduct5404($value)
    {
        $this->paymentProduct5404 = $value;
    }

    /**
     * @return PaymentProduct5407
     */
    public function getPaymentProduct5407()
    {
        return $this->paymentProduct5407;
    }
    /**
     * @var PaymentProduct5407
     */
    public function setPaymentProduct5407($value)
    {
        $this->paymentProduct5407 = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->paymentProduct5404 !== null) {
            $object->paymentProduct5404 = $this->paymentProduct5404->toObject();
        }
        if ($this->paymentProduct5407 !== null) {
            $object->paymentProduct5407 = $this->paymentProduct5407->toObject();
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
        if (property_exists($object, 'paymentProduct5404')) {
            if (!is_object($object->paymentProduct5404)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5404, true) . '\' is not an object');
            }
            $value = new PaymentProduct5404();
            $this->paymentProduct5404 = $value->fromObject($object->paymentProduct5404);
        }
        if (property_exists($object, 'paymentProduct5407')) {
            if (!is_object($object->paymentProduct5407)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5407, true) . '\' is not an object');
            }
            $value = new PaymentProduct5407();
            $this->paymentProduct5407 = $value->fromObject($object->paymentProduct5407);
        }
        return $this;
    }
}
