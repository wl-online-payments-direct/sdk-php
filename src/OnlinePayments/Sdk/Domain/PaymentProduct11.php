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
     * @return PaymentProduct11
    */
    public function withPaymentBIC(?string $value): PaymentProduct11
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
     * @return PaymentProduct11
    */
    public function withPaymentBeneficiary(?string $value): PaymentProduct11
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
     * @return PaymentProduct11
    */
    public function withPaymentIBAN(?string $value): PaymentProduct11
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
     * @return PaymentProduct11
    */
    public function withPaymentReference(?string $value): PaymentProduct11
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
     * @return PaymentProduct11
    */
    public function withQrCode(?string $value): PaymentProduct11
    {
        $this->qrCode = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->paymentBIC)) {
            $object->paymentBIC = $this->paymentBIC;
        }
        if (!is_null($this->paymentBeneficiary)) {
            $object->paymentBeneficiary = $this->paymentBeneficiary;
        }
        if (!is_null($this->paymentIBAN)) {
            $object->paymentIBAN = $this->paymentIBAN;
        }
        if (!is_null($this->paymentReference)) {
            $object->paymentReference = $this->paymentReference;
        }
        if (!is_null($this->qrCode)) {
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
    public function fromObject(object $object): PaymentProduct11
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
