<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentProduct320SpecificInput extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $isRecurring = null;

    /**
     * @var Product320Recurring|null
     */
    public ?Product320Recurring $recurring = null;

    /**
     * @var GPayThreeDSecure|null
     */
    public ?GPayThreeDSecure $threeDSecure = null;

    /**
     * @var bool|null
     */
    public ?bool $tokenize = null;

    /**
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }

    /**
     * @param bool|null $value
     */
    public function setIsRecurring(?bool $value): void
    {
        $this->isRecurring = $value;
    }

    /**
     * @return Product320Recurring|null
     */
    public function getRecurring(): ?Product320Recurring
    {
        return $this->recurring;
    }

    /**
     * @param Product320Recurring|null $value
     */
    public function setRecurring(?Product320Recurring $value): void
    {
        $this->recurring = $value;
    }

    /**
     * @return GPayThreeDSecure|null
     */
    public function getThreeDSecure(): ?GPayThreeDSecure
    {
        return $this->threeDSecure;
    }

    /**
     * @param GPayThreeDSecure|null $value
     */
    public function setThreeDSecure(?GPayThreeDSecure $value): void
    {
        $this->threeDSecure = $value;
    }

    /**
     * @return bool|null
     */
    public function getTokenize(): ?bool
    {
        return $this->tokenize;
    }

    /**
     * @param bool|null $value
     */
    public function setTokenize(?bool $value): void
    {
        $this->tokenize = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->isRecurring)) {
            $object->isRecurring = $this->isRecurring;
        }
        if (!is_null($this->recurring)) {
            $object->recurring = $this->recurring->toObject();
        }
        if (!is_null($this->threeDSecure)) {
            $object->threeDSecure = $this->threeDSecure->toObject();
        }
        if (!is_null($this->tokenize)) {
            $object->tokenize = $this->tokenize;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): MobilePaymentProduct320SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'isRecurring')) {
            $this->isRecurring = $object->isRecurring;
        }
        if (property_exists($object, 'recurring')) {
            if (!is_object($object->recurring)) {
                throw new UnexpectedValueException('value \'' . print_r($object->recurring, true) . '\' is not an object');
            }
            $value = new Product320Recurring();
            $this->recurring = $value->fromObject($object->recurring);
        }
        if (property_exists($object, 'threeDSecure')) {
            if (!is_object($object->threeDSecure)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecure, true) . '\' is not an object');
            }
            $value = new GPayThreeDSecure();
            $this->threeDSecure = $value->fromObject($object->threeDSecure);
        }
        if (property_exists($object, 'tokenize')) {
            $this->tokenize = $object->tokenize;
        }
        return $this;
    }
}
