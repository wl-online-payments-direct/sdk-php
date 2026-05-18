<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5407SpecificInput extends DataObject
{
    /**
     * @var PaymentProduct5704AutoCapture|null
     */
    public ?PaymentProduct5704AutoCapture $paymentProduct5704AutoCapture = null;

    /**
     * @return PaymentProduct5704AutoCapture|null
     */
    public function getPaymentProduct5704AutoCapture(): ?PaymentProduct5704AutoCapture
    {
        return $this->paymentProduct5704AutoCapture;
    }

    /**
     * @param PaymentProduct5704AutoCapture|null $value
     */
    public function setPaymentProduct5704AutoCapture(?PaymentProduct5704AutoCapture $value): void
    {
        $this->paymentProduct5704AutoCapture = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProduct5704AutoCapture)) {
            $object->paymentProduct5704AutoCapture = $this->paymentProduct5704AutoCapture->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct5407SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentProduct5704AutoCapture')) {
            if (!is_object($object->paymentProduct5704AutoCapture)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5704AutoCapture, true) . '\' is not an object');
            }
            $value = new PaymentProduct5704AutoCapture();
            $this->paymentProduct5704AutoCapture = $value->fromObject($object->paymentProduct5704AutoCapture);
        }
        return $this;
    }
}
