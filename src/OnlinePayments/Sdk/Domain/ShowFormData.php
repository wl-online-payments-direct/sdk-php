<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShowFormData extends DataObject
{
    /**
     * @var PaymentProduct3012|null
     */
    public ?PaymentProduct3012 $paymentProduct3012 = null;

    /**
     * @var PaymentProduct5001|null
     */
    public ?PaymentProduct5001 $paymentProduct5001 = null;

    /**
     * @var PaymentProduct5404|null
     */
    public ?PaymentProduct5404 $paymentProduct5404 = null;

    /**
     * @var PaymentProduct5407|null
     */
    public ?PaymentProduct5407 $paymentProduct5407 = null;

    /**
     * @return PaymentProduct3012|null
     */
    public function getPaymentProduct3012(): ?PaymentProduct3012
    {
        return $this->paymentProduct3012;
    }

    /**
     * @param PaymentProduct3012|null $value
     */
    public function setPaymentProduct3012(?PaymentProduct3012 $value): void
    {
        $this->paymentProduct3012 = $value;
    }

    /**
     * @return PaymentProduct5001|null
     */
    public function getPaymentProduct5001(): ?PaymentProduct5001
    {
        return $this->paymentProduct5001;
    }

    /**
     * @param PaymentProduct5001|null $value
     */
    public function setPaymentProduct5001(?PaymentProduct5001 $value): void
    {
        $this->paymentProduct5001 = $value;
    }

    /**
     * @return PaymentProduct5404|null
     */
    public function getPaymentProduct5404(): ?PaymentProduct5404
    {
        return $this->paymentProduct5404;
    }

    /**
     * @param PaymentProduct5404|null $value
     */
    public function setPaymentProduct5404(?PaymentProduct5404 $value): void
    {
        $this->paymentProduct5404 = $value;
    }

    /**
     * @return PaymentProduct5407|null
     */
    public function getPaymentProduct5407(): ?PaymentProduct5407
    {
        return $this->paymentProduct5407;
    }

    /**
     * @param PaymentProduct5407|null $value
     */
    public function setPaymentProduct5407(?PaymentProduct5407 $value): void
    {
        $this->paymentProduct5407 = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProduct3012)) {
            $object->paymentProduct3012 = $this->paymentProduct3012->toObject();
        }
        if (!is_null($this->paymentProduct5001)) {
            $object->paymentProduct5001 = $this->paymentProduct5001->toObject();
        }
        if (!is_null($this->paymentProduct5404)) {
            $object->paymentProduct5404 = $this->paymentProduct5404->toObject();
        }
        if (!is_null($this->paymentProduct5407)) {
            $object->paymentProduct5407 = $this->paymentProduct5407->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ShowFormData
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentProduct3012')) {
            if (!is_object($object->paymentProduct3012)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct3012, true) . '\' is not an object');
            }
            $value = new PaymentProduct3012();
            $this->paymentProduct3012 = $value->fromObject($object->paymentProduct3012);
        }
        if (property_exists($object, 'paymentProduct5001')) {
            if (!is_object($object->paymentProduct5001)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5001, true) . '\' is not an object');
            }
            $value = new PaymentProduct5001();
            $this->paymentProduct5001 = $value->fromObject($object->paymentProduct5001);
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
        return $this;
    }
}
