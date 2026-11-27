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
     * @return $this
     */
    public function withInstallmentPaymentSequenceIndicator(?string $value): static
    {
        $this->installmentPaymentSequenceIndicator = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->installmentPaymentSequenceIndicator !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'installmentPaymentSequenceIndicator')) {
            $this->installmentPaymentSequenceIndicator = $object->installmentPaymentSequenceIndicator;
        }
        return $this;
    }
}
