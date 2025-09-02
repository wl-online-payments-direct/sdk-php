<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobilePaymentProduct302SpecificInput extends DataObject
{
    /**
     * @var ApplePayRecurringPaymentRequest|null
     */
    public ?ApplePayRecurringPaymentRequest $applePayRecurringPaymentRequest = null;

    /**
     * @var bool|null
     */
    public ?bool $isRecurring = null;

    /**
     * @var Product302Recurring|null
     */
    public ?Product302Recurring $recurring = null;

    /**
     * @var bool|null
     */
    public ?bool $tokenize = null;

    /**
     * @return ApplePayRecurringPaymentRequest|null
     */
    public function getApplePayRecurringPaymentRequest(): ?ApplePayRecurringPaymentRequest
    {
        return $this->applePayRecurringPaymentRequest;
    }

    /**
     * @param ApplePayRecurringPaymentRequest|null $value
     */
    public function setApplePayRecurringPaymentRequest(?ApplePayRecurringPaymentRequest $value): void
    {
        $this->applePayRecurringPaymentRequest = $value;
    }

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
     * @return Product302Recurring|null
     */
    public function getRecurring(): ?Product302Recurring
    {
        return $this->recurring;
    }

    /**
     * @param Product302Recurring|null $value
     */
    public function setRecurring(?Product302Recurring $value): void
    {
        $this->recurring = $value;
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
        if (!is_null($this->applePayRecurringPaymentRequest)) {
            $object->applePayRecurringPaymentRequest = $this->applePayRecurringPaymentRequest->toObject();
        }
        if (!is_null($this->isRecurring)) {
            $object->isRecurring = $this->isRecurring;
        }
        if (!is_null($this->recurring)) {
            $object->recurring = $this->recurring->toObject();
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
    public function fromObject(object $object): MobilePaymentProduct302SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'applePayRecurringPaymentRequest')) {
            if (!is_object($object->applePayRecurringPaymentRequest)) {
                throw new UnexpectedValueException('value \'' . print_r($object->applePayRecurringPaymentRequest, true) . '\' is not an object');
            }
            $value = new ApplePayRecurringPaymentRequest();
            $this->applePayRecurringPaymentRequest = $value->fromObject($object->applePayRecurringPaymentRequest);
        }
        if (property_exists($object, 'isRecurring')) {
            $this->isRecurring = $object->isRecurring;
        }
        if (property_exists($object, 'recurring')) {
            if (!is_object($object->recurring)) {
                throw new UnexpectedValueException('value \'' . print_r($object->recurring, true) . '\' is not an object');
            }
            $value = new Product302Recurring();
            $this->recurring = $value->fromObject($object->recurring);
        }
        if (property_exists($object, 'tokenize')) {
            $this->tokenize = $object->tokenize;
        }
        return $this;
    }
}
