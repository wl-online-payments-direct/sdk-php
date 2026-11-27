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
     * @return $this
     */
    public function withPayments(?array $value): static
    {
        $this->payments = $value;
        return $this;
    }

    /**
     * @param string $value
     */
    public function addPayments(string $value): void
    {
        if ($this->payments === null) {
            $this->payments = [];
        }
        $this->payments[] = $value;
    }

    /**
     * @return array<string, string|int|string[]>
     */
    public function toArray(): array
    {
        $array = [];
        if ($this->payments !== null) {
            $array['payments'] = [];
            foreach ($this->payments as $element) {
                if ($element !== null) {
                    $array['payments'][] = $element;
                }
            }
        }
        return $array;
    }
}
