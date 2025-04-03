<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedTokenizationRequest extends DataObject
{
    /**
     * @var bool
     */
    public $askConsumerConsent = null;

    /**
     * @var CreditCardSpecificInputHostedTokenization
     */
    public $creditCardSpecificInput = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var PaymentProductFiltersHostedTokenization
     */
    public $paymentProductFilters = null;

    /**
     * @var string
     */
    public $tokens = null;

    /**
     * @var string
     */
    public $variant = null;

    /**
     * @return bool
     */
    public function getAskConsumerConsent()
    {
        return $this->askConsumerConsent;
    }

    /**
     * @param bool
     */
    public function setAskConsumerConsent($value)
    {
        $this->askConsumerConsent = $value;
    }

    /**
     * @return CreditCardSpecificInputHostedTokenization
     */
    public function getCreditCardSpecificInput()
    {
        return $this->creditCardSpecificInput;
    }

    /**
     * @param CreditCardSpecificInputHostedTokenization
     */
    public function setCreditCardSpecificInput($value)
    {
        $this->creditCardSpecificInput = $value;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string
     */
    public function setLocale($value)
    {
        $this->locale = $value;
    }

    /**
     * @return PaymentProductFiltersHostedTokenization
     */
    public function getPaymentProductFilters()
    {
        return $this->paymentProductFilters;
    }

    /**
     * @param PaymentProductFiltersHostedTokenization
     */
    public function setPaymentProductFilters($value)
    {
        $this->paymentProductFilters = $value;
    }

    /**
     * @return string
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * @param string
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
     * @param string
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
        if (!is_null($this->askConsumerConsent)) {
            $object->askConsumerConsent = $this->askConsumerConsent;
        }
        if (!is_null($this->creditCardSpecificInput)) {
            $object->creditCardSpecificInput = $this->creditCardSpecificInput->toObject();
        }
        if (!is_null($this->locale)) {
            $object->locale = $this->locale;
        }
        if (!is_null($this->paymentProductFilters)) {
            $object->paymentProductFilters = $this->paymentProductFilters->toObject();
        }
        if (!is_null($this->tokens)) {
            $object->tokens = $this->tokens;
        }
        if (!is_null($this->variant)) {
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
        if (property_exists($object, 'creditCardSpecificInput')) {
            if (!is_object($object->creditCardSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->creditCardSpecificInput, true) . '\' is not an object');
            }
            $value = new CreditCardSpecificInputHostedTokenization();
            $this->creditCardSpecificInput = $value->fromObject($object->creditCardSpecificInput);
        }
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'paymentProductFilters')) {
            if (!is_object($object->paymentProductFilters)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductFilters, true) . '\' is not an object');
            }
            $value = new PaymentProductFiltersHostedTokenization();
            $this->paymentProductFilters = $value->fromObject($object->paymentProductFilters);
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
