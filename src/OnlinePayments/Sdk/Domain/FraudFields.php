<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class FraudFields extends DataObject
{
    /**
     * @var string
     */
    public $blackListData = null;

    /**
     * @var string
     * @deprecated Use order.customer.device.ipAddress instead.  The IP Address of the customer that is making the payment
     */
    public $customerIpAddress = null;

    /**
     * @var string[]
     */
    public $productCategories = null;

    /**
     * @return string
     */
    public function getBlackListData()
    {
        return $this->blackListData;
    }

    /**
     * @param string
     */
    public function setBlackListData($value)
    {
        $this->blackListData = $value;
    }

    /**
     * @return string
     * @deprecated Use order.customer.device.ipAddress instead.  The IP Address of the customer that is making the payment
     */
    public function getCustomerIpAddress()
    {
        return $this->customerIpAddress;
    }

    /**
     * @param string
     * @deprecated Use order.customer.device.ipAddress instead.  The IP Address of the customer that is making the payment
     */
    public function setCustomerIpAddress($value)
    {
        $this->customerIpAddress = $value;
    }

    /**
     * @return string[]
     */
    public function getProductCategories()
    {
        return $this->productCategories;
    }

    /**
     * @param string[]
     */
    public function setProductCategories($value)
    {
        $this->productCategories = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->blackListData)) {
            $object->blackListData = $this->blackListData;
        }
        if (!is_null($this->customerIpAddress)) {
            $object->customerIpAddress = $this->customerIpAddress;
        }
        if (!is_null($this->productCategories)) {
            $object->productCategories = [];
            foreach ($this->productCategories as $element) {
                if (!is_null($element)) {
                    $object->productCategories[] = $element;
                }
            }
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
        if (property_exists($object, 'productCategories')) {
            if (!is_array($object->productCategories) && !is_object($object->productCategories)) {
                throw new UnexpectedValueException('value \'' . print_r($object->productCategories, true) . '\' is not an array or object');
            }
            $this->productCategories = [];
            foreach ($object->productCategories as $element) {
                $this->productCategories[] = $element;
            }
        }
        return $this;
    }
}
