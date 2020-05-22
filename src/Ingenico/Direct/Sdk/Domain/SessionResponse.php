<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class SessionResponse extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $assetUrl;

    /**
     * @var string
     */
    private $clientApiUrl;

    /**
     * @var string
     */
    private $clientSessionId;

    /**
     * @var string
     */
    private $customerId;

    // Methods
    /**
     * @return string
     */
    public function getAssetUrl()
    {
        return $this->assetUrl;
    }
    /**
     * @var string
     */
    public function setAssetUrl($value)
    {
        $this->assetUrl = $value;
    }

    /**
     * @return string
     */
    public function getClientApiUrl()
    {
        return $this->clientApiUrl;
    }
    /**
     * @var string
     */
    public function setClientApiUrl($value)
    {
        $this->clientApiUrl = $value;
    }

    /**
     * @return string
     */
    public function getClientSessionId()
    {
        return $this->clientSessionId;
    }
    /**
     * @var string
     */
    public function setClientSessionId($value)
    {
        $this->clientSessionId = $value;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
    /**
     * @var string
     */
    public function setCustomerId($value)
    {
        $this->customerId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->assetUrl !== null) {
            $object->assetUrl = $this->assetUrl;
        }
        if ($this->clientApiUrl !== null) {
            $object->clientApiUrl = $this->clientApiUrl;
        }
        if ($this->clientSessionId !== null) {
            $object->clientSessionId = $this->clientSessionId;
        }
        if ($this->customerId !== null) {
            $object->customerId = $this->customerId;
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
        if (property_exists($object, 'assetUrl')) {
            $this->assetUrl = $object->assetUrl;
        }
        if (property_exists($object, 'clientApiUrl')) {
            $this->clientApiUrl = $object->clientApiUrl;
        }
        if (property_exists($object, 'clientSessionId')) {
            $this->clientSessionId = $object->clientSessionId;
        }
        if (property_exists($object, 'customerId')) {
            $this->customerId = $object->customerId;
        }
        return $this;
    }
}
