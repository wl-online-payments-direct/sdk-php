<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5412 extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $appUrl = null;

    /**
     * @var string|null
     */
    public ?string $pollingUrl = null;

    /**
     * @var string|null
     */
    public ?string $qrCode = null;

    /**
     * @return string|null
     */
    public function getAppUrl(): ?string
    {
        return $this->appUrl;
    }

    /**
     * @param string|null $value
     */
    public function setAppUrl(?string $value): void
    {
        $this->appUrl = $value;
    }

    /**
     * @return string|null
     */
    public function getPollingUrl(): ?string
    {
        return $this->pollingUrl;
    }

    /**
     * @param string|null $value
     */
    public function setPollingUrl(?string $value): void
    {
        $this->pollingUrl = $value;
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
        if (!is_null($this->appUrl)) {
            $object->appUrl = $this->appUrl;
        }
        if (!is_null($this->pollingUrl)) {
            $object->pollingUrl = $this->pollingUrl;
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
    public function fromObject(object $object): PaymentProduct5412
    {
        parent::fromObject($object);
        if (property_exists($object, 'appUrl')) {
            $this->appUrl = $object->appUrl;
        }
        if (property_exists($object, 'pollingUrl')) {
            $this->pollingUrl = $object->pollingUrl;
        }
        if (property_exists($object, 'qrCode')) {
            $this->qrCode = $object->qrCode;
        }
        return $this;
    }
}
