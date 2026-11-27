<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5404 extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $appSwitchLink = null;

    /**
     * @var string|null
     */
    public ?string $qrCodeUrl = null;

    /**
     * @return string|null
     */
    public function getAppSwitchLink(): ?string
    {
        return $this->appSwitchLink;
    }

    /**
     * @param string|null $value
     */
    public function setAppSwitchLink(?string $value): void
    {
        $this->appSwitchLink = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAppSwitchLink(?string $value): static
    {
        $this->appSwitchLink = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQrCodeUrl(): ?string
    {
        return $this->qrCodeUrl;
    }

    /**
     * @param string|null $value
     */
    public function setQrCodeUrl(?string $value): void
    {
        $this->qrCodeUrl = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withQrCodeUrl(?string $value): static
    {
        $this->qrCodeUrl = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->appSwitchLink !== null) {
            $object->appSwitchLink = $this->appSwitchLink;
        }
        if ($this->qrCodeUrl !== null) {
            $object->qrCodeUrl = $this->qrCodeUrl;
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
        if (property_exists($object, 'appSwitchLink')) {
            $this->appSwitchLink = $object->appSwitchLink;
        }
        if (property_exists($object, 'qrCodeUrl')) {
            $this->qrCodeUrl = $object->qrCodeUrl;
        }
        return $this;
    }
}
