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
class CreateHostedTokenizationResponse extends DataObject
{
    // Properties
    /**
     * @var string[]
     */
    private $expiredCardTokens;

    /**
     * @var string
     */
    private $hostedTokenizationId;

    /**
     * @var string
     */
    private $hostedTokenizationUrl;

    /**
     * @var string[]
     */
    private $invalidTokens;

    /**
     * @var string
     */
    private $partialRedirectUrl;

    // Methods
    /**
     * @return string[]
     */
    public function getExpiredCardTokens()
    {
        return $this->expiredCardTokens;
    }
    /**
     * @var string[]
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
     * @var string
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
     * @var string
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
     * @var string[]
     */
    public function setInvalidTokens($value)
    {
        $this->invalidTokens = $value;
    }

    /**
     * @return string
     */
    public function getPartialRedirectUrl()
    {
        return $this->partialRedirectUrl;
    }
    /**
     * @var string
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
        if ($this->expiredCardTokens !== null) {
            $object->expiredCardTokens = [];
            foreach ($this->expiredCardTokens as $element) {
                if ($element !== null) {
                    $object->expiredCardTokens[] = $element;
                }
            }
        }
        if ($this->hostedTokenizationId !== null) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
        }
        if ($this->hostedTokenizationUrl !== null) {
            $object->hostedTokenizationUrl = $this->hostedTokenizationUrl;
        }
        if ($this->invalidTokens !== null) {
            $object->invalidTokens = [];
            foreach ($this->invalidTokens as $element) {
                if ($element !== null) {
                    $object->invalidTokens[] = $element;
                }
            }
        }
        if ($this->partialRedirectUrl !== null) {
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
