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
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $currencyCode;

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
        return $array;
    }
}
