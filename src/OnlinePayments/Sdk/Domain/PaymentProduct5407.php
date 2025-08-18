<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5407 extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $pairingToken = null;

    /**
     * @var string|null
     */
    public ?string $qrCode = null;

    /**
     * @return string|null
     */
    public function getPairingToken(): ?string
    {
        return $this->pairingToken;
    }

    /**
     * @param string|null $value
     */
    public function setPairingToken(?string $value): void
    {
        $this->pairingToken = $value;
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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->pairingToken)) {
            $object->pairingToken = $this->pairingToken;
        }
        if (!is_null($this->qrCode)) {
            $object->qrCode = $this->qrCode;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct5407
    {
        parent::fromObject($object);
        if (property_exists($object, 'pairingToken')) {
            $this->pairingToken = $object->pairingToken;
        }
        if (property_exists($object, 'qrCode')) {
            $this->qrCode = $object->qrCode;
        }
        return $this;
    }
}
