<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFiltersHostedTokenization extends DataObject
{
    /**
     * @var PaymentProductFilterHostedTokenization|null
     */
    public ?PaymentProductFilterHostedTokenization $exclude = null;

    /**
     * @var PaymentProductFilterHostedTokenization|null
     */
    public ?PaymentProductFilterHostedTokenization $restrictTo = null;

    /**
     * @return PaymentProductFilterHostedTokenization|null
     */
    public function getExclude(): ?PaymentProductFilterHostedTokenization
    {
        return $this->exclude;
    }

    /**
     * @param PaymentProductFilterHostedTokenization|null $value
     */
    public function setExclude(?PaymentProductFilterHostedTokenization $value): void
    {
        $this->exclude = $value;
    }

    /**
     * @return PaymentProductFilterHostedTokenization|null
     */
    public function getRestrictTo(): ?PaymentProductFilterHostedTokenization
    {
        return $this->restrictTo;
    }

    /**
     * @param PaymentProductFilterHostedTokenization|null $value
     */
    public function setRestrictTo(?PaymentProductFilterHostedTokenization $value): void
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
    public function fromObject(object $object): PaymentProductFiltersHostedTokenization
    {
        parent::fromObject($object);
        if (property_exists($object, 'exclude')) {
            if (!is_object($object->exclude)) {
                throw new UnexpectedValueException('value \'' . print_r($object->exclude, true) . '\' is not an object');
            }
            $value = new PaymentProductFilterHostedTokenization();
            $this->exclude = $value->fromObject($object->exclude);
        }
        if (property_exists($object, 'restrictTo')) {
            if (!is_object($object->restrictTo)) {
                throw new UnexpectedValueException('value \'' . print_r($object->restrictTo, true) . '\' is not an object');
            }
            $value = new PaymentProductFilterHostedTokenization();
            $this->restrictTo = $value->fromObject($object->restrictTo);
        }
        return $this;
    }
}
