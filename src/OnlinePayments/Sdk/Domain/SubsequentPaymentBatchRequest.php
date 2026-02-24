<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubsequentPaymentBatchRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @var SubsequentPaymentRequest|null
     */
    public ?SubsequentPaymentRequest $subsequent = null;

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
     * @return SubsequentPaymentRequest|null
     */
    public function getSubsequent(): ?SubsequentPaymentRequest
    {
        return $this->subsequent;
    }

    /**
     * @param SubsequentPaymentRequest|null $value
     */
    public function setSubsequent(?SubsequentPaymentRequest $value): void
    {
        $this->subsequent = $value;
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
        if (!is_null($this->subsequent)) {
            $object->subsequent = $this->subsequent->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubsequentPaymentBatchRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        if (property_exists($object, 'subsequent')) {
            if (!is_object($object->subsequent)) {
                throw new UnexpectedValueException('value \'' . print_r($object->subsequent, true) . '\' is not an object');
            }
            $value = new SubsequentPaymentRequest();
            $this->subsequent = $value->fromObject($object->subsequent);
        }
        return $this;
    }
}
