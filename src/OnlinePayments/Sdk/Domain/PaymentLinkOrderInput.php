<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 * @deprecated An object containing the details of the related payment input.  All properties in paymentLinkOrder are deprecated. Use corresponding values as noted below: | Property | Replacement | | - | - | | merchantReference | references/merchantReference | | amount | order/amountOfMoney | | surchargeSpecificInput | order/surchargeSpecificInput |
 */
class PaymentLinkOrderInput extends DataObject
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
    public ?SurchargeForPaymentLink $surchargeSpecificInput = null;

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
     * @return SurchargeForPaymentLink|null
     */
    public function getSurchargeSpecificInput(): ?SurchargeForPaymentLink
    {
        return $this->surchargeSpecificInput;
    }

    /**
     * @param SurchargeForPaymentLink|null $value
     */
    public function setSurchargeSpecificInput(?SurchargeForPaymentLink $value): void
    {
        $this->surchargeSpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->amount)) {
            $object->amount = $this->amount->toObject();
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->surchargeSpecificInput)) {
            $object->surchargeSpecificInput = $this->surchargeSpecificInput->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentLinkOrderInput
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
        if (property_exists($object, 'surchargeSpecificInput')) {
            if (!is_object($object->surchargeSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeSpecificInput, true) . '\' is not an object');
            }
            $value = new SurchargeForPaymentLink();
            $this->surchargeSpecificInput = $value->fromObject($object->surchargeSpecificInput);
        }
        return $this;
    }
}
