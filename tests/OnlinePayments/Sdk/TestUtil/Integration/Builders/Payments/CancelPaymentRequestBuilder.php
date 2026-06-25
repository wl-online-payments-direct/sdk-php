<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CancelPaymentRequest;

class CancelPaymentRequestBuilder
{
    private ?int $amount = null;
    private ?string $currency = null;
    private ?bool $isFinal = null;

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

    public function withIsFinal(bool $isFinal): self
    {
        $this->isFinal = $isFinal;
        return $this;
    }

    public function build(): CancelPaymentRequest
    {
        $amountOfMoney = new AmountOfMoney();

        if ($this->amount !== null) {
            $amountOfMoney->setAmount($this->amount);
        }

        if ($this->currency !== null) {
            $amountOfMoney->setCurrencyCode($this->currency);
        }

        $cancelPaymentRequest = new CancelPaymentRequest();
        $cancelPaymentRequest->setAmountOfMoney($amountOfMoney);

        if ($this->isFinal !== null) {
            $cancelPaymentRequest->setIsFinal($this->isFinal);
        }

        return $cancelPaymentRequest;
    }
}
