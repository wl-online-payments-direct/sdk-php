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
class ThreeDSecureData extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $acsTransactionId;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $utcTimestamp;

    // Methods
    /**
     * @return string
     */
    public function getAcsTransactionId()
    {
        return $this->acsTransactionId;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->acsTransactionId !== null) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if ($this->method !== null) {
            $object->method = $this->method;
        }
        if ($this->utcTimestamp !== null) {
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
