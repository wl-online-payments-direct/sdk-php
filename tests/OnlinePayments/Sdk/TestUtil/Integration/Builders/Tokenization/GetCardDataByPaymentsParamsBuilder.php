<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Tokenization;

use OnlinePayments\Sdk\Merchant\Tokenization\GetCardDataByPaymentsParams;

class GetCardDataByPaymentsParamsBuilder
{
    /** @var string[]|null */
    private ?array $payments = [];

    public static function create(): self
    {
        return new self();
    }

    /**
     * @param string[]|null $payments
     */
    public function withPayments(?array $payments): self
    {
        $this->payments = $payments;
        return $this;
    }

    public function build(): GetCardDataByPaymentsParams
    {
        $getCardDataByPaymentsParams = new GetCardDataByPaymentsParams();

        $getCardDataByPaymentsParams->setPayments($this->payments);

        return $getCardDataByPaymentsParams;
    }
}
