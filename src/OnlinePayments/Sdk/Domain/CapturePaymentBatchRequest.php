<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CapturePaymentBatchRequest extends DataObject
{
    /**
     * @var CapturePaymentRequest|null
    */
    public ?CapturePaymentRequest $capture = null;

    /**
     * @var string|null
    */
    public ?string $paymentId = null;

    /**
     * @return CapturePaymentRequest|null
    */
    public function getCapture(): ?CapturePaymentRequest
    {
        return $this->capture;
    }

    /**
     * @param CapturePaymentRequest|null $value
    */
    public function setCapture(?CapturePaymentRequest $value): void
    {
        $this->capture = $value;
    }

    /**
     * @param CapturePaymentRequest|null $value
     * @return CapturePaymentBatchRequest
    */
    public function withCapture(?CapturePaymentRequest $value): CapturePaymentBatchRequest
    {
        $this->capture = $value;
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
     * @return CapturePaymentBatchRequest
    */
    public function withPaymentId(?string $value): CapturePaymentBatchRequest
    {
        $this->paymentId = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->capture)) {
            $object->capture = $this->capture->toObject();
        }
        if (!is_null($this->paymentId)) {
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
    public function fromObject(object $object): CapturePaymentBatchRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'capture')) {
            if (!is_object($object->capture)) {
                throw new UnexpectedValueException('value \'' . print_r($object->capture, true) . '\' is not an object');
            }
            $value = new CapturePaymentRequest();
            $this->capture = $value->fromObject($object->capture);
        }
        if (property_exists($object, 'paymentId')) {
            $this->paymentId = $object->paymentId;
        }
        return $this;
    }
}
