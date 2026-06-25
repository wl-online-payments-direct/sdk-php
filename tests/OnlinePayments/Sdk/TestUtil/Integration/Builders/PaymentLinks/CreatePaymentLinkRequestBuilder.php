<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\PaymentLinks;

use DateTime;
use OnlinePayments\Sdk\Communication\UuidGenerator;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Domain\CreatePaymentLinkRequest;
use OnlinePayments\Sdk\Domain\Order;
use OnlinePayments\Sdk\Domain\OrderReferences;
use OnlinePayments\Sdk\Domain\PaymentLinkSpecificInput;

class CreatePaymentLinkRequestBuilder
{
    private int $amount = 1000;
    private string $currency = 'EUR';

    private bool $displayQRCode = true;
    private bool $isReusableLink = true;
    private ?DateTime $expirationDate = null;
    private string $description = 'Test payment link';
    private string $recipientName = 'Wile E. Coyote';
    private string $merchantReference;

    public static function create(): self
    {
        $builder = new self();

        $builder->merchantReference = $builder->generateMerchantReference();
        $builder->expirationDate = new DateTime('+1 day');

        return $builder;
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

    public function withDisplayQRCode(bool $displayQRCode): self
    {
        $this->displayQRCode = $displayQRCode;
        return $this;
    }

    public function withReusableLink(bool $reusableLink): self
    {
        $this->isReusableLink = $reusableLink;
        return $this;
    }

    public function withExpirationDate(DateTime $date): self
    {
        $this->expirationDate = $date;
        return $this;
    }

    public function withDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function withRecipientName(string $recipientName): self
    {
        $this->recipientName = $recipientName;
        return $this;
    }

    public function withMerchantReference(string $merchantReference): self
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }

    public function build(): CreatePaymentLinkRequest
    {
        $request = new CreatePaymentLinkRequest();
        $request->setOrder($this->buildOrder());
        $request->setDisplayQRCode($this->displayQRCode);
        $request->setIsReusableLink($this->isReusableLink);
        $request->setPaymentLinkSpecificInput($this->buildPaymentLinkSpecificInput());

        return $request;
    }

    private function buildOrder(): Order
    {
        $order = new Order();
        $order->setAmountOfMoney($this->buildAmountOfMoney());
        $order->setReferences($this->buildOrderReferences());

        return $order;
    }

    private function buildAmountOfMoney(): AmountOfMoney
    {
        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount($this->amount);
        $amountOfMoney->setCurrencyCode($this->currency);

        return $amountOfMoney;
    }

    private function buildOrderReferences(): OrderReferences
    {
        $references = new OrderReferences();
        $references->setMerchantReference($this->merchantReference);

        return $references;
    }

    private function buildPaymentLinkSpecificInput(): PaymentLinkSpecificInput
    {
        $input = new PaymentLinkSpecificInput();
        $input->setDescription($this->description);
        $input->setExpirationDate($this->expirationDate);
        $input->setRecipientName($this->recipientName);

        return $input;
    }

    private function generateMerchantReference(): string
    {
        return 'Ref-' . UuidGenerator::generatedUuid();
    }
}
