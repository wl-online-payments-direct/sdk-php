<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateMandateRequest extends DataObject
{
    /**
     * @var string
     */
    public $alias = null;

    /**
     * @var MandateCustomer
     */
    public $customer = null;

    /**
     * @var string
     */
    public $customerReference = null;

    /**
     * @var string
     */
    public $language = null;

    /**
     * @var string
     */
    public $recurrenceType = null;

    /**
     * @var string
     */
    public $returnUrl = null;

    /**
     * @var string
     */
    public $signatureType = null;

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
     * @return MandateCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param MandateCustomer
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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string
     */
    public function setLanguage($value)
    {
        $this->language = $value;
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
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string
     */
    public function setReturnUrl($value)
    {
        $this->returnUrl = $value;
    }

    /**
     * @return string
     */
    public function getSignatureType()
    {
        return $this->signatureType;
    }

    /**
     * @param string
     */
    public function setSignatureType($value)
    {
        $this->signatureType = $value;
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
        if (!is_null($this->language)) {
            $object->language = $this->language;
        }
        if (!is_null($this->recurrenceType)) {
            $object->recurrenceType = $this->recurrenceType;
        }
        if (!is_null($this->returnUrl)) {
            $object->returnUrl = $this->returnUrl;
        }
        if (!is_null($this->signatureType)) {
            $object->signatureType = $this->signatureType;
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
            $value = new MandateCustomer();
            $this->customer = $value->fromObject($object->customer);
        }
        if (property_exists($object, 'customerReference')) {
            $this->customerReference = $object->customerReference;
        }
        if (property_exists($object, 'language')) {
            $this->language = $object->language;
        }
        if (property_exists($object, 'recurrenceType')) {
            $this->recurrenceType = $object->recurrenceType;
        }
        if (property_exists($object, 'returnUrl')) {
            $this->returnUrl = $object->returnUrl;
        }
        if (property_exists($object, 'signatureType')) {
            $this->signatureType = $object->signatureType;
        }
        if (property_exists($object, 'uniqueMandateReference')) {
            $this->uniqueMandateReference = $object->uniqueMandateReference;
        }
        return $this;
    }
}
