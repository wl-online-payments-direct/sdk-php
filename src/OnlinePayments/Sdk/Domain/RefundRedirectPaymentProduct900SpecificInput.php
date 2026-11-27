<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundRedirectPaymentProduct900SpecificInput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $refundReason = null;

    /**
     * @return string|null
     */
    public function getRefundReason(): ?string
    {
        return $this->refundReason;
    }

    /**
     * @param string|null $value
     */
    public function setRefundReason(?string $value): void
    {
        $this->refundReason = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withRefundReason(?string $value): static
    {
        $this->refundReason = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->refundReason !== null) {
            $object->refundReason = $this->refundReason;
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
        if (property_exists($object, 'refundReason')) {
            $this->refundReason = $object->refundReason;
        }
        return $this;
    }
}
