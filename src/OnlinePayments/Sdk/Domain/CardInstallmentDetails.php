<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardInstallmentDetails extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $installmentPaymentSequenceIndicator = null;

    /**
     * @return string|null
    */
    public function getInstallmentPaymentSequenceIndicator(): ?string
    {
        return $this->installmentPaymentSequenceIndicator;
    }

    /**
     * @param string|null $value
    */
    public function setInstallmentPaymentSequenceIndicator(?string $value): void
    {
        $this->installmentPaymentSequenceIndicator = $value;
    }

    /**
     * @param string|null $value
     * @return CardInstallmentDetails
    */
    public function withInstallmentPaymentSequenceIndicator(?string $value): CardInstallmentDetails
    {
        $this->installmentPaymentSequenceIndicator = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->installmentPaymentSequenceIndicator)) {
            $object->installmentPaymentSequenceIndicator = $this->installmentPaymentSequenceIndicator;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardInstallmentDetails
    {
        parent::fromObject($object);
        if (property_exists($object, 'installmentPaymentSequenceIndicator')) {
            $this->installmentPaymentSequenceIndicator = $object->installmentPaymentSequenceIndicator;
        }
        return $this;
    }
}
