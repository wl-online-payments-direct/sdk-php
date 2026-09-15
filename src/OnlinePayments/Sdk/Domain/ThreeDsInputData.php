<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ThreeDsInputData extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $acquirerId = null;

    /**
     * @var string|null
     */
    public ?string $acquirerMid = null;

    /**
     * @var string|null
     */
    public ?string $requestorId = null;

    /**
     * @return string|null
     */
    public function getAcquirerId(): ?string
    {
        return $this->acquirerId;
    }

    /**
     * @param string|null $value
     */
    public function setAcquirerId(?string $value): void
    {
        $this->acquirerId = $value;
    }

    /**
     * @return string|null
     */
    public function getAcquirerMid(): ?string
    {
        return $this->acquirerMid;
    }

    /**
     * @param string|null $value
     */
    public function setAcquirerMid(?string $value): void
    {
        $this->acquirerMid = $value;
    }

    /**
     * @return string|null
     */
    public function getRequestorId(): ?string
    {
        return $this->requestorId;
    }

    /**
     * @param string|null $value
     */
    public function setRequestorId(?string $value): void
    {
        $this->requestorId = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->acquirerId)) {
            $object->acquirerId = $this->acquirerId;
        }
        if (!is_null($this->acquirerMid)) {
            $object->acquirerMid = $this->acquirerMid;
        }
        if (!is_null($this->requestorId)) {
            $object->requestorId = $this->requestorId;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ThreeDsInputData
    {
        parent::fromObject($object);
        if (property_exists($object, 'acquirerId')) {
            $this->acquirerId = $object->acquirerId;
        }
        if (property_exists($object, 'acquirerMid')) {
            $this->acquirerMid = $object->acquirerMid;
        }
        if (property_exists($object, 'requestorId')) {
            $this->requestorId = $object->requestorId;
        }
        return $this;
    }
}
