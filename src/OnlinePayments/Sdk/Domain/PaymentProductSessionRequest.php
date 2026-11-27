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
     * @param PaymentProductSession302SpecificInput|null $value
     * @return $this
     */
    public function withPaymentProductSession302SpecificInput(?PaymentProductSession302SpecificInput $value): static
    {
        $this->paymentProductSession302SpecificInput = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->paymentProductSession302SpecificInput !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
