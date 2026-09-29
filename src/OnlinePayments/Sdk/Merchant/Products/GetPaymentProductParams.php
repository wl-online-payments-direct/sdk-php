<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Products;

use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payment product
 *
 * @package OnlinePayments\Sdk\Merchant\Products
 */
class GetPaymentProductParams extends RequestObject
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
     * @var string|null
    */
    public ?string $locale = null;

    /**
     * @var int|null
    */
    public ?int $amount = null;

    /**
     * @var bool|null
    */
    public ?bool $isRecurring = null;

    /**
     * @var string[]|null
    */
    public ?array $hide = null;

    /**
     * @var string|null
    */
    public ?string $operationType = null;

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
    public function withCountryCode(string $value): GetPaymentProductParams
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
    public function withCurrencyCode(string $value): GetPaymentProductParams
    {
        $this->currencyCode = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $value
    */
    public function setLocale(?string $value): void
    {
        $this->locale = $value;
    }

    /**
     * @param string|null $value
    */
    public function withLocale(string $value): GetPaymentProductParams
    {
        $this->locale = $value;
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
    public function withAmount(int $value): GetPaymentProductParams
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
    public function withIsRecurring(bool $value): GetPaymentProductParams
    {
        $this->isRecurring = $value;
        return $this;
    }

    /**
     * @return string[]|null
    */
    public function getHide(): ?array
    {
        return $this->hide;
    }

    /**
     * @param string[]|null $value
    */
    public function setHide(?array $value): void
    {
        $this->hide = $value;
    }

    /**
     * @param string[]|null $value
    */
    public function withHide(array $value): GetPaymentProductParams
    {
        $this->hide = $value;
        return $this;
    }

    /**
     * @param string[]|null $value
    */
    public function addHide(array $value): void
    {
        if (is_null($this->hide)) {
            $this->hide = [];
        }
        $this->hide[] = $value;
    }

    /**
     * @return string|null
    */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @param string|null $value
    */
    public function setOperationType(?string $value): void
    {
        $this->operationType = $value;
    }

    /**
     * @param string|null $value
    */
    public function withOperationType(string $value): GetPaymentProductParams
    {
        $this->operationType = $value;
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
        if ($this->locale != null) {
            $array['locale'] = $this->locale;
        }
        if ($this->amount != null) {
            $array['amount'] = $this->amount;
        }
        if ($this->isRecurring != null) {
            $array['isRecurring'] = $this->isRecurring ? 'true' : 'false';
        }
        if ($this->hide != null) {
            $array['hide'] = [];
            foreach ($this->hide as $element) {
                if ($element != null) {
                    $array['hide'][] = $element;
                }
            }
        }
        if ($this->operationType != null) {
            $array['operationType'] = $this->operationType;
        }
        return $array;
    }
}
