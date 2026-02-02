<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundRedirectPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var RefundRedirectPaymentProduct900SpecificInput|null
     */
    public ?RefundRedirectPaymentProduct900SpecificInput $refundRedirectPaymentProduct900SpecificInput = null;

    /**
     * @return RefundRedirectPaymentProduct900SpecificInput|null
     */
    public function getRefundRedirectPaymentProduct900SpecificInput(): ?RefundRedirectPaymentProduct900SpecificInput
    {
        return $this->refundRedirectPaymentProduct900SpecificInput;
    }

    /**
     * @param RefundRedirectPaymentProduct900SpecificInput|null $value
     */
    public function setRefundRedirectPaymentProduct900SpecificInput(?RefundRedirectPaymentProduct900SpecificInput $value): void
    {
        $this->refundRedirectPaymentProduct900SpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->refundRedirectPaymentProduct900SpecificInput)) {
            $object->refundRedirectPaymentProduct900SpecificInput = $this->refundRedirectPaymentProduct900SpecificInput->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RefundRedirectPaymentMethodSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'refundRedirectPaymentProduct900SpecificInput')) {
            if (!is_object($object->refundRedirectPaymentProduct900SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->refundRedirectPaymentProduct900SpecificInput, true) . '\' is not an object');
            }
            $value = new RefundRedirectPaymentProduct900SpecificInput();
            $this->refundRedirectPaymentProduct900SpecificInput = $value->fromObject($object->refundRedirectPaymentProduct900SpecificInput);
        }
        return $this;
    }
}
