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
class CreateHostedTokenizationRequest extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $askConsumerConsent;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $tokens;

    /**
     * @var string
     */
    private $variant;

    // Methods
    /**
     * @return bool
     */
    public function getAskConsumerConsent()
    {
        return $this->askConsumerConsent;
    }
    /**
     * @var bool
     */
    public function setAskConsumerConsent($value)
    {
        $this->askConsumerConsent = $value;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * @var string
     */
    public function setLocale($value)
    {
        $this->locale = $value;
    }

    /**
     * @return string
     */
    public function getTokens()
    {
        return $this->tokens;
    }
    /**
     * @var string
     */
    public function setTokens($value)
    {
        $this->tokens = $value;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }
    /**
     * @var string
     */
    public function setVariant($value)
    {
        $this->variant = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->askConsumerConsent !== null) {
            $object->askConsumerConsent = $this->askConsumerConsent;
        }
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->tokens !== null) {
            $object->tokens = $this->tokens;
        }
        if ($this->variant !== null) {
            $object->variant = $this->variant;
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
        if (property_exists($object, 'askConsumerConsent')) {
            $this->askConsumerConsent = $object->askConsumerConsent;
        }
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'tokens')) {
            $this->tokens = $object->tokens;
        }
        if (property_exists($object, 'variant')) {
            $this->variant = $object->variant;
        }
        return $this;
    }
}
