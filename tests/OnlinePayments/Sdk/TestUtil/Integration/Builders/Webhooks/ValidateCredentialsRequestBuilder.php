<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Webhooks;

use OnlinePayments\Sdk\Domain\ValidateCredentialsRequest;

class ValidateCredentialsRequestBuilder
{
    private ?string $key = null;
    private ?string $secret = null;

    public static function create(): self
    {
        return new self();
    }

    public function withKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function withSecret(?string $secret): self
    {
        $this->secret = $secret;
        return $this;
    }

    public function build(): ValidateCredentialsRequest
    {
        $request = new ValidateCredentialsRequest();

        if ($this->key !== null) {
            $request->setKey($this->key);
        }

        if ($this->secret !== null) {
            $request->setSecret($this->secret);
        }

        return $request;
    }
}
