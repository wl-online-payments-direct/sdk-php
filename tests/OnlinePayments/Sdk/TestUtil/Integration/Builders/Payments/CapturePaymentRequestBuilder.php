<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Payments;

use OnlinePayments\Sdk\Domain\CapturePaymentRequest;

class CapturePaymentRequestBuilder
{
    private ?int $amount = null;
    private ?bool $isFinal = null;

    public static function create(): self
    {
        return new self();
    }

    public function withAmount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function withIsFinal(bool $isFinal): self
    {
        $this->isFinal = $isFinal;
        return $this;
    }

    public function build(): CapturePaymentRequest
    {
        $request = new CapturePaymentRequest();

        if ($this->amount !== null) {
            $request->setAmount($this->amount);
        }

        if ($this->isFinal !== null) {
            $request->setIsFinal($this->isFinal);
        }

        return $request;
    }
}
