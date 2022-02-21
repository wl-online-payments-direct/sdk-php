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
class RefundPaymentProduct840CustomerAccount extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $customerAccountStatus;

    /**
     * @var string
     */
    private $customerAddressStatus;

    /**
     * @var string
     */
    private $payerId;

    // Methods
    /**
     * @return string
     */
    public function getCustomerAccountStatus()
    {
        return $this->customerAccountStatus;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->customerAccountStatus !== null) {
            $object->customerAccountStatus = $this->customerAccountStatus;
        }
        if ($this->customerAddressStatus !== null) {
            $object->customerAddressStatus = $this->customerAddressStatus;
        }
        if ($this->payerId !== null) {
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
