<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\PrivacyPolicy;

use OnlinePayments\Sdk\Merchant\PrivacyPolicy\GetPrivacyPolicyParams;

class GetPrivacyPolicyParamsBuilder
{
    private string $locale = 'en_US';
    private ?int $paymentProductId = null;

    public static function create(): self
    {
        return new self();
    }

    public function withLocale(string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function withPaymentProductId(?int $paymentProductId): self
    {
        $this->paymentProductId = $paymentProductId;
        return $this;
    }

    public function withEnglishLocale(): self
    {
        $this->locale = 'en_US';
        return $this;
    }

    public function withDutchLocale(): self
    {
        $this->locale = 'nl_NL';
        return $this;
    }

    public function withFrenchLocale(): self
    {
        $this->locale = 'fr_FR';
        return $this;
    }

    public function withGermanLocale(): self
    {
        $this->locale = 'de_DE';
        return $this;
    }

    public function withVisaProduct(): self
    {
        $this->paymentProductId = 1;
        return $this;
    }

    public function withAmericanExpressProduct(): self
    {
        $this->paymentProductId = 2;
        return $this;
    }

    public function withMasterCardProduct(): self
    {
        $this->paymentProductId = 3;
        return $this;
    }

    public function build(): GetPrivacyPolicyParams
    {
        $params = new GetPrivacyPolicyParams();
        $params->setLocale($this->locale);

        if ($this->paymentProductId !== null) {
            $params->setPaymentProductId($this->paymentProductId);
        }

        return $params;
    }
}
