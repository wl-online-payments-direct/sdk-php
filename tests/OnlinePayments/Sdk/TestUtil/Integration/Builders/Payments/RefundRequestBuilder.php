<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\RefundRequest;

class RefundRequestBuilder
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

    public function build(): RefundRequest
    {
        $amountOfMoney = new AmountOfMoney();
        if ($this->amount !== null) {
            $amountOfMoney->setAmount($this->amount);
        }

        if ($this->currency !== null) {
            $amountOfMoney->setCurrencyCode($this->currency);
        }

        $refundRequest = new RefundRequest();
        $refundRequest->setAmountOfMoney($amountOfMoney);

        if ($this->isFinal !== null) {
            $refundRequest->setIsFinal($this->isFinal);
        }

        return $refundRequest;
    }
}
