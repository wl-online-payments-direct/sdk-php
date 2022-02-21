<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerDevice extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $acceptHeader;

    /**
     * @var BrowserData
     */
    private $browserData;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $timezoneOffsetUtcMinutes;

    /**
     * @var string
     */
    private $userAgent;

    // Methods
    /**
     * @return string
     */
    public function getAcceptHeader()
    {
        return $this->acceptHeader;
    }
    /**
     * @var string
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
     * @var BrowserData
     */
    public function setBrowserData($value)
    {
        $this->browserData = $value;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->acceptHeader !== null) {
            $object->acceptHeader = $this->acceptHeader;
        }
        if ($this->browserData !== null) {
            $object->browserData = $this->browserData->toObject();
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
