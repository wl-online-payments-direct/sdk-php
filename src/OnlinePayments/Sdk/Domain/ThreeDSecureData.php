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
     * @var string|null
    */
    public ?string $acsTransactionId = null;

    /**
     * @var string|null
    */
    public ?string $method = null;

    /**
     * @var string|null
    */
    public ?string $utcTimestamp = null;

    /**
     * @return string|null
    */
    public function getAcsTransactionId(): ?string
    {
        return $this->acsTransactionId;
    }

    /**
     * @param string|null $value
    */
    public function setAcsTransactionId(?string $value): void
    {
        $this->acsTransactionId = $value;
    }

    /**
     * @param string|null $value
     * @return ThreeDSecureData
    */
    public function withAcsTransactionId(?string $value): ThreeDSecureData
    {
        $this->acsTransactionId = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param string|null $value
    */
    public function setMethod(?string $value): void
    {
        $this->method = $value;
    }

    /**
     * @param string|null $value
     * @return ThreeDSecureData
    */
    public function withMethod(?string $value): ThreeDSecureData
    {
        $this->method = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getUtcTimestamp(): ?string
    {
        return $this->utcTimestamp;
    }

    /**
     * @param string|null $value
    */
    public function setUtcTimestamp(?string $value): void
    {
        $this->utcTimestamp = $value;
    }

    /**
     * @param string|null $value
     * @return ThreeDSecureData
    */
    public function withUtcTimestamp(?string $value): ThreeDSecureData
    {
        $this->utcTimestamp = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ThreeDSecureData
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
