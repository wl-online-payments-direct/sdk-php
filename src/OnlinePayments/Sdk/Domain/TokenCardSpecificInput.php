<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenCardSpecificInput extends DataObject
{
    /**
     * @var TokenData
     */
    public $data = null;

    /**
     * @return TokenData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param TokenData
     */
    public function setData($value)
    {
        $this->data = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->data)) {
            $object->data = $this->data->toObject();
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
        if (property_exists($object, 'data')) {
            if (!is_object($object->data)) {
                throw new UnexpectedValueException('value \'' . print_r($object->data, true) . '\' is not an object');
            }
            $value = new TokenData();
            $this->data = $value->fromObject($object->data);
        }
        return $this;
    }
}
