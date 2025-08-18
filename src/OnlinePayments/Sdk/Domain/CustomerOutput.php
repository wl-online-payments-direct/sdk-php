<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerOutput extends DataObject
{
    /**
     * @var CustomerDeviceOutput|null
     */
    public ?CustomerDeviceOutput $device = null;

    /**
     * @return CustomerDeviceOutput|null
     */
    public function getDevice(): ?CustomerDeviceOutput
    {
        return $this->device;
    }

    /**
     * @param CustomerDeviceOutput|null $value
     */
    public function setDevice(?CustomerDeviceOutput $value): void
    {
        $this->device = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->device)) {
            $object->device = $this->device->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CustomerOutput
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
