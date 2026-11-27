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
     * @param string|null $value
     * @return $this
     */
    public function withPairingToken(?string $value): static
    {
        $this->pairingToken = $value;
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
        if ($this->pairingToken !== null) {
            $object->pairingToken = $this->pairingToken;
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
        if (property_exists($object, 'pairingToken')) {
            $this->pairingToken = $object->pairingToken;
        }
        if (property_exists($object, 'qrCode')) {
            $this->qrCode = $object->qrCode;
        }
        return $this;
    }
}
