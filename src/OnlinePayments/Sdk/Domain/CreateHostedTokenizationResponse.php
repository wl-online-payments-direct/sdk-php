<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedTokenizationResponse extends DataObject
{
    /**
     * @var string[]
     */
    public $expiredCardTokens = null;

    /**
     * @var string
     */
    public $hostedTokenizationId = null;

    /**
     * @var string
     */
    public $hostedTokenizationUrl = null;

    /**
     * @var string[]
     */
    public $invalidTokens = null;

    /**
     * @var string
     * @deprecated Deprecated
     */
    public $partialRedirectUrl = null;

    /**
     * @return string[]
     */
    public function getExpiredCardTokens()
    {
        return $this->expiredCardTokens;
    }

    /**
     * @param string[]
     */
    public function setExpiredCardTokens($value)
    {
        $this->expiredCardTokens = $value;
    }

    /**
     * @return string
     */
    public function getHostedTokenizationId()
    {
        return $this->hostedTokenizationId;
    }

    /**
     * @param string
     */
    public function setHostedTokenizationId($value)
    {
        $this->hostedTokenizationId = $value;
    }

    /**
     * @return string
     */
    public function getHostedTokenizationUrl()
    {
        return $this->hostedTokenizationUrl;
    }

    /**
     * @param string
     */
    public function setHostedTokenizationUrl($value)
    {
        $this->hostedTokenizationUrl = $value;
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
     * @return string
     * @deprecated Deprecated
     */
    public function getPartialRedirectUrl()
    {
        return $this->partialRedirectUrl;
    }

    /**
     * @param string
     * @deprecated Deprecated
     */
    public function setPartialRedirectUrl($value)
    {
        $this->partialRedirectUrl = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->expiredCardTokens)) {
            $object->expiredCardTokens = [];
            foreach ($this->expiredCardTokens as $element) {
                if (!is_null($element)) {
                    $object->expiredCardTokens[] = $element;
                }
            }
        }
        if (!is_null($this->hostedTokenizationId)) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if (!is_null($this->hostedTokenizationUrl)) {
            $object->hostedTokenizationUrl = $this->hostedTokenizationUrl;
        }
        if (!is_null($this->invalidTokens)) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if (!is_null($element)) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if (!is_null($this->partialRedirectUrl)) {
            $object->partialRedirectUrl = $this->partialRedirectUrl;
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
        if (property_exists($object, 'expiredCardTokens')) {
            if (!is_array($object->expiredCardTokens) && !is_object($object->expiredCardTokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->expiredCardTokens, true) . '\' is not an array or object');
            }
            $this->expiredCardTokens = [];
            foreach ($object->expiredCardTokens as $element) {
                $this->expiredCardTokens[] = $element;
            }
        }
        if (property_exists($object, 'hostedTokenizationId')) {
            $this->hostedTokenizationId = $object->hostedTokenizationId;
        }
        if (property_exists($object, 'hostedTokenizationUrl')) {
            $this->hostedTokenizationUrl = $object->hostedTokenizationUrl;
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
        if (property_exists($object, 'partialRedirectUrl')) {
            $this->partialRedirectUrl = $object->partialRedirectUrl;
        }
        return $this;
    }
}
