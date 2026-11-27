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
     * @param string|null $value
     * @return $this
     */
    public function withCheckoutResponseSignature(?string $value): static
    {
        $this->checkoutResponseSignature = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withCreditCardBrand(?string $value): static
    {
        $this->creditCardBrand = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->checkoutResponseSignature !== null) {
            $object->checkoutResponseSignature = $this->checkoutResponseSignature;
        }
        if ($this->creditCardBrand !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
