<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreateHostedFieldsSessionRequest extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var string|null
     */
    public ?string $origin = null;

    /**
     * @var PaymentProductFiltersHostedFields|null
     */
    public ?PaymentProductFiltersHostedFields $paymentProductFilters = null;

    /**
     * @var string[]|null
     */
    public ?array $tokens = null;

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
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param string|null $value
     */
    public function setOrigin(?string $value): void
    {
        $this->origin = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withOrigin(?string $value): static
    {
        $this->origin = $value;
        return $this;
    }

    /**
     * @return PaymentProductFiltersHostedFields|null
     */
    public function getPaymentProductFilters(): ?PaymentProductFiltersHostedFields
    {
        return $this->paymentProductFilters;
    }

    /**
     * @param PaymentProductFiltersHostedFields|null $value
     */
    public function setPaymentProductFilters(?PaymentProductFiltersHostedFields $value): void
    {
        $this->paymentProductFilters = $value;
    }

    /**
     * @param PaymentProductFiltersHostedFields|null $value
     * @return $this
     */
    public function withPaymentProductFilters(?PaymentProductFiltersHostedFields $value): static
    {
        $this->paymentProductFilters = $value;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTokens(): ?array
    {
        return $this->tokens;
    }

    /**
     * @param string[]|null $value
     */
    public function setTokens(?array $value): void
    {
        $this->tokens = $value;
    }

    /**
     * @param string[]|null $value
     * @return $this
     */
    public function withTokens(?array $value): static
    {
        $this->tokens = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->locale !== null) {
            $object->locale = $this->locale;
        }
        if ($this->origin !== null) {
            $object->origin = $this->origin;
        }
        if ($this->paymentProductFilters !== null) {
            $object->paymentProductFilters = $this->paymentProductFilters->toObject();
        }
        if ($this->tokens !== null) {
            $object->tokens = [];
            foreach ($this->tokens as $element) {
                if ($element !== null) {
                    $object->tokens[] = $element;
                }
            }
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
        if (property_exists($object, 'locale')) {
            $this->locale = $object->locale;
        }
        if (property_exists($object, 'origin')) {
            $this->origin = $object->origin;
        }
        if (property_exists($object, 'paymentProductFilters')) {
            if (!is_object($object->paymentProductFilters)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductFilters, true) . '\' is not an object');
            }
            $value = new PaymentProductFiltersHostedFields();
            $this->paymentProductFilters = $value->fromObject($object->paymentProductFilters);
        }
        if (property_exists($object, 'tokens')) {
            if (!is_array($object->tokens) && !is_object($object->tokens)) {
                throw new UnexpectedValueException('value \'' . print_r($object->tokens, true) . '\' is not an array or object');
            }
            $this->tokens = [];
            foreach ($object->tokens as $element) {
                    $this->tokens[] = $element;
            }
        }
        return $this;
    }
}
