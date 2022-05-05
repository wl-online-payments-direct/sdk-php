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
class CustomerOutput extends DataObject
{
    // Properties
    /**
     * @var CustomerDeviceOutput
     */
    private $device;

    // Methods
    /**
     * @return CustomerDeviceOutput
     */
    public function getDevice()
    {
        return $this->device;
    }
    /**
     * @var CustomerDeviceOutput
     */
    public function setDevice($value)
    {
        $this->device = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->device !== null) {
            $object->device = $this->device->toObject();
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
        if (property_exists($object, 'device')) {
            if (!is_object($object->device)) {
                throw new UnexpectedValueException('value \'' . print_r($object->device, true) . '\' is not an object');
            }
            $value = new CustomerDeviceOutput();
            $this->device = $value->fromObject($object->device);
        }
        return $this;
    }
}
