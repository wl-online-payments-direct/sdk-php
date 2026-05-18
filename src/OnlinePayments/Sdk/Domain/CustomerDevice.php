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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acceptHeader)) {
            $object->acceptHeader = $this->acceptHeader;
        }
        if (!is_null($this->browserData)) {
            $object->browserData = $this->browserData->toObject();
        }
        if (!is_null($this->deviceFingerprint)) {
            $object->deviceFingerprint = $this->deviceFingerprint;
        }
        if (!is_null($this->ipAddress)) {
            $object->ipAddress = $this->ipAddress;
        }
        if (!is_null($this->locale)) {
            $object->locale = $this->locale;
        }
        if (!is_null($this->timezoneOffsetUtcMinutes)) {
            $object->timezoneOffsetUtcMinutes = $this->timezoneOffsetUtcMinutes;
        }
        if (!is_null($this->userAgent)) {
            $object->userAgent = $this->userAgent;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CustomerDevice
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
