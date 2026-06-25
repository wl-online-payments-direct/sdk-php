<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Common;

use OnlinePayments\Sdk\Domain\Card;
use OnlinePayments\Sdk\Domain\CreateTokenRequest;
use OnlinePayments\Sdk\Domain\TokenCardSpecificInput;
use OnlinePayments\Sdk\Domain\TokenData;

class CreateTokenRequestBuilder
{
    private string $cardNumber = '4567350000427977';
    private string $cvv = '111';
    private string $expiryDate = '1230';
    private string $cardholderName = 'John Doe';
    private int $paymentProductId = 1;
    private ?string $encryptedCustomerInput = null;
    private ?string $cobrandSelectionIndicator = null;

    public static function create(): self
    {
        return new self();
    }

    public function withCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;
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

    public function withCardholderName(string $cardholderName): self
    {
        $this->cardholderName = $cardholderName;
        return $this;
    }

    public function withPaymentProductId(string $paymentProductId): self
    {
        $this->paymentProductId = $paymentProductId;
        return $this;
    }

    public function withEncryptedCustomerInput(string $encryptedCustomerInput): self
    {
        $this->encryptedCustomerInput = $encryptedCustomerInput;
        return $this;
    }

    public function withCobrandSelectionIndicator(string $cobrandSelectionIndicator): self
    {
        $this->cobrandSelectionIndicator = $cobrandSelectionIndicator;
        return $this;
    }

    public function build(): CreateTokenRequest
    {
        $request = new CreateTokenRequest();

        $request->setPaymentProductId($this->paymentProductId);

        if ($this->encryptedCustomerInput !== null) {
            $request->setEncryptedCustomerInput($this->encryptedCustomerInput);
        }
        else {
            $request->setCard($this->buildCardToken());
        }

        return $request;
    }

    private function buildCardToken() : TokenCardSpecificInput
    {
        $tokenCardSpecificInput = new TokenCardSpecificInput();

        $tokenCardSpecificInput->setData($this->buildTokenData());

        return $tokenCardSpecificInput;
    }

    private function buildTokenData() : TokenData
    {
        $tokenData = new TokenData();

        $tokenData->setCard($this->buildCard());

        if ($this->cobrandSelectionIndicator !== null) {
            $tokenData->setCobrandSelectionIndicator($this->cobrandSelectionIndicator);
        }

        return $tokenData;
    }

    private function buildCard(): Card
    {
        $card = new Card();

        $card->setCardNumber($this->cardNumber);
        $card->setCardholderName($this->cardholderName);
        $card->setExpiryDate($this->expiryDate);
        $card->setCvv($this->cvv);

        return $card;
    }
}
