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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->refundReason)) {
            $object->refundReason = $this->refundReason;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RefundRedirectPaymentProduct900SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'refundReason')) {
            $this->refundReason = $object->refundReason;
        }
        return $this;
    }
}
