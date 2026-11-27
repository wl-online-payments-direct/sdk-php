<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct11 extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $paymentBIC = null;

    /**
     * @var string|null
     */
    public ?string $paymentBeneficiary = null;

    /**
     * @var string|null
     */
    public ?string $paymentIBAN = null;

    /**
     * @var string|null
     */
    public ?string $paymentReference = null;

    /**
     * @var string|null
     */
    public ?string $qrCode = null;

    /**
     * @return string|null
     */
    public function getPaymentBIC(): ?string
    {
        return $this->paymentBIC;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentBIC(?string $value): void
    {
        $this->paymentBIC = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentBIC(?string $value): static
    {
        $this->paymentBIC = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentBeneficiary(): ?string
    {
        return $this->paymentBeneficiary;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentBeneficiary(?string $value): void
    {
        $this->paymentBeneficiary = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentBeneficiary(?string $value): static
    {
        $this->paymentBeneficiary = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentIBAN(): ?string
    {
        return $this->paymentIBAN;
    }

    /**
     * @param string|null $value
     */
    public function setPaymentIBAN(?string $value): void
    {
        $this->paymentIBAN = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPaymentIBAN(?string $value): static
    {
        $this->paymentIBAN = $value;
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
    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    /**
     * @param string|null $value
     */
    public function setQrCode(?string $value): void
    {
        $this->qrCode = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withQrCode(?string $value): static
    {
        $this->qrCode = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->paymentBIC !== null) {
            $object->paymentBIC = $this->paymentBIC;
        }
        if ($this->paymentBeneficiary !== null) {
            $object->paymentBeneficiary = $this->paymentBeneficiary;
        }
        if ($this->paymentIBAN !== null) {
            $object->paymentIBAN = $this->paymentIBAN;
        }
        if ($this->paymentReference !== null) {
            $object->paymentReference = $this->paymentReference;
        }
        if ($this->qrCode !== null) {
            $object->qrCode = $this->qrCode;
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
        if (property_exists($object, 'paymentBIC')) {
            $this->paymentBIC = $object->paymentBIC;
        }
        if (property_exists($object, 'paymentBeneficiary')) {
            $this->paymentBeneficiary = $object->paymentBeneficiary;
        }
        if (property_exists($object, 'paymentIBAN')) {
            $this->paymentIBAN = $object->paymentIBAN;
        }
        if (property_exists($object, 'paymentReference')) {
            $this->paymentReference = $object->paymentReference;
        }
        if (property_exists($object, 'qrCode')) {
            $this->qrCode = $object->qrCode;
        }
        return $this;
    }
}
