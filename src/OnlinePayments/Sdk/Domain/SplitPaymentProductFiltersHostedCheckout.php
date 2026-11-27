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
     * @param SplitPaymentProductFilter|null $value
     * @return $this
     */
    public function withExclude(?SplitPaymentProductFilter $value): static
    {
        $this->exclude = $value;
        return $this;
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
     * @param SplitPaymentProductFilter|null $value
     * @return $this
     */
    public function withRestrictTo(?SplitPaymentProductFilter $value): static
    {
        $this->restrictTo = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
