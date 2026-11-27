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
     * @param string|null $value
     * @return $this
     */
    public function withAppUrl(?string $value): static
    {
        $this->appUrl = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPollingUrl(?string $value): static
    {
        $this->pollingUrl = $value;
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
        if ($this->appUrl !== null) {
            $object->appUrl = $this->appUrl;
        }
        if ($this->pollingUrl !== null) {
            $object->pollingUrl = $this->pollingUrl;
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
