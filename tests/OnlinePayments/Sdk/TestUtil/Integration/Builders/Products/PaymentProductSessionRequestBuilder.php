<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Products;

use OnlinePayments\Sdk\Domain\PaymentProductSession302SpecificInput;
use OnlinePayments\Sdk\Domain\PaymentProductSessionRequest;

class PaymentProductSessionRequestBuilder
{
    private string $displayName = 'Test Merchant';
    private string $domainName = 'example.com';

    public static function create(): self
    {
        return new self();
    }

    public function withDisplayName(string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function withDomainName(string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function build(): PaymentProductSessionRequest
    {
        $input = new PaymentProductSession302SpecificInput();
        $input->setDisplayName($this->displayName);
        $input->setDomainName($this->domainName);

        $request = new PaymentProductSessionRequest();
        $request->setPaymentProductSession302SpecificInput($input);

        return $request;
    }
}
