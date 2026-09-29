<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Products;

use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payment product directory
 *
 * @package OnlinePayments\Sdk\Merchant\Products
 */
class GetProductDirectoryParams extends RequestObject
{
    /**
     * @var string|null
    */
    public ?string $countryCode = null;

    /**
     * @var string|null
    */
    public ?string $currencyCode = null;

    /**
     * @return string|null
    */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $value
    */
    public function setCountryCode(?string $value): void
    {
        $this->countryCode = $value;
    }

    /**
     * @param string|null $value
    */
    public function withCountryCode(string $value): GetProductDirectoryParams
    {
        $this->countryCode = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param string|null $value
    */
    public function setCurrencyCode(?string $value): void
    {
        $this->currencyCode = $value;
    }

    /**
     * @param string|null $value
    */
    public function withCurrencyCode(string $value): GetProductDirectoryParams
    {
        $this->currencyCode = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        if ($this->countryCode != null) {
            $array['countryCode'] = $this->countryCode;
        }
        if ($this->currencyCode != null) {
            $array['currencyCode'] = $this->currencyCode;
        }
        return $array;
    }
}
