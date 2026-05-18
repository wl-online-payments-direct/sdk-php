<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RefundPaymentBatchRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @var RefundRequest|null
     */
    public ?RefundRequest $refund = null;

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentId(?string $value): void
    {
        $this->paymentId = $value;
    }

    /**
     * @return RefundRequest|null
     */
    public function getRefund(): ?RefundRequest
    {
        return $this->refund;
    }

    /**
     * @param RefundRequest|null $value
     */
    public function setRefund(?RefundRequest $value): void
    {
        $this->refund = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentId)) {
            $object->paymentId = $this->paymentId;
        }
        if (!is_null($this->refund)) {
            $object->refund = $this->refund->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RefundPaymentBatchRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        if (property_exists($object, 'refund')) {
            if (!is_object($object->refund)) {
                throw new UnexpectedValueException('value \'' . print_r($object->refund, true) . '\' is not an object');
            }
            $value = new RefundRequest();
            $this->refund = $value->fromObject($object->refund);
        }
        return $this;
    }
}
