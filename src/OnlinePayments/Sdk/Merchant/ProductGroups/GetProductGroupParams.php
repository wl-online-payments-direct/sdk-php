<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\ProductGroups;

use OnlinePayments\Sdk\RequestObject;

/**
 * Query parameters for Get product group
 *
 * @package OnlinePayments\Sdk\Merchant\ProductGroups
 */
class GetProductGroupParams extends RequestObject
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
     * @var string
     */
    protected $locale;

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var bool
     */
    protected $isRecurring;

    /**
     * @var string[]
     */
    protected $hide;

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
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * @var string
     */
    public function setLocale($value)
    {
        $this->locale = $value;
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
     * @return string[]
     */
    public function getHide()
    {
        return $this->hide;
    }
    /**
     * @var string[]
     */
    public function setHide($value)
    {
        $this->hide = $value;
    }
    /**
     * @var string
     */
    public function addHide($value)
    {
        if (is_null($this->hide)) {
            $this->hide = array();
        }
        $this->hide[] = $value;
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
        if ($this->locale !== null) {
            $array["locale"] = $this->locale;
        }
        if ($this->amount !== null) {
            $array["amount"] = $this->amount;
        }
        if ($this->isRecurring !== null) {
            $array["isRecurring"] = $this->isRecurring ? 'true' : 'false';
        }
        if ($this->hide !== null) {
            $array["hide"] = [];
            foreach ($this->hide as $element) {
                if ($element !== null) {
                    $array["hide"][] = $element;
                }
            }
        }
        return $array;
    }
}
