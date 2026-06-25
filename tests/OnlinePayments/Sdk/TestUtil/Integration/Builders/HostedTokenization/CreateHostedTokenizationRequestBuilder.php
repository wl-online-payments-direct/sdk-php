<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\HostedTokenization;

use OnlinePayments\Sdk\Domain\CreateHostedTokenizationRequest;

class CreateHostedTokenizationRequestBuilder
{
    private bool $askConsumerConsent = true;
    private string $locale = 'en_US';
    private array $tokens = [];

    public static function create(): self
    {
        return new self();
    }

    public function withAskConsumerConsent(bool $askConsumerConsent): self
    {
        $this->askConsumerConsent = $askConsumerConsent;
        return $this;
    }

    public function withLocale(string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function withToken(string $token): self
    {
        $this->tokens[] = $token;
        return $this;
    }

    public function withTokens(string ...$tokens): self
    {
        $this->tokens = $tokens;
        return $this;
    }

    public function build(): CreateHostedTokenizationRequest
    {
        $request = new CreateHostedTokenizationRequest();
        $request->setAskConsumerConsent($this->askConsumerConsent);
        $request->setLocale($this->locale);

        if (!empty($this->tokens)) {
            $request->setTokens(implode(',', $this->tokens));
        }

        return $request;
    }
}
