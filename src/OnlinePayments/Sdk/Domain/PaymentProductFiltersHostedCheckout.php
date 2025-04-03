<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFiltersHostedCheckout extends DataObject
{
    /**
     * @var PaymentProductFilter
     */
    public $exclude = null;

    /**
     * @var PaymentProductFilter
     */
    public $restrictTo = null;

    /**
     * @return PaymentProductFilter
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * @param PaymentProductFilter
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
     * @param PaymentProductFilter
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
        if (!is_null($this->exclude)) {
            $object->exclude = $this->exclude->toObject();
        }
        if (!is_null($this->restrictTo)) {
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
