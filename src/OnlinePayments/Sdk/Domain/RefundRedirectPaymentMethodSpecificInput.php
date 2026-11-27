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
     * @param RefundRedirectPaymentProduct900SpecificInput|null $value
     * @return $this
     */
    public function withRefundRedirectPaymentProduct900SpecificInput(?RefundRedirectPaymentProduct900SpecificInput $value): static
    {
        $this->refundRedirectPaymentProduct900SpecificInput = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->refundRedirectPaymentProduct900SpecificInput !== null) {
            $object->refundRedirectPaymentProduct900SpecificInput = $this->refundRedirectPaymentProduct900SpecificInput->toObject();
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
