<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Mandates;

use OnlinePayments\Sdk\Domain\RevokeMandateRequest;

class RevokeMandateRequestBuilder
{
    private string $revocationReason = 'userAction';

    public static function create(): self
    {
        return new self();
    }

    public function withRevocationReason(string $revocationReason): self
    {
        $this->revocationReason = $revocationReason;
        return $this;
    }

    public function build(): RevokeMandateRequest
    {
        $request = new RevokeMandateRequest();
        $request->setRevocationReason($this->revocationReason);

        return $request;
    }
}
