<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenEWallet extends DataObject
{
    /**
     * @var string
     * @deprecated This field is not used by any payment product An alias for the token. This can be used to visually represent the token.
     */
    public $alias = null;

    /**
     * @var CustomerToken
     */
    public $customer = null;

    /**
     * @return string
     * @deprecated This field is not used by any payment product An alias for the token. This can be used to visually represent the token.
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string
     * @deprecated This field is not used by any payment product An alias for the token. This can be used to visually represent the token.
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
     * @param CustomerToken
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
        if (!is_null($this->alias)) {
            $object->alias = $this->alias;
        }
        if (!is_null($this->customer)) {
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
