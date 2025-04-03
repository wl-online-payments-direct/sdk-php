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
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $isRecurring;

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
        if ($this->amount != null) {
            $array['amount'] = $this->amount;
        }
        if ($this->isRecurring != null) {
            $array['isRecurring'] = $this->isRecurring ? 'true' : 'false';
        }
        return $array;
    }
}
