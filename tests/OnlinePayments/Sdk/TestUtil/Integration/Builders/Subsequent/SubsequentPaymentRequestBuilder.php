<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Subsequent;

use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\AutoCapture;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\SubsequentCardPaymentMethodSpecificInput;
use OnlinePayments\Sdk\Domain\SubsequentPaymentRequest;

class SubsequentPaymentRequestBuilder
{
    private int $amount = 1000;
    private string $currency = 'EUR';
    private string $subsequentType = 'Recurring';
    private string $authorizationMode = 'FINAL_AUTHORIZATION';
    private bool $autoCapture = false;

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

    public function withSubsequentType(string $subsequentType): self
    {
        $this->subsequentType = $subsequentType;
        return $this;
    }

    public function withAuthorizationMode(string $authorizationMode): self
    {
        $this->authorizationMode = $authorizationMode;
        return $this;
    }

    public function withAutoCapture(bool $autoCapture): self
    {
        $this->autoCapture = $autoCapture;
        return $this;
    }

    public function build(): SubsequentPaymentRequest
    {
        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currency);

        $order = new Order();
        $order->setAmountOfMoney($amountOfMoney);

        $cardInput = new SubsequentCardPaymentMethodSpecificInput();
        $cardInput->setSubsequentType($this->subsequentType);
        $cardInput->setAuthorizationMode($this->authorizationMode);

        if ($this->autoCapture) {
            $autoCapture = new AutoCapture();
            $autoCapture->setDelayInMinutes(10);
            $cardInput->setAutoCapture($autoCapture);
        }

        $request = new SubsequentPaymentRequest();
        $request->setOrder($order);
        $request->setSubsequentcardPaymentMethodSpecificInput($cardInput);

        return $request;
    }
}
