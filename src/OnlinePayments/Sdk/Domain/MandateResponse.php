<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MandateResponse extends DataObject
{
    /**
     * @var string
     */
    public $alias = null;

    /**
     * @var MandateCustomerResponse
     */
    public $customer = null;

    /**
     * @var string
     */
    public $customerReference = null;

    /**
     * @var string
     */
    public $mandatePdf = null;

    /**
     * @var string
     */
    public $recurrenceType = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $uniqueMandateReference = null;

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string
     */
    public function setAlias($value)
    {
        $this->alias = $value;
    }

    /**
     * @return MandateCustomerResponse
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param MandateCustomerResponse
     */
    public function setCustomer($value)
    {
        $this->customer = $value;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param string
     */
    public function setCustomerReference($value)
    {
        $this->customerReference = $value;
    }

    /**
     * @return string
     */
    public function getMandatePdf()
    {
        return $this->mandatePdf;
    }

    /**
     * @param string
     */
    public function setMandatePdf($value)
    {
        $this->mandatePdf = $value;
    }

    /**
     * @return string
     */
    public function getRecurrenceType()
    {
        return $this->recurrenceType;
    }

    /**
     * @param string
     */
    public function setRecurrenceType($value)
    {
        $this->recurrenceType = $value;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @return string
     */
    public function getUniqueMandateReference()
    {
        return $this->uniqueMandateReference;
    }

    /**
     * @param string
     */
    public function setUniqueMandateReference($value)
    {
        $this->uniqueMandateReference = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->alias)) {
            $object->alias = $this->alias;
        }
        if (!is_null($this->customer)) {
            $object->customer = $this->customer->toObject();
        }
        if (!is_null($this->customerReference)) {
            $object->customerReference = $this->customerReference;
        }
        if (!is_null($this->mandatePdf)) {
            $object->mandatePdf = $this->mandatePdf;
        }
        if (!is_null($this->recurrenceType)) {
            $object->recurrenceType = $this->recurrenceType;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->uniqueMandateReference)) {
            $object->uniqueMandateReference = $this->uniqueMandateReference;
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
        if (property_exists($object, 'alias')) {
            $this->alias = $object->alias;
        }
        if (property_exists($object, 'customer')) {
            if (!is_object($object->customer)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customer, true) . '\' is not an object');
            }
            $value = new MandateCustomerResponse();
            $this->customer = $value->fromObject($object->customer);
        }
        if (property_exists($object, 'customerReference')) {
            $this->customerReference = $object->customerReference;
        }
        if (property_exists($object, 'mandatePdf')) {
            $this->mandatePdf = $object->mandatePdf;
        }
        if (property_exists($object, 'recurrenceType')) {
            $this->recurrenceType = $object->recurrenceType;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'uniqueMandateReference')) {
            $this->uniqueMandateReference = $object->uniqueMandateReference;
        }
        return $this;
    }
}
