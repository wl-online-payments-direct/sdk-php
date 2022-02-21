<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Products;

use OnlinePayments\Sdk\RequestObject;

/**
 * Query parameters for Get payment product networks
 *
 * @package OnlinePayments\Sdk\Merchant\Products
 */
class GetPaymentProductNetworksParams extends RequestObject
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

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var bool
     */
    protected $isRecurring;

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
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @var int
     */
    public function setAmount($value)
    {
        $this->amount = $value;
    }

    /**
     * @return bool
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }
    /**
     * @var bool
     */
    public function setIsRecurring($value)
    {
        $this->isRecurring = $value;
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
        if ($this->amount !== null) {
            $array["amount"] = $this->amount;
        }
        if ($this->isRecurring !== null) {
            $array["isRecurring"] = $this->isRecurring ? 'true' : 'false';
        }
        return $array;
    }
}
