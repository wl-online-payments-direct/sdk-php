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
     * @param PaymentResponse|null $value
     * @return $this
     */
    public function withPayment(?PaymentResponse $value): static
    {
        $this->payment = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPaymentStatusCategory(?string $value): static
    {
        $this->paymentStatusCategory = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->payment !== null) {
            $object->payment = $this->payment->toObject();
        }
        if ($this->paymentStatusCategory !== null) {
            $object->paymentStatusCategory = $this->paymentStatusCategory;
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
