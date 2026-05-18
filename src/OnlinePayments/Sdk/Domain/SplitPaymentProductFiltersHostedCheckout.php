<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SplitPaymentProductFiltersHostedCheckout extends DataObject
{
    /**
     * @var SplitPaymentProductFilter|null
     */
    public ?SplitPaymentProductFilter $exclude = null;

    /**
     * @var SplitPaymentProductFilter|null
     */
    public ?SplitPaymentProductFilter $restrictTo = null;

    /**
     * @return SplitPaymentProductFilter|null
     */
    public function getExclude(): ?SplitPaymentProductFilter
    {
        return $this->exclude;
    }

    /**
     * @param SplitPaymentProductFilter|null $value
     */
    public function setExclude(?SplitPaymentProductFilter $value): void
    {
        $this->exclude = $value;
    }

    /**
     * @return SplitPaymentProductFilter|null
     */
    public function getRestrictTo(): ?SplitPaymentProductFilter
    {
        return $this->restrictTo;
    }

    /**
     * @param SplitPaymentProductFilter|null $value
     */
    public function setRestrictTo(?SplitPaymentProductFilter $value): void
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
    public function fromObject(object $object): SplitPaymentProductFiltersHostedCheckout
    {
        parent::fromObject($object);
        if (property_exists($object, 'exclude')) {
            if (!is_object($object->exclude)) {
                throw new UnexpectedValueException('value \'' . print_r($object->exclude, true) . '\' is not an object');
            }
            $value = new SplitPaymentProductFilter();
            $this->exclude = $value->fromObject($object->exclude);
        }
        if (property_exists($object, 'restrictTo')) {
            if (!is_object($object->restrictTo)) {
                throw new UnexpectedValueException('value \'' . print_r($object->restrictTo, true) . '\' is not an object');
            }
            $value = new SplitPaymentProductFilter();
            $this->restrictTo = $value->fromObject($object->restrictTo);
        }
        return $this;
    }
}
