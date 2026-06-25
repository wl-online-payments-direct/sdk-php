<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Products;

use OnlinePayments\Sdk\Merchant\Products\GetProductDirectoryParams;

class GetProductDirectoryParamsBuilder
{
    private ?string $countryCode = null;
    private ?string $currencyCode = null;

    public static function create(): self
    {
        return new self();
    }

    public function withCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function withCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function build(): GetProductDirectoryParams
    {
        $params = new GetProductDirectoryParams();

        if ($this->countryCode !== null) {
            $params->setCountryCode($this->countryCode);
        }

        if ($this->currencyCode !== null) {
            $params->setCurrencyCode($this->currencyCode);
        }

        return $params;
    }
}
