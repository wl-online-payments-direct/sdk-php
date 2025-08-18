<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3203SpecificOutput extends DataObject
{
    /**
     * @var AddressPersonal|null
     */
    public ?AddressPersonal $billingAddress = null;

    /**
     * @var AddressPersonal|null
     */
    public ?AddressPersonal $shippingAddress = null;

    /**
     * @return AddressPersonal|null
     */
    public function getBillingAddress(): ?AddressPersonal
    {
        return $this->billingAddress;
    }

    /**
     * @param AddressPersonal|null $value
     */
    public function setBillingAddress(?AddressPersonal $value): void
    {
        $this->billingAddress = $value;
    }

    /**
     * @return AddressPersonal|null
     */
    public function getShippingAddress(): ?AddressPersonal
    {
        return $this->shippingAddress;
    }

    /**
     * @param AddressPersonal|null $value
     */
    public function setShippingAddress(?AddressPersonal $value): void
    {
        $this->shippingAddress = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->billingAddress)) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if (!is_null($this->shippingAddress)) {
            $object->shippingAddress = $this->shippingAddress->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProduct3203SpecificOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'billingAddress')) {
            if (!is_object($object->billingAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->billingAddress, true) . '\' is not an object');
            }
            $value = new AddressPersonal();
            $this->billingAddress = $value->fromObject($object->billingAddress);
        }
        if (property_exists($object, 'shippingAddress')) {
            if (!is_object($object->shippingAddress)) {
                throw new UnexpectedValueException('value \'' . print_r($object->shippingAddress, true) . '\' is not an object');
            }
            $value = new AddressPersonal();
            $this->shippingAddress = $value->fromObject($object->shippingAddress);
        }
        return $this;
    }
}
