<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerDevice extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acceptHeader = null;

    /**
     * @var BrowserData|null
     */
    public ?BrowserData $browserData = null;

    /**
     * @var string|null
     */
    public ?string $deviceFingerprint = null;

    /**
     * @var string|null
     */
    public ?string $ipAddress = null;

    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var string|null
     */
    public ?string $timezoneOffsetUtcMinutes = null;

    /**
     * @var string|null
     */
    public ?string $userAgent = null;

    /**
     * @return string|null
     */
    public function getAcceptHeader(): ?string
    {
        return $this->acceptHeader;
    }

    /**
     * @param string|null $value
     */
    public function setAcceptHeader(?string $value): void
    {
        $this->acceptHeader = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withAcceptHeader(?string $value): static
    {
        $this->acceptHeader = $value;
        return $this;
    }

    /**
     * @return BrowserData|null
     */
    public function getBrowserData(): ?BrowserData
    {
        return $this->browserData;
    }

    /**
     * @param BrowserData|null $value
     */
    public function setBrowserData(?BrowserData $value): void
    {
        $this->browserData = $value;
    }

    /**
     * @param BrowserData|null $value
     * @return $this
     */
    public function withBrowserData(?BrowserData $value): static
    {
        $this->browserData = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeviceFingerprint(): ?string
    {
        return $this->deviceFingerprint;
    }

    /**
     * @param string|null $value
     */
    public function setDeviceFingerprint(?string $value): void
    {
        $this->deviceFingerprint = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withDeviceFingerprint(?string $value): static
    {
        $this->deviceFingerprint = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $value
     */
    public function setIpAddress(?string $value): void
    {
        $this->ipAddress = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withIpAddress(?string $value): static
    {
        $this->ipAddress = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $value
     */
    public function setLocale(?string $value): void
    {
        $this->locale = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withLocale(?string $value): static
    {
        $this->locale = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimezoneOffsetUtcMinutes(): ?string
    {
        return $this->timezoneOffsetUtcMinutes;
    }

    /**
     * @param string|null $value
     */
    public function setTimezoneOffsetUtcMinutes(?string $value): void
    {
        $this->timezoneOffsetUtcMinutes = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withTimezoneOffsetUtcMinutes(?string $value): static
    {
        $this->timezoneOffsetUtcMinutes = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * @param string|null $value
     */
    public function setUserAgent(?string $value): void
    {
        $this->userAgent = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withUserAgent(?string $value): static
    {
        $this->userAgent = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->acceptHeader !== null) {
            $object->acceptHeader = $this->acceptHeader;
        }
        if ($this->browserData !== null) {
            $object->browserData = $this->browserData->toObject();
        }
        if ($this->deviceFingerprint !== null) {
            $object->deviceFingerprint = $this->deviceFingerprint;
        }
        if ($this->ipAddress !== null) {
            $object->ipAddress = $this->ipAddress;
        }
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->timezoneOffsetUtcMinutes !== null) {
            $object->timezoneOffsetUtcMinutes = $this->timezoneOffsetUtcMinutes;
        }
        if ($this->userAgent !== null) {
            $object->userAgent = $this->userAgent;
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
        if (property_exists($object, 'acceptHeader')) {
            $this->acceptHeader = $object->acceptHeader;
        }
        if (property_exists($object, 'browserData')) {
            if (!is_object($object->browserData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->browserData, true) . '\' is not an object');
            }
            $value = new BrowserData();
            $this->browserData = $value->fromObject($object->browserData);
        }
        if (property_exists($object, 'deviceFingerprint')) {
            $this->deviceFingerprint = $object->deviceFingerprint;
        }
        if (property_exists($object, 'ipAddress')) {
            $this->ipAddress = $object->ipAddress;
        }
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'timezoneOffsetUtcMinutes')) {
            $this->timezoneOffsetUtcMinutes = $object->timezoneOffsetUtcMinutes;
        }
        if (property_exists($object, 'userAgent')) {
            $this->userAgent = $object->userAgent;
        }
        return $this;
    }
}
