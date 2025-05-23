<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentReferences extends DataObject
{
    /**
     * @var string
     */
    public $merchantParameters = null;

    /**
     * @var string
     */
    public $merchantReference = null;

    /**
     * @return string
     */
    public function getMerchantParameters()
    {
        return $this->merchantParameters;
    }

    /**
     * @param string
     */
    public function setMerchantParameters($value)
    {
        $this->merchantParameters = $value;
    }

    /**
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param string
     */
    public function setMerchantReference($value)
    {
        $this->merchantReference = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->merchantParameters)) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
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
        if (property_exists($object, 'merchantParameters')) {
            $this->merchantParameters = $object->merchantParameters;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        return $this;
    }
}
