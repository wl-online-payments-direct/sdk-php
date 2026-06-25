<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Sessions;

use OnlinePayments\Sdk\Domain\SessionRequest;

class SessionRequestBuilder
{
    /** @var string[] */
    private array $tokens = [];

    public static function create(): self
    {
        return new self();
    }

    public function withToken(string $token): self
    {
        $this->tokens[] = $token;
        return $this;
    }

    /** @param string[] $tokens */
    public function withTokens(array $tokens): self
    {
        $this->tokens = $tokens;
        return $this;
    }

    public function build(): SessionRequest
    {
        $request = new SessionRequest();
        $request->setTokens(empty($this->tokens) ? null : $this->tokens);

        return $request;
    }
}
