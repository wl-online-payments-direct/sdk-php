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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->applePayRecurringPaymentRequest)) {
            $object->applePayRecurringPaymentRequest = $this->applePayRecurringPaymentRequest->toObject();
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
        return $this;
    }
}
