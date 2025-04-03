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
     * @var string
     */
    public $acceptHeader = null;

    /**
     * @var BrowserData
     */
    public $browserData = null;

    /**
     * @var string
     */
    public $deviceFingerprint = null;

    /**
     * @var string
     */
    public $ipAddress = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $timezoneOffsetUtcMinutes = null;

    /**
     * @var string
     */
    public $userAgent = null;

    /**
     * @return string
     */
    public function getAcceptHeader()
    {
        return $this->acceptHeader;
    }

    /**
     * @param string
     */
    public function setAcceptHeader($value)
    {
        $this->acceptHeader = $value;
    }

    /**
     * @return BrowserData
     */
    public function getBrowserData()
    {
        return $this->browserData;
    }

    /**
     * @param BrowserData
     */
    public function setBrowserData($value)
    {
        $this->browserData = $value;
    }

    /**
     * @return string
     */
    public function getDeviceFingerprint()
    {
        return $this->deviceFingerprint;
    }

    /**
     * @param string
     */
    public function setDeviceFingerprint($value)
    {
        $this->deviceFingerprint = $value;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string
     */
    public function setIpAddress($value)
    {
        $this->ipAddress = $value;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string
     */
    public function setLocale($value)
    {
        $this->locale = $value;
    }

    /**
     * @return string
     */
    public function getTimezoneOffsetUtcMinutes()
    {
        return $this->timezoneOffsetUtcMinutes;
    }

    /**
     * @param string
     */
    public function setTimezoneOffsetUtcMinutes($value)
    {
        $this->timezoneOffsetUtcMinutes = $value;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string
     */
    public function setUserAgent($value)
    {
        $this->userAgent = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
