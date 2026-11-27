<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5301SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $paymentMethodType = null;

    /**
     * @return string|null
     */
    public function getPaymentMethodType(): ?string
    {
        return $this->paymentMethodType;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentMethodType(?string $value): void
    {
        $this->paymentMethodType = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentMethodType(?string $value): static
    {
        $this->paymentMethodType = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->paymentMethodType !== null) {
            $object->paymentMethodType = $this->paymentMethodType;
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
        if (property_exists($object, 'paymentMethodType')) {
            $this->paymentMethodType = $object->paymentMethodType;
        }
        return $this;
    }
}
