<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Products;

use OnlinePayments\Sdk\Merchant\Products\GetPaymentProductNetworksParams;

class GetPaymentProductNetworksParamsBuilder
{
    private ?string $countryCode = null;
    private ?string $currencyCode = null;
    private ?int $amount = null;
    private ?bool $isRecurring = null;

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

    public function build(): GetPaymentProductNetworksParams
    {
        $params = new GetPaymentProductNetworksParams();

        if ($this->countryCode !== null) {
            $params->setCountryCode($this->countryCode);
        }

        if ($this->currencyCode !== null) {
            $params->setCurrencyCode($this->currencyCode);
        }

        if ($this->amount !== null) {
            $params->setAmount($this->amount);
        }

        if ($this->isRecurring !== null) {
            $params->setIsRecurring($this->isRecurring);
        }

        return $params;
    }
}
