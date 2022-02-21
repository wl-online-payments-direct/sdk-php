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
class FraudFields extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $blackListData;

    /**
     * @var string
     */
    private $customerIpAddress;

    // Methods
    /**
     * @return string
     */
    public function getBlackListData()
    {
        return $this->blackListData;
    }
    /**
     * @var string
     */
    public function setBlackListData($value)
    {
        $this->blackListData = $value;
    }

    /**
     * @return string
     */
    public function getCustomerIpAddress()
    {
        return $this->customerIpAddress;
    }
    /**
     * @var string
     */
    public function setCustomerIpAddress($value)
    {
        $this->customerIpAddress = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->blackListData !== null) {
            $object->blackListData = $this->blackListData;
        }
        if ($this->customerIpAddress !== null) {
            $object->customerIpAddress = $this->customerIpAddress;
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
        if (property_exists($object, 'blackListData')) {
            $this->blackListData = $object->blackListData;
        }
        if (property_exists($object, 'customerIpAddress')) {
            $this->customerIpAddress = $object->customerIpAddress;
        }
        return $this;
    }
}
