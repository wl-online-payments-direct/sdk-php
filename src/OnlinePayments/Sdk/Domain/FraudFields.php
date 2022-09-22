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

    /**
     * @var string[]
     */
    private $productCategories;

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
     * @return string[]
     */
    public function getProductCategories()
    {
        return $this->productCategories;
    }
    /**
     * @var string[]
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
        if ($this->blackListData !== null) {
            $object->blackListData = $this->blackListData;
        }
        if ($this->customerIpAddress !== null) {
            $object->customerIpAddress = $this->customerIpAddress;
        }
        if ($this->productCategories !== null) {
            $object->productCategories = [];
            foreach ($this->productCategories as $element) {
                if ($element !== null) {
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
