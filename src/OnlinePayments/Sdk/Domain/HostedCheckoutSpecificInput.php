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
     * @var int|null
     */
    public ?int $allowedNumberOfPaymentAttempts = null;

    /**
     * @var CardPaymentMethodSpecificInputForHostedCheckout|null
     */
    public ?CardPaymentMethodSpecificInputForHostedCheckout $cardPaymentMethodSpecificInput = null;

    /**
     * @var bool|null
     */
    public ?bool $isRecurring = null;

    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var PaymentProductFiltersHostedCheckout|null
     */
    public ?PaymentProductFiltersHostedCheckout $paymentProductFilters = null;

    /**
     * @var string|null
     */
    public ?string $returnUrl = null;

    /**
     * @var int|null
     */
    public ?int $sessionTimeout = null;

    /**
     * @var bool|null
     */
    public ?bool $showResultPage = null;

    /**
     * @var string|null
     */
    public ?string $tokens = null;

    /**
     * @var string|null
     */
    public ?string $variant = null;

    /**
     * @return int|null
     */
    public function getAllowedNumberOfPaymentAttempts(): ?int
    {
        return $this->allowedNumberOfPaymentAttempts;
    }

    /**
     * @param int|null $value
     */
    public function setAllowedNumberOfPaymentAttempts(?int $value): void
    {
        $this->allowedNumberOfPaymentAttempts = $value;
    }

    /**
     * @return CardPaymentMethodSpecificInputForHostedCheckout|null
     */
    public function getCardPaymentMethodSpecificInput(): ?CardPaymentMethodSpecificInputForHostedCheckout
    {
        return $this->cardPaymentMethodSpecificInput;
    }

    /**
     * @param CardPaymentMethodSpecificInputForHostedCheckout|null $value
     */
    public function setCardPaymentMethodSpecificInput(?CardPaymentMethodSpecificInputForHostedCheckout $value): void
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }

    /**
     * @param bool|null $value
     */
    public function setIsRecurring(?bool $value): void
    {
        $this->isRecurring = $value;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $value
     */
    public function setLocale(?string $value): void
    {
        $this->locale = $value;
    }

    /**
     * @return PaymentProductFiltersHostedCheckout|null
     */
    public function getPaymentProductFilters(): ?PaymentProductFiltersHostedCheckout
    {
        return $this->paymentProductFilters;
    }

    /**
     * @param PaymentProductFiltersHostedCheckout|null $value
     */
    public function setPaymentProductFilters(?PaymentProductFiltersHostedCheckout $value): void
    {
        $this->paymentProductFilters = $value;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string|null $value
     */
    public function setReturnUrl(?string $value): void
    {
        $this->returnUrl = $value;
    }

    /**
     * @return int|null
     */
    public function getSessionTimeout(): ?int
    {
        return $this->sessionTimeout;
    }

    /**
     * @param int|null $value
     */
    public function setSessionTimeout(?int $value): void
    {
        $this->sessionTimeout = $value;
    }

    /**
     * @return bool|null
     */
    public function getShowResultPage(): ?bool
    {
        return $this->showResultPage;
    }

    /**
     * @param bool|null $value
     */
    public function setShowResultPage(?bool $value): void
    {
        $this->showResultPage = $value;
    }

    /**
     * @return string|null
     */
    public function getTokens(): ?string
    {
        return $this->tokens;
    }

    /**
     * @param string|null $value
     */
    public function setTokens(?string $value): void
    {
        $this->tokens = $value;
    }

    /**
     * @return string|null
     */
    public function getVariant(): ?string
    {
        return $this->variant;
    }

    /**
     * @param string|null $value
     */
    public function setVariant(?string $value): void
    {
        $this->variant = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): HostedCheckoutSpecificInput
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
