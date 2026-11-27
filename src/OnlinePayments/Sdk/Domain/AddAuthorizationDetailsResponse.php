<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AddAuthorizationDetailsResponse extends DataObject
{
    /**
     * @var PaymentResponse|null
     */
    public ?PaymentResponse $payment = null;

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
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->payment !== null) {
            $object->payment = $this->payment->toObject();
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
        return $this;
    }
}
