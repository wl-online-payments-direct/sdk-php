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
class PaymentProduct5500SpecificOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $paymentEndDate;

    /**
     * @var string
     */
    private $paymentReference;

    /**
     * @var string
     */
    private $paymentStartDate;

    // Methods
    /**
     * @return string
     */
    public function getPaymentEndDate()
    {
        return $this->paymentEndDate;
    }
    /**
     * @var string
     */
    public function setPaymentEndDate($value)
    {
        $this->paymentEndDate = $value;
    }

    /**
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->paymentReference;
    }
    /**
     * @var string
     */
    public function setPaymentReference($value)
    {
        $this->paymentReference = $value;
    }

    /**
     * @return string
     */
    public function getPaymentStartDate()
    {
        return $this->paymentStartDate;
    }
    /**
     * @var string
     */
    public function setPaymentStartDate($value)
    {
        $this->paymentStartDate = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->paymentEndDate !== null) {
            $object->paymentEndDate = $this->paymentEndDate;
        }
        if ($this->paymentReference !== null) {
            $object->paymentReference = $this->paymentReference;
        }
        if ($this->paymentStartDate !== null) {
            $object->paymentStartDate = $this->paymentStartDate;
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
        if (property_exists($object, 'paymentEndDate')) {
            $this->paymentEndDate = $object->paymentEndDate;
        }
        if (property_exists($object, 'paymentReference')) {
            $this->paymentReference = $object->paymentReference;
        }
        if (property_exists($object, 'paymentStartDate')) {
            $this->paymentStartDate = $object->paymentStartDate;
        }
        return $this;
    }
}
