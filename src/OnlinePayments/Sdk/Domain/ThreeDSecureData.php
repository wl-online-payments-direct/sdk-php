<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ThreeDSecureData extends DataObject
{
    /**
     * @var string
     */
    public $acsTransactionId = null;

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
    public function getAcsTransactionId()
    {
        return $this->acsTransactionId;
    }

    /**
     * @param string
     */
    public function setAcsTransactionId($value)
    {
        $this->acsTransactionId = $value;
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
        if (!is_null($this->acsTransactionId)) {
            $object->acsTransactionId = $this->acsTransactionId;
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
        if (property_exists($object, 'acsTransactionId')) {
            $this->acsTransactionId = $object->acsTransactionId;
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
