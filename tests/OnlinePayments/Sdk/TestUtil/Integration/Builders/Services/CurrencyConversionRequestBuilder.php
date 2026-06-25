<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Services;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CardInfo;
use OnlinePayments\Sdk\Domain\CurrencyConversionRequest;
use OnlinePayments\Sdk\Domain\DccCardSource;
use OnlinePayments\Sdk\Domain\Transaction;

class CurrencyConversionRequestBuilder
{
    private ?string $cardNumber = null;
    private int $amount = 1000;
    private string $currencyCode = 'EUR';

    public static function create(): self
    {
        return new self();
    }

    public function withCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function withAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function withCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function build(): CurrencyConversionRequest
    {
        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currencyCode);

        $transaction = new Transaction();
        $transaction->setAmount($amountOfMoney);

        $cardInfo = new CardInfo();
        $cardInfo->setCardNumber($this->cardNumber);

        $card = new DccCardSource();
        $card->setCard($cardInfo);

        $request = new CurrencyConversionRequest();
        $request->setTransaction($transaction);
        $request->setCardSource($card);

        return $request;
    }
}
