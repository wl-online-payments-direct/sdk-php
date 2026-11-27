<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\Tokenization;

use OnlinePayments\Sdk\Merchant\Tokenization\GetCardDataByTokensParams;

class GetCardDataByTokensParamsBuilder
{
    /** @var string[]|null */
    private ?array $tokens = [];

    public static function create(): self
    {
        return new self();
    }

    /**
     * @param string[]|null $tokens
     */
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
