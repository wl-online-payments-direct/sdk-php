<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductSessionRequest extends DataObject
{
    /**
     * @var PaymentProductSession302SpecificInput|null
     */
    public ?PaymentProductSession302SpecificInput $paymentProductSession302SpecificInput = null;

    /**
     * @return PaymentProductSession302SpecificInput|null
     */
    public function getPaymentProductSession302SpecificInput(): ?PaymentProductSession302SpecificInput
    {
        return $this->paymentProductSession302SpecificInput;
    }

    /**
     * @param PaymentProductSession302SpecificInput|null $value
     */
    public function setPaymentProductSession302SpecificInput(?PaymentProductSession302SpecificInput $value): void
    {
        $this->paymentProductSession302SpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProductSession302SpecificInput)) {
            $object->paymentProductSession302SpecificInput = $this->paymentProductSession302SpecificInput->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductSessionRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentProductSession302SpecificInput')) {
            if (!is_object($object->paymentProductSession302SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductSession302SpecificInput, true) . '\' is not an object');
            }
            $value = new PaymentProductSession302SpecificInput();
            $this->paymentProductSession302SpecificInput = $value->fromObject($object->paymentProductSession302SpecificInput);
        }
        return $this;
    }
}
