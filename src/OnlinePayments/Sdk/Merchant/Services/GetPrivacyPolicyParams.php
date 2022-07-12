<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Services;

use OnlinePayments\Sdk\RequestObject;

/**
 * Query parameters for Get Privacy Policy
 *
 * @package OnlinePayments\Sdk\Merchant\Services
 */
class GetPrivacyPolicyParams extends RequestObject
{
    // Properties
    /**
     * @var string
     */
    protected $locale;

    /**
     * @var int
     */
    protected $paymentProductId;

    // Methods

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
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }
    /**
     * @var int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = array();
        if ($this->locale !== null) {
            $array["locale"] = $this->locale;
        }
        if ($this->paymentProductId !== null) {
            $array["paymentProductId"] = $this->paymentProductId;
        }
        return $array;
    }
}
