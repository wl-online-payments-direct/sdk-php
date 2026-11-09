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
     * @var PaymentProduct5407AutoCapture|null
    */
    public ?PaymentProduct5407AutoCapture $paymentProduct5407AutoCapture = null;

    /**
     * @return PaymentProduct5407AutoCapture|null
    */
    public function getPaymentProduct5407AutoCapture(): ?PaymentProduct5407AutoCapture
    {
        return $this->paymentProduct5407AutoCapture;
    }

    /**
     * @param PaymentProduct5407AutoCapture|null $value
    */
    public function setPaymentProduct5407AutoCapture(?PaymentProduct5407AutoCapture $value): void
    {
        $this->paymentProduct5407AutoCapture = $value;
    }

    /**
     * @param PaymentProduct5407AutoCapture|null $value
     * @return RedirectPaymentProduct5407SpecificInput
    */
    public function withPaymentProduct5407AutoCapture(?PaymentProduct5407AutoCapture $value): RedirectPaymentProduct5407SpecificInput
    {
        $this->paymentProduct5407AutoCapture = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProduct5407AutoCapture)) {
            $object->paymentProduct5407AutoCapture = $this->paymentProduct5407AutoCapture->toObject();
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
        if (property_exists($object, 'paymentProduct5407AutoCapture')) {
            if (!is_object($object->paymentProduct5407AutoCapture)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct5407AutoCapture, true) . '\' is not an object');
            }
            $value = new PaymentProduct5407AutoCapture();
            $this->paymentProduct5407AutoCapture = $value->fromObject($object->paymentProduct5407AutoCapture);
        }
        return $this;
    }
}
