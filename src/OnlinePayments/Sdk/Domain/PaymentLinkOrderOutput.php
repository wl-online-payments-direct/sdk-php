<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentLinkOrderOutput extends DataObject
{
    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amount = null;

    /**
     * @var string|null
     */
    public ?string $merchantReference = null;

    /**
     * @var SurchargeForPaymentLink|null
     */
    public ?SurchargeForPaymentLink $surchargeSpecificOutput = null;

    /**
     * @return AmountOfMoney|null
     */
    public function getAmount(): ?AmountOfMoney
    {
        return $this->amount;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setAmount(?AmountOfMoney $value): void
    {
        $this->amount = $value;
    }

    /**
     * @param AmountOfMoney|null $value
     * @return $this
     */
    public function withAmount(?AmountOfMoney $value): static
    {
        $this->amount = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMerchantReference(): ?string
    {
        return $this->merchantReference;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantReference(?string $value): void
    {
        $this->merchantReference = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMerchantReference(?string $value): static
    {
        $this->merchantReference = $value;
        return $this;
    }

    /**
     * @return SurchargeForPaymentLink|null
     */
    public function getSurchargeSpecificOutput(): ?SurchargeForPaymentLink
    {
        return $this->surchargeSpecificOutput;
    }

    /**
     * @param SurchargeForPaymentLink|null $value
     */
    public function setSurchargeSpecificOutput(?SurchargeForPaymentLink $value): void
    {
        $this->surchargeSpecificOutput = $value;
    }

    /**
     * @param SurchargeForPaymentLink|null $value
     * @return $this
     */
    public function withSurchargeSpecificOutput(?SurchargeForPaymentLink $value): static
    {
        $this->surchargeSpecificOutput = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->amount !== null) {
            $object->amount = $this->amount->toObject();
        }
        if ($this->merchantReference !== null) {
            $object->merchantReference = $this->merchantReference;
        }
        if ($this->surchargeSpecificOutput !== null) {
            $object->surchargeSpecificOutput = $this->surchargeSpecificOutput->toObject();
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
        if (property_exists($object, 'amount')) {
            if (!is_object($object->amount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amount, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amount = $value->fromObject($object->amount);
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'surchargeSpecificOutput')) {
            if (!is_object($object->surchargeSpecificOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeSpecificOutput, true) . '\' is not an object');
            }
            $value = new SurchargeForPaymentLink();
            $this->surchargeSpecificOutput = $value->fromObject($object->surchargeSpecificOutput);
        }
        return $this;
    }
}
