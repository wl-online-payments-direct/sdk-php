<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5500SpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $entityId = null;

    /**
     * @var string
     */
    public $paymentEndDate = null;

    /**
     * @var string
     */
    public $paymentReference = null;

    /**
     * @var string
     */
    public $paymentStartDate = null;

    /**
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param string
     */
    public function setEntityId($value)
    {
        $this->entityId = $value;
    }

    /**
     * @return string
     */
    public function getPaymentEndDate()
    {
        return $this->paymentEndDate;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
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
        if (!is_null($this->entityId)) {
            $object->entityId = $this->entityId;
        }
        if (!is_null($this->paymentEndDate)) {
            $object->paymentEndDate = $this->paymentEndDate;
        }
        if (!is_null($this->paymentReference)) {
            $object->paymentReference = $this->paymentReference;
        }
        if (!is_null($this->paymentStartDate)) {
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
        if (property_exists($object, 'entityId')) {
            $this->entityId = $object->entityId;
        }
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
