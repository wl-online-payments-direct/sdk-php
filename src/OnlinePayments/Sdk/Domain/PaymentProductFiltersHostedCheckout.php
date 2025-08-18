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
     * @var PaymentProductFilter|null
     */
    public ?PaymentProductFilter $exclude = null;

    /**
     * @var PaymentProductFilter|null
     */
    public ?PaymentProductFilter $restrictTo = null;

    /**
     * @return PaymentProductFilter|null
     */
    public function getExclude(): ?PaymentProductFilter
    {
        return $this->exclude;
    }

    /**
     * @param PaymentProductFilter|null $value
     */
    public function setExclude(?PaymentProductFilter $value): void
    {
        $this->exclude = $value;
    }

    /**
     * @return PaymentProductFilter|null
     */
    public function getRestrictTo(): ?PaymentProductFilter
    {
        return $this->restrictTo;
    }

    /**
     * @param PaymentProductFilter|null $value
     */
    public function setRestrictTo(?PaymentProductFilter $value): void
    {
        $this->restrictTo = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): PaymentProductFiltersHostedCheckout
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
