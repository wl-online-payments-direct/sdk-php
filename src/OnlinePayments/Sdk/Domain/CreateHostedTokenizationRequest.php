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
     * @var CreditCardSpecificInputHostedTokenization
     */
    private $creditCardSpecificInput;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var PageCustomization
     */
    private $pageCustomization;

    /**
     * @var PaymentProductFiltersHostedTokenization
     */
    private $paymentProductFilters;

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
     * @return CreditCardSpecificInputHostedTokenization
     */
    public function getCreditCardSpecificInput()
    {
        return $this->creditCardSpecificInput;
    }
    /**
     * @var CreditCardSpecificInputHostedTokenization
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
     * @var string
     */
    public function setLocale($value)
    {
        $this->locale = $value;
    }

    /**
     * @return PageCustomization
     */
    public function getPageCustomization()
    {
        return $this->pageCustomization;
    }
    /**
     * @var PageCustomization
     */
    public function setPageCustomization($value)
    {
        $this->pageCustomization = $value;
    }

    /**
     * @return PaymentProductFiltersHostedTokenization
     */
    public function getPaymentProductFilters()
    {
        return $this->paymentProductFilters;
    }
    /**
     * @var PaymentProductFiltersHostedTokenization
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
        if ($this->creditCardSpecificInput !== null) {
            $object->creditCardSpecificInput = $this->creditCardSpecificInput->toObject();
        }
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->pageCustomization !== null) {
            $object->pageCustomization = $this->pageCustomization->toObject();
        }
        if ($this->paymentProductFilters !== null) {
            $object->paymentProductFilters = $this->paymentProductFilters->toObject();
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
        if (property_exists($object, 'pageCustomization')) {
            if (!is_object($object->pageCustomization)) {
                throw new UnexpectedValueException('value \'' . print_r($object->pageCustomization, true) . '\' is not an object');
            }
            $value = new PageCustomization();
            $this->pageCustomization = $value->fromObject($object->pageCustomization);
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
