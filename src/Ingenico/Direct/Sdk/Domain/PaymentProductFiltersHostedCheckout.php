<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class PaymentProductFiltersHostedCheckout extends DataObject
{
    // Properties
    /**
     * @var PaymentProductFilter
     */
    private $exclude;

    /**
     * @var PaymentProductFilter
     */
    private $restrictTo;

    // Methods
    /**
     * @return PaymentProductFilter
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    /**
     * @var PaymentProductFilter
     */
    public function setExclude($value)
    {
        $this->exclude = $value;
    }

    /**
     * @return PaymentProductFilter
     */
    public function getRestrictTo()
    {
        return $this->restrictTo;
    }
    /**
     * @var PaymentProductFilter
     */
    public function setRestrictTo($value)
    {
        $this->restrictTo = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->exclude !== null) {
            $object->exclude = $this->exclude->toObject();
        }
        if ($this->restrictTo !== null) {
            $object->restrictTo = $this->restrictTo->toObject();
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
        if (property_exists($object, 'exclude')) {
            if (!is_object($object->exclude)) {
                throw new UnexpectedValueException('value \'' . print_r($object->exclude, true) . '\' is not an object');
            }
            $value = new PaymentProductFilter();
            $this->exclude = $value->fromObject($object->exclude);
        }
        if (property_exists($object, 'restrictTo')) {
            if (!is_object($object->restrictTo)) {
                throw new UnexpectedValueException('value \'' . print_r($object->restrictTo, true) . '\' is not an object');
            }
            $value = new PaymentProductFilter();
            $this->restrictTo = $value->fromObject($object->restrictTo);
        }
        return $this;
    }
}
