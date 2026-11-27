<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CancelPaymentBatchRequest extends DataObject
{
    /**
     * @var CancelPaymentRequest|null
     */
    public ?CancelPaymentRequest $cancel = null;

    /**
     * @var string|null
     */
    public ?string $paymentId = null;

    /**
     * @return CancelPaymentRequest|null
     */
    public function getCancel(): ?CancelPaymentRequest
    {
        return $this->cancel;
    }

    /**
     * @param CancelPaymentRequest|null $value
     */
    public function setCancel(?CancelPaymentRequest $value): void
    {
        $this->cancel = $value;
    }

    /**
     * @param CancelPaymentRequest|null $value
     * @return $this
     */
    public function withCancel(?CancelPaymentRequest $value): static
    {
        $this->cancel = $value;
        return $this;
    }

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
     * @param string|null $value
     * @return $this
     */
    public function withPaymentId(?string $value): static
    {
        $this->paymentId = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->cancel !== null) {
            $object->cancel = $this->cancel->toObject();
        }
        if ($this->paymentId !== null) {
            $object->paymentId = $this->paymentId;
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
        if (property_exists($object, 'cancel')) {
            if (!is_object($object->cancel)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cancel, true) . '\' is not an object');
            }
            $value = new CancelPaymentRequest();
            $this->cancel = $value->fromObject($object->cancel);
        }
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        return $this;
    }
}
