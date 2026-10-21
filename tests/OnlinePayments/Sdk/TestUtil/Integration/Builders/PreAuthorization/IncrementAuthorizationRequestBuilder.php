<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\PreAuthorization;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\IncrementAuthorizationRequest;

class IncrementAuthorizationRequestBuilder
{
    private int $amount = 1500;
    private string $currency = 'EUR';

    public static function create(): self
    {
        return new self();
    }

    public function withAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function withCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function build(): IncrementAuthorizationRequest
    {
        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currency);

        $request = new IncrementAuthorizationRequest();
        $request->setAmountOfMoney($amountOfMoney);

        return $request;
    }
}
