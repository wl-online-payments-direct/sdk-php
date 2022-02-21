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
class TokenEWallet extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $alias;

    /**
     * @var CustomerToken
     */
    private $customer;

    // Methods
    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }
    /**
     * @var string
     */
    public function setAlias($value)
    {
        $this->alias = $value;
    }

    /**
     * @return CustomerToken
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * @var CustomerToken
     */
    public function setCustomer($value)
    {
        $this->customer = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->alias !== null) {
            $object->alias = $this->alias;
        }
        if ($this->customer !== null) {
            $object->customer = $this->customer->toObject();
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
        if (property_exists($object, 'alias')) {
            $this->alias = $object->alias;
        }
        if (property_exists($object, 'customer')) {
            if (!is_object($object->customer)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customer, true) . '\' is not an object');
            }
            $value = new CustomerToken();
            $this->customer = $value->fromObject($object->customer);
        }
        return $this;
    }
}
