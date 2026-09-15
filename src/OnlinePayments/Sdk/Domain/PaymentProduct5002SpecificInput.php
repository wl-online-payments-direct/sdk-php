<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5002SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $checkoutResponseSignature = null;

    /**
     * @var string|null
     */
    public ?string $creditCardBrand = null;

    /**
     * @return string|null
     */
    public function getCheckoutResponseSignature(): ?string
    {
        return $this->checkoutResponseSignature;
    }

    /**
     * @param string|null $value
     */
    public function setCheckoutResponseSignature(?string $value): void
    {
        $this->checkoutResponseSignature = $value;
    }

    /**
     * @return string|null
     */
    public function getCreditCardBrand(): ?string
    {
        return $this->creditCardBrand;
    }

    /**
     * @param string|null $value
     */
    public function setCreditCardBrand(?string $value): void
    {
        $this->creditCardBrand = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->checkoutResponseSignature)) {
            $object->checkoutResponseSignature = $this->checkoutResponseSignature;
        }
        if (!is_null($this->creditCardBrand)) {
            $object->creditCardBrand = $this->creditCardBrand;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct5002SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'checkoutResponseSignature')) {
            $this->checkoutResponseSignature = $object->checkoutResponseSignature;
        }
        if (property_exists($object, 'creditCardBrand')) {
            $this->creditCardBrand = $object->creditCardBrand;
        }
        return $this;
    }
}
