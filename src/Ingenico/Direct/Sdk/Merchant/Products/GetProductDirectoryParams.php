<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Merchant\Products;

use Ingenico\Direct\Sdk\RequestObject;

/**
 * Query parameters for Get payment product directory
 *
 * @package Ingenico\Direct\Sdk\Merchant\Products
 * @link https://support.direct.ingenico.com/documentation/api/reference#operation/GetProductDirectoryApi Get payment product directory
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
