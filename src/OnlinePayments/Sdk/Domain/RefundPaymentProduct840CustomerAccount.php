<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundPaymentProduct840CustomerAccount extends DataObject
{
    /**
     * @var string
     */
    public $customerAccountStatus = null;

    /**
     * @var string
     */
    public $customerAddressStatus = null;

    /**
     * @var string
     */
    public $payerId = null;

    /**
     * @return string
     */
    public function getCustomerAccountStatus()
    {
        return $this->customerAccountStatus;
    }

    /**
     * @param string
     */
    public function setCustomerAccountStatus($value)
    {
        $this->customerAccountStatus = $value;
    }

    /**
     * @return string
     */
    public function getCustomerAddressStatus()
    {
        return $this->customerAddressStatus;
    }

    /**
     * @param string
     */
    public function setCustomerAddressStatus($value)
    {
        $this->customerAddressStatus = $value;
    }

    /**
     * @return string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * @param string
     */
    public function setPayerId($value)
    {
        $this->payerId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->customerAccountStatus)) {
            $object->customerAccountStatus = $this->customerAccountStatus;
        }
        if (!is_null($this->customerAddressStatus)) {
            $object->customerAddressStatus = $this->customerAddressStatus;
        }
        if (!is_null($this->payerId)) {
            $object->payerId = $this->payerId;
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
        if (property_exists($object, 'customerAccountStatus')) {
            $this->customerAccountStatus = $object->customerAccountStatus;
        }
        if (property_exists($object, 'customerAddressStatus')) {
            $this->customerAddressStatus = $object->customerAddressStatus;
        }
        if (property_exists($object, 'payerId')) {
            $this->payerId = $object->payerId;
        }
        return $this;
    }
}
