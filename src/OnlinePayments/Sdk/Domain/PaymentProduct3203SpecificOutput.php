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
class PaymentProduct3203SpecificOutput extends DataObject
{
    // Properties
    /**
     * @var AddressPersonal
     */
    private $billingAddress;

    /**
     * @var AddressPersonal
     */
    private $shippingAddress;

    // Methods
    /**
     * @return AddressPersonal
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
    /**
     * @var AddressPersonal
     */
    public function setBillingAddress($value)
    {
        $this->billingAddress = $value;
    }

    /**
     * @return AddressPersonal
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }
    /**
     * @var AddressPersonal
     */
    public function setShippingAddress($value)
    {
        $this->shippingAddress = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->billingAddress !== null) {
            $object->billingAddress = $this->billingAddress->toObject();
        }
        if ($this->shippingAddress !== null) {
            $object->shippingAddress = $this->shippingAddress->toObject();
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
