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
     * @param string|null $value
     * @return $this
     */
    public function withId(?string $value): static
    {
        $this->id = $value;
        return $this;
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
     * @param PaymentOutputSummary|null $value
     * @return $this
     */
    public function withPaymentOutput(?PaymentOutputSummary $value): static
    {
        $this->paymentOutput = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withStatus(?string $value): static
    {
        $this->status = $value;
        return $this;
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
     * @param PaymentStatusOutputSummary|null $value
     * @return $this
     */
    public function withStatusOutput(?PaymentStatusOutputSummary $value): static
    {
        $this->statusOutput = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->paymentOutput !== null) {
            $object->paymentOutput = $this->paymentOutput->toObject();
        }
        if ($this->status !== null) {
            $object->status = $this->status;
        }
        if ($this->statusOutput !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
