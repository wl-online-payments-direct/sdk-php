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
     * @var PaymentProduct3012
     */
    private $paymentProduct3012;

    /**
     * @var PaymentProduct5404
     */
    private $paymentProduct5404;

    /**
     * @var PaymentProduct5407
     */
    private $paymentProduct5407;

    /**
     * @var PaymentProduct840
     */
    private $paymentProduct840;

    // Methods
    /**
     * @return PaymentProduct3012
     */
    public function getPaymentProduct3012()
    {
        return $this->paymentProduct3012;
    }
    /**
     * @var PaymentProduct3012
     */
    public function setPaymentProduct3012($value)
    {
        $this->paymentProduct3012 = $value;
    }

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
     * @return PaymentProduct840
     */
    public function getPaymentProduct840()
    {
        return $this->paymentProduct840;
    }
    /**
     * @var PaymentProduct840
     */
    public function setPaymentProduct840($value)
    {
        $this->paymentProduct840 = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->paymentProduct3012 !== null) {
            $object->paymentProduct3012 = $this->paymentProduct3012->toObject();
        }
        if ($this->paymentProduct5404 !== null) {
            $object->paymentProduct5404 = $this->paymentProduct5404->toObject();
        }
        if ($this->paymentProduct5407 !== null) {
            $object->paymentProduct5407 = $this->paymentProduct5407->toObject();
        }
        if ($this->paymentProduct840 !== null) {
            $object->paymentProduct840 = $this->paymentProduct840->toObject();
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
        if (property_exists($object, 'paymentProduct3012')) {
            if (!is_object($object->paymentProduct3012)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3012, true) . '\' is not an object');
            }
            $value = new PaymentProduct3012();
            $this->paymentProduct3012 = $value->fromObject($object->paymentProduct3012);
        }
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
        if (property_exists($object, 'paymentProduct840')) {
            if (!is_object($object->paymentProduct840)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840, true) . '\' is not an object');
            }
            $value = new PaymentProduct840();
            $this->paymentProduct840 = $value->fromObject($object->paymentProduct840);
        }
        return $this;
    }
}
