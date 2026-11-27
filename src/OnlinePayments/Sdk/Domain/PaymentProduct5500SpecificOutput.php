<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5500SpecificOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $entityId = null;

    /**
     * @var string|null
     */
    public ?string $paymentEndDate = null;

    /**
     * @var string|null
     */
    public ?string $paymentReference = null;

    /**
     * @var string|null
     */
    public ?string $paymentStartDate = null;

    /**
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    /**
     * @param string|null $value
     */
    public function setEntityId(?string $value): void
    {
        $this->entityId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withEntityId(?string $value): static
    {
        $this->entityId = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentEndDate(): ?string
    {
        return $this->paymentEndDate;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentEndDate(?string $value): void
    {
        $this->paymentEndDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentEndDate(?string $value): static
    {
        $this->paymentEndDate = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentReference(): ?string
    {
        return $this->paymentReference;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentReference(?string $value): void
    {
        $this->paymentReference = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentReference(?string $value): static
    {
        $this->paymentReference = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentStartDate(): ?string
    {
        return $this->paymentStartDate;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentStartDate(?string $value): void
    {
        $this->paymentStartDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentStartDate(?string $value): static
    {
        $this->paymentStartDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->entityId !== null) {
            $object->entityId = $this->entityId;
        }
        if ($this->paymentEndDate !== null) {
            $object->paymentEndDate = $this->paymentEndDate;
        }
        if ($this->paymentReference !== null) {
            $object->paymentReference = $this->paymentReference;
        }
        if ($this->paymentStartDate !== null) {
            $object->paymentStartDate = $this->paymentStartDate;
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
        if (property_exists($object, 'entityId')) {
            $this->entityId = $object->entityId;
        }
        if (property_exists($object, 'paymentEndDate')) {
            $this->paymentEndDate = $object->paymentEndDate;
        }
        if (property_exists($object, 'paymentReference')) {
            $this->paymentReference = $object->paymentReference;
        }
        if (property_exists($object, 'paymentStartDate')) {
            $this->paymentStartDate = $object->paymentStartDate;
        }
        return $this;
    }
}
