<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Services;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CalculateSurchargeRequest;
use OnlinePayments\Sdk\Domain\CardSource;
use OnlinePayments\Sdk\Domain\SurchargeCalculationCard;

class CalculateSurchargeRequestBuilder
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

    public function build(): CalculateSurchargeRequest
    {
        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currencyCode);

        $card = new SurchargeCalculationCard();
        $card->setCardNumber($this->cardNumber);

        $cardSource = new CardSource();
        $cardSource->setCard($card);

        $request = new CalculateSurchargeRequest();
        $request->setAmountOfMoney($amountOfMoney);

        return $request;
    }
}
