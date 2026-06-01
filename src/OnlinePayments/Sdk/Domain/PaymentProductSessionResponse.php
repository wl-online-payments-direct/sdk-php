<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductSessionResponse extends DataObject
{
    /**
     * @var PaymentProductSession302SpecificOutput|null
     */
    public ?PaymentProductSession302SpecificOutput $paymentProductSession302SpecificOutput = null;

    /**
     * @return PaymentProductSession302SpecificOutput|null
     */
    public function getPaymentProductSession302SpecificOutput(): ?PaymentProductSession302SpecificOutput
    {
        return $this->paymentProductSession302SpecificOutput;
    }

    /**
     * @param PaymentProductSession302SpecificOutput|null $value
     */
    public function setPaymentProductSession302SpecificOutput(?PaymentProductSession302SpecificOutput $value): void
    {
        $this->paymentProductSession302SpecificOutput = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProductSession302SpecificOutput)) {
            $object->paymentProductSession302SpecificOutput = $this->paymentProductSession302SpecificOutput->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductSessionResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentProductSession302SpecificOutput')) {
            if (!is_object($object->paymentProductSession302SpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductSession302SpecificOutput, true) . '\' is not an object');
            }
            $value = new PaymentProductSession302SpecificOutput();
            $this->paymentProductSession302SpecificOutput = $value->fromObject($object->paymentProductSession302SpecificOutput);
        }
        return $this;
    }
}
