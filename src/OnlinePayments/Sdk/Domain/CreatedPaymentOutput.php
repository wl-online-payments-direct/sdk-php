<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatedPaymentOutput extends DataObject
{
    /**
     * @var PaymentResponse|null
     */
    public ?PaymentResponse $payment = null;

    /**
     * @var string|null
     */
    public ?string $paymentStatusCategory = null;

    /**
     * @return PaymentResponse|null
     */
    public function getPayment(): ?PaymentResponse
    {
        return $this->payment;
    }

    /**
     * @param PaymentResponse|null $value
     */
    public function setPayment(?PaymentResponse $value): void
    {
        $this->payment = $value;
    }

    /**
     * @return string|null
     */
    public function getPaymentStatusCategory(): ?string
    {
        return $this->paymentStatusCategory;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentStatusCategory(?string $value): void
    {
        $this->paymentStatusCategory = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->payment)) {
            $object->payment = $this->payment->toObject();
        }
        if (!is_null($this->paymentStatusCategory)) {
            $object->paymentStatusCategory = $this->paymentStatusCategory;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreatedPaymentOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'payment')) {
            if (!is_object($object->payment)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payment, true) . '\' is not an object');
            }
            $value = new PaymentResponse();
            $this->payment = $value->fromObject($object->payment);
        }
        if (property_exists($object, 'paymentStatusCategory')) {
            $this->paymentStatusCategory = $object->paymentStatusCategory;
        }
        return $this;
    }
}
