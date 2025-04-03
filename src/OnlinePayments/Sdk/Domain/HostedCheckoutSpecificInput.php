<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class HostedCheckoutSpecificInput extends DataObject
{
    /**
     * @var int
     */
    public $allowedNumberOfPaymentAttempts = null;

    /**
     * @var CardPaymentMethodSpecificInputForHostedCheckout
     */
    public $cardPaymentMethodSpecificInput = null;

    /**
     * @var bool
     */
    public $isRecurring = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var PaymentProductFiltersHostedCheckout
     */
    public $paymentProductFilters = null;

    /**
     * @var string
     */
    public $returnUrl = null;

    /**
     * @var int
     */
    public $sessionTimeout = null;

    /**
     * @var bool
     */
    public $showResultPage = null;

    /**
     * @var string
     */
    public $tokens = null;

    /**
     * @var string
     */
    public $variant = null;

    /**
     * @return int
     */
    public function getAllowedNumberOfPaymentAttempts()
    {
        return $this->allowedNumberOfPaymentAttempts;
    }

    /**
     * @param int
     */
    public function setAllowedNumberOfPaymentAttempts($value)
    {
        $this->allowedNumberOfPaymentAttempts = $value;
    }

    /**
     * @return CardPaymentMethodSpecificInputForHostedCheckout
     */
    public function getCardPaymentMethodSpecificInput()
    {
        return $this->cardPaymentMethodSpecificInput;
    }

    /**
     * @param CardPaymentMethodSpecificInputForHostedCheckout
     */
    public function setCardPaymentMethodSpecificInput($value)
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return bool
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * @param bool
     */
    public function setIsRecurring($value)
    {
        $this->isRecurring = $value;
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
     * @return PaymentProductFiltersHostedCheckout
     */
    public function getPaymentProductFilters()
    {
        return $this->paymentProductFilters;
    }

    /**
     * @param PaymentProductFiltersHostedCheckout
     */
    public function setPaymentProductFilters($value)
    {
        $this->paymentProductFilters = $value;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string
     */
    public function setReturnUrl($value)
    {
        $this->returnUrl = $value;
    }

    /**
     * @return int
     */
    public function getSessionTimeout()
    {
        return $this->sessionTimeout;
    }

    /**
     * @param int
     */
    public function setSessionTimeout($value)
    {
        $this->sessionTimeout = $value;
    }

    /**
     * @return bool
     */
    public function getShowResultPage()
    {
        return $this->showResultPage;
    }

    /**
     * @param bool
     */
    public function setShowResultPage($value)
    {
        $this->showResultPage = $value;
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
        if (!is_null($this->allowedNumberOfPaymentAttempts)) {
            $object->allowedNumberOfPaymentAttempts = $this->allowedNumberOfPaymentAttempts;
        }
        if (!is_null($this->cardPaymentMethodSpecificInput)) {
            $object->cardPaymentMethodSpecificInput = $this->cardPaymentMethodSpecificInput->toObject();
        }
        if (!is_null($this->isRecurring)) {
            $object->isRecurring = $this->isRecurring;
        }
        if (!is_null($this->locale)) {
            $object->locale = $this->locale;
        }
        if (!is_null($this->paymentProductFilters)) {
            $object->paymentProductFilters = $this->paymentProductFilters->toObject();
        }
        if (!is_null($this->returnUrl)) {
            $object->returnUrl = $this->returnUrl;
        }
        if (!is_null($this->sessionTimeout)) {
            $object->sessionTimeout = $this->sessionTimeout;
        }
        if (!is_null($this->showResultPage)) {
            $object->showResultPage = $this->showResultPage;
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
        if (property_exists($object, 'allowedNumberOfPaymentAttempts')) {
            $this->allowedNumberOfPaymentAttempts = $object->allowedNumberOfPaymentAttempts;
        }
        if (property_exists($object, 'cardPaymentMethodSpecificInput')) {
            if (!is_object($object->cardPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new CardPaymentMethodSpecificInputForHostedCheckout();
            $this->cardPaymentMethodSpecificInput = $value->fromObject($object->cardPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'isRecurring')) {
            $this->isRecurring = $object->isRecurring;
        }
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'paymentProductFilters')) {
            if (!is_object($object->paymentProductFilters)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductFilters, true) . '\' is not an object');
            }
            $value = new PaymentProductFiltersHostedCheckout();
            $this->paymentProductFilters = $value->fromObject($object->paymentProductFilters);
        }
        if (property_exists($object, 'returnUrl')) {
            $this->returnUrl = $object->returnUrl;
        }
        if (property_exists($object, 'sessionTimeout')) {
            $this->sessionTimeout = $object->sessionTimeout;
        }
        if (property_exists($object, 'showResultPage')) {
            $this->showResultPage = $object->showResultPage;
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
