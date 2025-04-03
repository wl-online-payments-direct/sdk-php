<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SessionResponse extends DataObject
{
    /**
     * @var string
     */
    public $assetUrl = null;

    /**
     * @var string
     */
    public $clientApiUrl = null;

    /**
     * @var string
     */
    public $clientSessionId = null;

    /**
     * @var string
     */
    public $customerId = null;

    /**
     * @var string[]
     */
    public $invalidTokens = null;

    /**
     * @return string
     */
    public function getAssetUrl()
    {
        return $this->assetUrl;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
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
     * @param string
     */
    public function setCustomerId($value)
    {
        $this->customerId = $value;
    }

    /**
     * @return string[]
     */
    public function getInvalidTokens()
    {
        return $this->invalidTokens;
    }

    /**
     * @param string[]
     */
    public function setInvalidTokens($value)
    {
        $this->invalidTokens = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->assetUrl)) {
            $object->assetUrl = $this->assetUrl;
        }
        if (!is_null($this->clientApiUrl)) {
            $object->clientApiUrl = $this->clientApiUrl;
        }
        if (!is_null($this->clientSessionId)) {
            $object->clientSessionId = $this->clientSessionId;
        }
        if (!is_null($this->customerId)) {
            $object->customerId = $this->customerId;
        }
        if (!is_null($this->invalidTokens)) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if (!is_null($element)) {
                    $object->invalidTokens[] = $element;
                }
            }
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
        if (property_exists($object, 'invalidTokens')) {
            if (!is_array($object->invalidTokens) && !is_object($object->invalidTokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->invalidTokens, true) . '\' is not an array or object');
            }
            $this->invalidTokens = [];
            foreach ($object->invalidTokens as $element) {
                $this->invalidTokens[] = $element;
            }
        }
        return $this;
    }
}
