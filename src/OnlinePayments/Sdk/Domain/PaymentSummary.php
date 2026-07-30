<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentSummary extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var PaymentOutputSummary|null
     */
    public ?PaymentOutputSummary $paymentOutput = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var PaymentStatusOutputSummary|null
     */
    public ?PaymentStatusOutputSummary $statusOutput = null;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @return PaymentOutputSummary|null
     */
    public function getPaymentOutput(): ?PaymentOutputSummary
    {
        return $this->paymentOutput;
    }

    /**
     * @param PaymentOutputSummary|null $value
     */
    public function setPaymentOutput(?PaymentOutputSummary $value): void
    {
        $this->paymentOutput = $value;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $value
     */
    public function setStatus(?string $value): void
    {
        $this->status = $value;
    }

    /**
     * @return PaymentStatusOutputSummary|null
     */
    public function getStatusOutput(): ?PaymentStatusOutputSummary
    {
        return $this->statusOutput;
    }

    /**
     * @param PaymentStatusOutputSummary|null $value
     */
    public function setStatusOutput(?PaymentStatusOutputSummary $value): void
    {
        $this->statusOutput = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->paymentOutput)) {
            $object->paymentOutput = $this->paymentOutput->toObject();
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->statusOutput)) {
            $object->statusOutput = $this->statusOutput->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentSummary
    {
        parent::fromObject($object);
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'paymentOutput')) {
            if (!is_object($object->paymentOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentOutput, true) . '\' is not an object');
            }
            $value = new PaymentOutputSummary();
            $this->paymentOutput = $value->fromObject($object->paymentOutput);
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'statusOutput')) {
            if (!is_object($object->statusOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->statusOutput, true) . '\' is not an object');
            }
            $value = new PaymentStatusOutputSummary();
            $this->statusOutput = $value->fromObject($object->statusOutput);
        }
        return $this;
    }
}
