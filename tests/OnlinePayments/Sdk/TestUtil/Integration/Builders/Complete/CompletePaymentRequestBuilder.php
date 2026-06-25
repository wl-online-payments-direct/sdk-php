<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Complete;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CardWithoutCvv;
use OnlinePayments\Sdk\Domain\CompletePaymentCardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\CompletePaymentRequest;
use OnlinePayments\Sdk\Domain\Order;

class CompletePaymentRequestBuilder
{
    private int $amount = 1000;
    private string $currency = 'EUR';
    private ?string $cardNumber = null;
    private ?string $cardholderName = null;
    private ?string $expiryDate = null;
    private ?Order $orderOverride = null;
    private bool $useOrderOverride = false;

    public static function create(): self
    {
        return new self();
    }

    public function withAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function withCurrencyCode(string $currency): self
    {
        $this->currency = $currency;
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

    public function withExpiryDate(string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    public function withOrder(?Order $orderOverride): self
    {
        $this->orderOverride = $orderOverride;
        $this->useOrderOverride = true;

        return $this;
    }

    public function build(): CompletePaymentRequest
    {
        $request = new CompletePaymentRequest();
        if ($this->useOrderOverride === true) {
            $request->setOrder($this->orderOverride);
        } else {
            $request->setOrder($this->buildOrder());
        }

        if ($this->cardNumber !== null || $this->cardholderName !== null || $this->expiryDate !== null) {
            $request->setCardPaymentMethodSpecificInput($this->buildCardPaymentMethodSpecificInput());
        }

        return $request;
    }

    private function buildOrder(): Order
    {
        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currency);

        $order = new Order();
        $order->setAmountOfMoney($amountOfMoney);

        return $order;
    }

    private function buildCardPaymentMethodSpecificInput(): CompletePaymentCardPaymentMethodSpecificInput
    {
        $card = new CardWithoutCvv();

        if ($this->cardNumber !== null) {
            $card->setCardNumber($this->cardNumber);
        }

        if ($this->cardholderName !== null) {
            $card->setCardholderName($this->cardholderName);
        }

        if ($this->expiryDate !== null) {
            $card->setExpiryDate($this->expiryDate);
        }

        $cardInput = new CompletePaymentCardPaymentMethodSpecificInput();
        $cardInput->setCard($card);

        return $cardInput;
    }
}
