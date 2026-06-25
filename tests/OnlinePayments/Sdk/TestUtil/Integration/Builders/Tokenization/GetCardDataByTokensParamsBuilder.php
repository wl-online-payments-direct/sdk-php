<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Tokenization;

use OnlinePayments\Sdk\Merchant\Tokenization\GetCardDataByTokensParams;

class GetCardDataByTokensParamsBuilder
{
    private ?array $tokens = [];

    public static function create(): self
    {
        return new self();
    }

    public function withTokens(?array $tokens): self
    {
        $this->tokens = $tokens;
        return $this;
    }

    public function build(): GetCardDataByTokensParams
    {
        $getCardDataByTokensParams = new GetCardDataByTokensParams();

        $getCardDataByTokensParams->setTokens($this->tokens);

        return $getCardDataByTokensParams;
    }
}
