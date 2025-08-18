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
     * @var string|null
     */
    public ?string $ipAddressCountryCode = null;

    /**
     * @return string|null
     */
    public function getIpAddressCountryCode(): ?string
    {
        return $this->ipAddressCountryCode;
    }

    /**
     * @param string|null $value
     */
    public function setIpAddressCountryCode(?string $value): void
    {
        $this->ipAddressCountryCode = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): CustomerDeviceOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'ipAddressCountryCode')) {
            $this->ipAddressCountryCode = $object->ipAddressCountryCode;
        }
        return $this;
    }
}
