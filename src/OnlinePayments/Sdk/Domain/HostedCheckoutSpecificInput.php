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
     * @var bool|null
     */
    public ?bool $autoRefundSplitPayments = null;

    /**
     * @var CardPaymentMethodSpecificInputForHostedCheckout|null
     */
    public ?CardPaymentMethodSpecificInputForHostedCheckout $cardPaymentMethodSpecificInput = null;

    /**
     * @var bool|null
     */
    public ?bool $isNewUnscheduledCardOnFileSeries = null;

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
     * @var SplitPaymentProductFiltersHostedCheckout|null
     */
    public ?SplitPaymentProductFiltersHostedCheckout $splitPaymentProductFilters = null;

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
     * @param int|null $value
     * @return $this
     */
    public function withAllowedNumberOfPaymentAttempts(?int $value): static
    {
        $this->allowedNumberOfPaymentAttempts = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAutoRefundSplitPayments(): ?bool
    {
        return $this->autoRefundSplitPayments;
    }

    /**
     * @param bool|null $value
     */
    public function setAutoRefundSplitPayments(?bool $value): void
    {
        $this->autoRefundSplitPayments = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withAutoRefundSplitPayments(?bool $value): static
    {
        $this->autoRefundSplitPayments = $value;
        return $this;
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
     * @param CardPaymentMethodSpecificInputForHostedCheckout|null $value
     * @return $this
     */
    public function withCardPaymentMethodSpecificInput(?CardPaymentMethodSpecificInputForHostedCheckout $value): static
    {
        $this->cardPaymentMethodSpecificInput = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsNewUnscheduledCardOnFileSeries(): ?bool
    {
        return $this->isNewUnscheduledCardOnFileSeries;
    }

    /**
     * @param bool|null $value
     */
    public function setIsNewUnscheduledCardOnFileSeries(?bool $value): void
    {
        $this->isNewUnscheduledCardOnFileSeries = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withIsNewUnscheduledCardOnFileSeries(?bool $value): static
    {
        $this->isNewUnscheduledCardOnFileSeries = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withIsRecurring(?bool $value): static
    {
        $this->isRecurring = $value;
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
     * @return $this
     */
    public function withLocale(?string $value): static
    {
        $this->locale = $value;
        return $this;
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
     * @param PaymentProductFiltersHostedCheckout|null $value
     * @return $this
     */
    public function withPaymentProductFilters(?PaymentProductFiltersHostedCheckout $value): static
    {
        $this->paymentProductFilters = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withReturnUrl(?string $value): static
    {
        $this->returnUrl = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withSessionTimeout(?int $value): static
    {
        $this->sessionTimeout = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withShowResultPage(?bool $value): static
    {
        $this->showResultPage = $value;
        return $this;
    }

    /**
     * @return SplitPaymentProductFiltersHostedCheckout|null
     */
    public function getSplitPaymentProductFilters(): ?SplitPaymentProductFiltersHostedCheckout
    {
        return $this->splitPaymentProductFilters;
    }

    /**
     * @param SplitPaymentProductFiltersHostedCheckout|null $value
     */
    public function setSplitPaymentProductFilters(?SplitPaymentProductFiltersHostedCheckout $value): void
    {
        $this->splitPaymentProductFilters = $value;
    }

    /**
     * @param SplitPaymentProductFiltersHostedCheckout|null $value
     * @return $this
     */
    public function withSplitPaymentProductFilters(?SplitPaymentProductFiltersHostedCheckout $value): static
    {
        $this->splitPaymentProductFilters = $value;
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
     * @return $this
     */
    public function withTokens(?string $value): static
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
     * @return $this
     */
    public function withVariant(?string $value): static
    {
        $this->variant = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->allowedNumberOfPaymentAttempts !== null) {
            $object->allowedNumberOfPaymentAttempts = $this->allowedNumberOfPaymentAttempts;
        }
        if ($this->autoRefundSplitPayments !== null) {
            $object->autoRefundSplitPayments = $this->autoRefundSplitPayments;
        }
        if ($this->cardPaymentMethodSpecificInput !== null) {
            $object->cardPaymentMethodSpecificInput = $this->cardPaymentMethodSpecificInput->toObject();
        }
        if ($this->isNewUnscheduledCardOnFileSeries !== null) {
            $object->isNewUnscheduledCardOnFileSeries = $this->isNewUnscheduledCardOnFileSeries;
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
        if ($this->splitPaymentProductFilters !== null) {
            $object->splitPaymentProductFilters = $this->splitPaymentProductFilters->toObject();
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'allowedNumberOfPaymentAttempts')) {
            $this->allowedNumberOfPaymentAttempts = $object->allowedNumberOfPaymentAttempts;
        }
        if (property_exists($object, 'autoRefundSplitPayments')) {
            $this->autoRefundSplitPayments = $object->autoRefundSplitPayments;
        }
        if (property_exists($object, 'cardPaymentMethodSpecificInput')) {
            if (!is_object($object->cardPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new CardPaymentMethodSpecificInputForHostedCheckout();
            $this->cardPaymentMethodSpecificInput = $value->fromObject($object->cardPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'isNewUnscheduledCardOnFileSeries')) {
            $this->isNewUnscheduledCardOnFileSeries = $object->isNewUnscheduledCardOnFileSeries;
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
        if (property_exists($object, 'splitPaymentProductFilters')) {
            if (!is_object($object->splitPaymentProductFilters)) {
                throw new UnexpectedValueException('value \'' . print_r($object->splitPaymentProductFilters, true) . '\' is not an object');
            }
            $value = new SplitPaymentProductFiltersHostedCheckout();
            $this->splitPaymentProductFilters = $value->fromObject($object->splitPaymentProductFilters);
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
