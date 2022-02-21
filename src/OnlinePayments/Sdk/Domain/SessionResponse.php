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

    /**
     * @var string[]
     */
    private $invalidTokens;

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
     * @return string[]
     */
    public function getInvalidTokens()
    {
        return $this->invalidTokens;
    }
    /**
     * @var string[]
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
        if ($this->invalidTokens !== null) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if ($element !== null) {
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
