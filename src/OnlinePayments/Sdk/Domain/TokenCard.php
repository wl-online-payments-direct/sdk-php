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
class TokenCard extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $alias;

    /**
     * @var TokenCardData
     */
    private $data;

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
     * @return TokenCardData
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @var TokenCardData
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
        if ($this->alias !== null) {
            $object->alias = $this->alias;
        }
        if ($this->data !== null) {
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
        if (property_exists($object, 'alias')) {
            $this->alias = $object->alias;
        }
        if (property_exists($object, 'data')) {
            if (!is_object($object->data)) {
                throw new UnexpectedValueException('value \'' . print_r($object->data, true) . '\' is not an object');
            }
            $value = new TokenCardData();
            $this->data = $value->fromObject($object->data);
        }
        return $this;
    }
}
