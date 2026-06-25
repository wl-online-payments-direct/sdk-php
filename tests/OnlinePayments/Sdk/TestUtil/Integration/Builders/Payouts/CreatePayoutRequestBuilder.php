<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Payouts;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\Card;
use OnlinePayments\Sdk\Domain\CardPayoutMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CreatePayoutRequest;

class CreatePayoutRequestBuilder
{
    private int $amount = 1000;
    private string $currencyCode = 'EUR';
    private string $cardNumber = '4012000033330026';
    private string $cardholderName = 'Wile E. Coyote';
    private string $cvv = '123';
    private string $expiryDate = '1230';
    private int $paymentProductId = 1;
    private string $payoutReason = 'Refund';

    public static function create(): self
    {
        return new self();
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

    public function withCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function withCardholderName(string $cardholderName): self
    {
        $this->cardholderName = $cardholderName;
        return $this;
    }

    public function withCvv(string $cvv): self
    {
        $this->cvv = $cvv;
        return $this;
    }

    public function withExpiryDate(string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    public function withPaymentProductId(int $paymentProductId): self
    {
        $this->paymentProductId = $paymentProductId;
        return $this;
    }

    public function withPayoutReason(string $payoutReason): self
    {
        $this->payoutReason = $payoutReason;
        return $this;
    }

    public function build(): CreatePayoutRequest
    {
        $card = new Card();
        $card->setCardNumber($this->cardNumber);
        $card->setCardholderName($this->cardholderName);
        $card->setCvv($this->cvv);
        $card->setExpiryDate($this->expiryDate);

        $cardInput = new CardPayoutMethodSpecificInput();
        $cardInput->setCard($card);
        $cardInput->setPaymentProductId($this->paymentProductId);
        $cardInput->setPayoutReason($this->payoutReason);

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currencyCode);

        $request = new CreatePayoutRequest();
        $request->setAmountOfMoney($amountOfMoney);
        $request->setCardPayoutMethodSpecificInput($cardInput);

        return $request;
    }
}
