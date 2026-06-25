<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\CofSeries;

use OnlinePayments\Sdk\Domain\CardDataWithoutCvv;
use OnlinePayments\Sdk\Domain\ImportCofSeriesRequest;

class ImportCofSeriesRequestBuilder
{
    private string $cardNumber = '4567350000427977';
    private string $cardholderName = 'John Doe';
    private string $expiryDate = '1230';
    private string $currencyCode = 'EUR';
    private ?int $paymentProductId = 1;
    private ?string $schemeReferenceData = 'test_scheme_reference';
    private ?string $tokenId = null;
    private ?string $transactionLinkIdentifier = null;

    public static function create(): self
    {
        return new self();
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

    public function withCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function withPaymentProductId(?int $paymentProductId): self
    {
        $this->paymentProductId = $paymentProductId;
        return $this;
    }

    public function withSchemeReferenceData(?string $schemeReferenceData): self
    {
        $this->schemeReferenceData = $schemeReferenceData;
        return $this;
    }

    public function withTokenId(string $tokenId): self
    {
        $this->tokenId = $tokenId;
        return $this;
    }

    public function withTransactionLinkIdentifier(string $transactionLinkIdentifier): self
    {
        $this->transactionLinkIdentifier = $transactionLinkIdentifier;
        return $this;
    }

    public function build(): ImportCofSeriesRequest
    {
        $request = new ImportCofSeriesRequest();

        $request->setCurrencyCode($this->currencyCode);
        $request->setPaymentProductId($this->paymentProductId);
        $request->setSchemeReferenceData($this->schemeReferenceData);

        if ($this->tokenId !== null) {
            $request->setTokenId($this->tokenId);
        } else {
            $card = new CardDataWithoutCvv();
            $card->setCardNumber($this->cardNumber);
            $card->setCardholderName($this->cardholderName);
            $card->setExpiryDate($this->expiryDate);
            $request->setCard($card);
        }

        if ($this->transactionLinkIdentifier !== null) {
            $request->setTransactionLinkIdentifier($this->transactionLinkIdentifier);
        }

        return $request;
    }
}
