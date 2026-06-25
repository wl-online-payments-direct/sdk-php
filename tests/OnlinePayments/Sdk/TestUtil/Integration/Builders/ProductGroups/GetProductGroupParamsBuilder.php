<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\ProductGroups;

use OnlinePayments\Sdk\Merchant\ProductGroups\GetProductGroupParams;

class GetProductGroupParamsBuilder
{
    private ?string $countryCode = null;
    private ?string $currencyCode = null;
    private ?int $amount = null;
    private ?bool $isRecurring = null;
    private ?array $addHideList = null;
    private ?array $hideList = null;

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

    public function build(): GetProductGroupParams
    {
        $params = new GetProductGroupParams();

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

        if ($this->addHideList !== null && count($this->addHideList) > 0) {
            $params->addHide($this->addHideList);
        }

        if ($this->hideList !== null && count($this->hideList) > 0) {
            $params->setHide($this->hideList);
        }

        return $params;
    }
}
