<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Tokenization;

use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get sensitive card details by card payment identifiers
 *
 * @package OnlinePayments\Sdk\Merchant\Tokenization
 */
class GetCardDataByPaymentsParams extends RequestObject
{
    /**
     * @var string[]|null
     */
    public ?array $payments = null;

    /**
     * @return string[]|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }

    /**
     * @param string[]|null $value
     */
    public function setPayments(?array $value): void
    {
        $this->payments = $value;
    }

    /**
     * @param string[]|null $value
     */
    public function addPayments(array $value): void
    {
        if (is_null($this->payments)) {
            $this->payments = [];
        }
        $this->payments[] = $value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        if ($this->payments != null) {
            $array['payments'] = [];
            foreach ($this->payments as $element) {
                if ($element != null) {
                    $array['payments'][] = $element;
                }
            }
        }
        return $array;
    }
}
