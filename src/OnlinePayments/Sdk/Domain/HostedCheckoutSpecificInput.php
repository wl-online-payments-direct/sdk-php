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
class HostedCheckoutSpecificInput extends DataObject
{
    // Properties
    /**
     * @var CardPaymentMethodSpecificInputForHostedCheckout
     */
    private $cardPaymentMethodSpecificInput;

    /**
     * @var bool
     */
    private $isRecurring;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var PaymentProductFiltersHostedCheckout
     */
    private $paymentProductFilters;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var int
     */
    private $sessionTimeout;

    /**
     * @var bool
     */
    private $showResultPage;

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
     * @return CardPaymentMethodSpecificInputForHostedCheckout
     */
    public function getCardPaymentMethodSpecificInput()
    {
        return $this->cardPaymentMethodSpecificInput;
    }
    /**
     * @var CardPaymentMethodSpecificInputForHostedCheckout
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
     * @var bool
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
     * @var string
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
     * @var PaymentProductFiltersHostedCheckout
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
     * @var string
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
     * @var int
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
     * @var bool
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
        if ($this->cardPaymentMethodSpecificInput !== null) {
            $object->cardPaymentMethodSpecificInput = $this->cardPaymentMethodSpecificInput->toObject();
        }
        if ($this->isRecurring !== null) {
            $object->isRecurring = $this->isRecurring;
        }
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->paymentProductFilters !== null) {
            $object->paymentProductFilters = $this->paymentProductFilters->toObject();
        }
        if ($this->returnUrl !== null) {
            $object->returnUrl = $this->returnUrl;
        }
        if ($this->sessionTimeout !== null) {
            $object->sessionTimeout = $this->sessionTimeout;
        }
        if ($this->showResultPage !== null) {
            $object->showResultPage = $this->showResultPage;
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
