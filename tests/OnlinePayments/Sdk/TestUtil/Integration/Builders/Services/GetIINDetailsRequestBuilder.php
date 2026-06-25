<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Services;

use OnlinePayments\Sdk\Domain\GetIINDetailsRequest;

class GetIINDetailsRequestBuilder
{
    private string $bin = '401200';

    public static function create(): self
    {
        return new self();
    }

    public function withBin(string $bin): self
    {
        $this->bin = $bin;
        return $this;
    }

    public function build(): GetIINDetailsRequest
    {
        $request = new GetIINDetailsRequest();
        $request->setBin($this->bin);

        return $request;
    }
}
