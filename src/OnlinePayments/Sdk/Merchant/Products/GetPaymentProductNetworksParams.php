<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Products;

use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payment product networks
 *
 * @package OnlinePayments\Sdk\Merchant\Products
 */
class GetPaymentProductNetworksParams extends RequestObject
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
     * @var int|null
    */
    public ?int $amount = null;

    /**
     * @var bool|null
    */
    public ?bool $isRecurring = null;

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
    public function withCountryCode(string $value): GetPaymentProductNetworksParams
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
    public function withCurrencyCode(string $value): GetPaymentProductNetworksParams
    {
        $this->currencyCode = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $value
    */
    public function setAmount(?int $value): void
    {
        $this->amount = $value;
    }

    /**
     * @param int|null $value
    */
    public function withAmount(int $value): GetPaymentProductNetworksParams
    {
        $this->amount = $value;
        return $this;
    }

    /**
     * @return bool|null
    */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }

    /**
     * @param bool|null $value
    */
    public function setIsRecurring(?bool $value): void
    {
        $this->isRecurring = $value;
    }

    /**
     * @param bool|null $value
    */
    public function withIsRecurring(bool $value): GetPaymentProductNetworksParams
    {
        $this->isRecurring = $value;
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
        if ($this->amount != null) {
            $array['amount'] = $this->amount;
        }
        if ($this->isRecurring != null) {
            $array['isRecurring'] = $this->isRecurring ? 'true' : 'false';
        }
        return $array;
    }
}
