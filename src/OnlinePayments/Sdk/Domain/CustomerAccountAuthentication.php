<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerAccountAuthentication extends DataObject
{
    /**
     * @var string
     */
    public $data = null;

    /**
     * @var string
     */
    public $method = null;

    /**
     * @var string
     */
    public $utcTimestamp = null;

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string
     */
    public function setData($value)
    {
        $this->data = $value;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string
     */
    public function setMethod($value)
    {
        $this->method = $value;
    }

    /**
     * @return string
     */
    public function getUtcTimestamp()
    {
        return $this->utcTimestamp;
    }

    /**
     * @param string
     */
    public function setUtcTimestamp($value)
    {
        $this->utcTimestamp = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->data)) {
            $object->data = $this->data;
        }
        if (!is_null($this->method)) {
            $object->method = $this->method;
        }
        if (!is_null($this->utcTimestamp)) {
            $object->utcTimestamp = $this->utcTimestamp;
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
            $this->data = $object->data;
        }
        if (property_exists($object, 'method')) {
            $this->method = $object->method;
        }
        if (property_exists($object, 'utcTimestamp')) {
            $this->utcTimestamp = $object->utcTimestamp;
        }
        return $this;
    }
}
