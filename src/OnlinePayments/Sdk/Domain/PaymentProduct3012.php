<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3012 extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $qrCode = null;

    /**
     * @var string|null
    */
    public ?string $urlIntent = null;

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
     * @return PaymentProduct3012
    */
    public function withQrCode(?string $value): PaymentProduct3012
    {
        $this->qrCode = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getUrlIntent(): ?string
    {
        return $this->urlIntent;
    }

    /**
     * @param string|null $value
    */
    public function setUrlIntent(?string $value): void
    {
        $this->urlIntent = $value;
    }

    /**
     * @param string|null $value
     * @return PaymentProduct3012
    */
    public function withUrlIntent(?string $value): PaymentProduct3012
    {
        $this->urlIntent = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->qrCode)) {
            $object->qrCode = $this->qrCode;
        }
        if (!is_null($this->urlIntent)) {
            $object->urlIntent = $this->urlIntent;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct3012
    {
        parent::fromObject($object);
        if (property_exists($object, 'qrCode')) {
            $this->qrCode = $object->qrCode;
        }
        if (property_exists($object, 'urlIntent')) {
            $this->urlIntent = $object->urlIntent;
        }
        return $this;
    }
}
