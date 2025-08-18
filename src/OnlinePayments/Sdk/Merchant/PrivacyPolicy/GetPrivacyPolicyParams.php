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
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

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
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return array
     */
    public function toArray(): array
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
