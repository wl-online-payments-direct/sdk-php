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
     * @param PaymentProductFilter|null $value
     * @return $this
     */
    public function withExclude(?PaymentProductFilter $value): static
    {
        $this->exclude = $value;
        return $this;
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
     * @param PaymentProductFilter|null $value
     * @return $this
     */
    public function withRestrictTo(?PaymentProductFilter $value): static
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
