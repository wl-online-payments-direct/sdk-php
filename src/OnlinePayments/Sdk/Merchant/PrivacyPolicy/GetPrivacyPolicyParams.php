<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\PrivacyPolicy;


use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get Privacy Policy
 *
 * @package OnlinePayments\Sdk\Merchant\PrivacyPolicy
 */
class GetPrivacyPolicyParams extends RequestObject
{
    /**
     * @var string
     */
    public $locale;

    /**
     * @var int
     */
    public $paymentProductId;

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
    public function getPaymentProductId()
    {
        return $this->paymentProductId;
    }

    /**
     * @param int
     */
    public function setPaymentProductId($value)
    {
        $this->paymentProductId = $value;
    }

    /**
     * @param int
     */
    public function addPaymentProductId($value)
    {
        if (is_null($this->paymentProductId)) {
            $this->paymentProductId = [];
        }
        $this->paymentProductId[] = $value;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        if ($this->locale != null) {
            $array['locale'] = $this->locale;
        }
        if ($this->paymentProductId != null) {
            $array['paymentProductId'] = $this->paymentProductId;
        }
        return $array;
    }
}
