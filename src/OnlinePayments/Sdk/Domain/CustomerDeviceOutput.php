<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerDeviceOutput extends DataObject
{
    /**
     * @var string
     */
    public $ipAddressCountryCode = null;

    /**
     * @return string
     */
    public function getIpAddressCountryCode()
    {
        return $this->ipAddressCountryCode;
    }

    /**
     * @param string
     */
    public function setIpAddressCountryCode($value)
    {
        $this->ipAddressCountryCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->ipAddressCountryCode)) {
            $object->ipAddressCountryCode = $this->ipAddressCountryCode;
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
        if (property_exists($object, 'ipAddressCountryCode')) {
            $this->ipAddressCountryCode = $object->ipAddressCountryCode;
        }
        return $this;
    }
}
