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
     * @return PaymentProduct5500SpecificOutput
    */
    public function withEntityId(?string $value): PaymentProduct5500SpecificOutput
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
     * @return PaymentProduct5500SpecificOutput
    */
    public function withPaymentEndDate(?string $value): PaymentProduct5500SpecificOutput
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
     * @return PaymentProduct5500SpecificOutput
    */
    public function withPaymentReference(?string $value): PaymentProduct5500SpecificOutput
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
     * @return PaymentProduct5500SpecificOutput
    */
    public function withPaymentStartDate(?string $value): PaymentProduct5500SpecificOutput
    {
        $this->paymentStartDate = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->entityId)) {
            $object->entityId = $this->entityId;
        }
        if (!is_null($this->paymentEndDate)) {
            $object->paymentEndDate = $this->paymentEndDate;
        }
        if (!is_null($this->paymentReference)) {
            $object->paymentReference = $this->paymentReference;
        }
        if (!is_null($this->paymentStartDate)) {
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
    public function fromObject(object $object): PaymentProduct5500SpecificOutput
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
