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
class CustomerDeviceOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $ipAddressCountryCode;

    // Methods
    /**
     * @return string
     */
    public function getIpAddressCountryCode()
    {
        return $this->ipAddressCountryCode;
    }
    /**
     * @var string
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
        if ($this->ipAddressCountryCode !== null) {
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
