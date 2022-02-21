<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Products;

use OnlinePayments\Sdk\RequestObject;

/**
 * Query parameters for Get payment product directory
 *
 * @package OnlinePayments\Sdk\Merchant\Products
 */
class GetProductDirectoryParams extends RequestObject
{
    // Properties
    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $currencyCode;

    // Methods

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * @var string
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * @var string
     */
    public function setCurrencyCode($value)
    {
        $this->currencyCode = $value;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = array();
        if ($this->countryCode !== null) {
            $array["countryCode"] = $this->countryCode;
        }
        if ($this->currencyCode !== null) {
            $array["currencyCode"] = $this->currencyCode;
        }
        return $array;
    }
}
