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
class CreateMandateRequest extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $alias;

    /**
     * @var MandateCustomer
     */
    private $customer;

    /**
     * @var string
     */
    private $customerReference;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $recurrenceType;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var string
     */
    private $signatureType;

    /**
     * @var string
     */
    private $uniqueMandateReference;

    // Methods
    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }
    /**
     * @var string
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
     * @var MandateCustomer
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->alias !== null) {
            $object->alias = $this->alias;
        }
        if ($this->customer !== null) {
            $object->customer = $this->customer->toObject();
        }
        if ($this->customerReference !== null) {
            $object->customerReference = $this->customerReference;
        }
        if ($this->language !== null) {
            $object->language = $this->language;
        }
        if ($this->recurrenceType !== null) {
            $object->recurrenceType = $this->recurrenceType;
        }
        if ($this->returnUrl !== null) {
            $object->returnUrl = $this->returnUrl;
        }
        if ($this->signatureType !== null) {
            $object->signatureType = $this->signatureType;
        }
        if ($this->uniqueMandateReference !== null) {
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
