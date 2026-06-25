<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Products;

use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductsParams;

class GetPaymentProductsParamsBuilder
{
    private ?string $countryCode = null;
    private ?string $currencyCode = null;
    private ?string $locale = null;
    private ?int $amount = null;
    private ?bool $isRecurring = null;
    private ?array $addHideList = null;
    private ?array $hideList = null;
    private ?string $operationType = null;

    public static function create(): self
    {
        return new self();
    }

    public function withCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function withCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function withLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function withAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function withIsRecurring(?bool $isRecurring): self
    {
        $this->isRecurring = $isRecurring;
        return $this;
    }

    public function withAddHideList(?array $addHideList): self
    {
        $this->addHideList = $addHideList;
        return $this;
    }

    public function withHideList(?array $hideList): self
    {
        $this->hideList = $hideList;
        return $this;
    }

    public function withOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function build(): GetPaymentProductsParams
    {
        $params = new GetPaymentProductsParams();

        if ($this->countryCode !== null) {
            $params->setCountryCode($this->countryCode);
        }

        if ($this->currencyCode !== null) {
            $params->setCurrencyCode($this->currencyCode);
        }

        if ($this->locale !== null) {
            $params->setLocale($this->locale);
        }

        if ($this->amount !== null) {
            $params->setAmount($this->amount);
        }

        if ($this->isRecurring !== null) {
            $params->setIsRecurring($this->isRecurring);
        }

        if ($this->addHideList !== null && count($this->addHideList) > 0) {
            $params->addHide($this->addHideList);
        }

        if ($this->hideList !== null && count($this->hideList) > 0) {
            $params->setHide($this->hideList);
        }

        if ($this->operationType !== null) {
            $params->setOperationType($this->operationType);
        }

        return $params;
    }
}
