<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Products;


use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payment products
 *
 * @package OnlinePayments\Sdk\Merchant\Products
 */
class GetPaymentProductsParams extends RequestObject
{
    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $isRecurring;

    /**
     * @var string[]
     */
    public $hide;

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @param string
     */
    public function addCountryCode($value)
    {
        if (is_null($this->countryCode)) {
            $this->countryCode = [];
        }
        $this->countryCode[] = $value;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string
     */
    public function setCurrencyCode($value)
    {
        $this->currencyCode = $value;
    }

    /**
     * @param string
     */
    public function addCurrencyCode($value)
    {
        if (is_null($this->currencyCode)) {
            $this->currencyCode = [];
        }
        $this->currencyCode[] = $value;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string
     */
    public function setLocale($value)
    {
        $this->locale = $value;
    }

    /**
     * @param string
     */
    public function addLocale($value)
    {
        if (is_null($this->locale)) {
            $this->locale = [];
        }
        $this->locale[] = $value;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @param int
     */
    public function addAmount($value)
    {
        if (is_null($this->amount)) {
            $this->amount = [];
        }
        $this->amount[] = $value;
    }

    /**
     * @return bool
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * @param bool
     */
    public function setIsRecurring($value)
    {
        $this->isRecurring = $value;
    }

    /**
     * @param bool
     */
    public function addIsRecurring($value)
    {
        if (is_null($this->isRecurring)) {
            $this->isRecurring = [];
        }
        $this->isRecurring[] = $value;
    }

    /**
     * @return string[]
     */
    public function getHide()
    {
        return $this->hide;
    }

    /**
     * @param string[]
     */
    public function setHide($value)
    {
        $this->hide = $value;
    }

    /**
     * @param string[]
     */
    public function addHide($value)
    {
        if (is_null($this->hide)) {
            $this->hide = [];
        }
        $this->hide[] = $value;
    }

    /**
     * @return array
     */
    public function toArray()
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
        return $array;
    }
}
