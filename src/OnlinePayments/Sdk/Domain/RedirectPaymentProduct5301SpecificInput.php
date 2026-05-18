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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentMethodType)) {
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
    public function fromObject(object $object): RedirectPaymentProduct5301SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentMethodType')) {
            $this->paymentMethodType = $object->paymentMethodType;
        }
        return $this;
    }
}
