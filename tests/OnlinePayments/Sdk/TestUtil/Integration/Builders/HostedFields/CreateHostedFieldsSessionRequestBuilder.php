<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedFields;

use OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionRequest;

class CreateHostedFieldsSessionRequestBuilder
{
    private ?string $locale = 'en_US';
    private ?array $tokens = null;

    public static function create(): self
    {
        return new self();
    }

    public function withLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function withTokens(?array $tokens): self
    {
        $this->tokens = $tokens;
        return $this;
    }

    public function build(): CreateHostedFieldsSessionRequest
    {
        $request = new CreateHostedFieldsSessionRequest();
        $request->setLocale($this->locale);

        if ($this->tokens !== null) {
            $request->setTokens($this->tokens);
        }

        return $request;
    }
}
