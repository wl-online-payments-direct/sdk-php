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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->appSwitchLink)) {
            $object->appSwitchLink = $this->appSwitchLink;
        }
        if (!is_null($this->qrCodeUrl)) {
            $object->qrCodeUrl = $this->qrCodeUrl;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct5404
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
