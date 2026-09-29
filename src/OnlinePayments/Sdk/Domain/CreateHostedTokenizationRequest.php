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
     * @var bool|null
    */
    public ?bool $askConsumerConsent = null;

    /**
     * @var CreditCardSpecificInputHostedTokenization|null
    */
    public ?CreditCardSpecificInputHostedTokenization $creditCardSpecificInput = null;

    /**
     * @var string|null
    */
    public ?string $locale = null;

    /**
     * @var PaymentProductFiltersHostedTokenization|null
    */
    public ?PaymentProductFiltersHostedTokenization $paymentProductFilters = null;

    /**
     * @var string|null
    */
    public ?string $tokens = null;

    /**
     * @var string|null
    */
    public ?string $variant = null;

    /**
     * @return bool|null
    */
    public function getAskConsumerConsent(): ?bool
    {
        return $this->askConsumerConsent;
    }

    /**
     * @param bool|null $value
    */
    public function setAskConsumerConsent(?bool $value): void
    {
        $this->askConsumerConsent = $value;
    }

    /**
     * @param bool|null $value
     * @return CreateHostedTokenizationRequest
    */
    public function withAskConsumerConsent(?bool $value): CreateHostedTokenizationRequest
    {
        $this->askConsumerConsent = $value;
        return $this;
    }

    /**
     * @return CreditCardSpecificInputHostedTokenization|null
    */
    public function getCreditCardSpecificInput(): ?CreditCardSpecificInputHostedTokenization
    {
        return $this->creditCardSpecificInput;
    }

    /**
     * @param CreditCardSpecificInputHostedTokenization|null $value
    */
    public function setCreditCardSpecificInput(?CreditCardSpecificInputHostedTokenization $value): void
    {
        $this->creditCardSpecificInput = $value;
    }

    /**
     * @param CreditCardSpecificInputHostedTokenization|null $value
     * @return CreateHostedTokenizationRequest
    */
    public function withCreditCardSpecificInput(?CreditCardSpecificInputHostedTokenization $value): CreateHostedTokenizationRequest
    {
        $this->creditCardSpecificInput = $value;
        return $this;
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
     * @param string|null $value
     * @return CreateHostedTokenizationRequest
    */
    public function withLocale(?string $value): CreateHostedTokenizationRequest
    {
        $this->locale = $value;
        return $this;
    }

    /**
     * @return PaymentProductFiltersHostedTokenization|null
    */
    public function getPaymentProductFilters(): ?PaymentProductFiltersHostedTokenization
    {
        return $this->paymentProductFilters;
    }

    /**
     * @param PaymentProductFiltersHostedTokenization|null $value
    */
    public function setPaymentProductFilters(?PaymentProductFiltersHostedTokenization $value): void
    {
        $this->paymentProductFilters = $value;
    }

    /**
     * @param PaymentProductFiltersHostedTokenization|null $value
     * @return CreateHostedTokenizationRequest
    */
    public function withPaymentProductFilters(?PaymentProductFiltersHostedTokenization $value): CreateHostedTokenizationRequest
    {
        $this->paymentProductFilters = $value;
        return $this;
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
     * @param string|null $value
     * @return CreateHostedTokenizationRequest
    */
    public function withTokens(?string $value): CreateHostedTokenizationRequest
    {
        $this->tokens = $value;
        return $this;
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
     * @param string|null $value
     * @return CreateHostedTokenizationRequest
    */
    public function withVariant(?string $value): CreateHostedTokenizationRequest
    {
        $this->variant = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreateHostedTokenizationRequest
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
