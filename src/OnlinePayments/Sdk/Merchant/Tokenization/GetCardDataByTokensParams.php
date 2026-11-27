<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Tokenization;

use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get sensitive card details by card alias tokens
 *
 * @package OnlinePayments\Sdk\Merchant\Tokenization
 */
class GetCardDataByTokensParams extends RequestObject
{
    /**
     * @var string[]|null
     */
    public ?array $tokens = null;

    /**
     * @return string[]|null
     */
    public function getTokens(): ?array
    {
        return $this->tokens;
    }

    /**
     * @param string[]|null $value
     */
    public function setTokens(?array $value): void
    {
        $this->tokens = $value;
    }

    /**
     * @param string[]|null $value
     * @return $this
     */
    public function withTokens(?array $value): static
    {
        $this->tokens = $value;
        return $this;
    }

    /**
     * @param string $value
     */
    public function addTokens(string $value): void
    {
        if ($this->tokens === null) {
            $this->tokens = [];
        }
        $this->tokens[] = $value;
    }

    /**
     * @return array<string, string|int|string[]>
     */
    public function toArray(): array
    {
        $array = [];
        if ($this->tokens !== null) {
            $array['tokens'] = [];
            foreach ($this->tokens as $element) {
                if ($element !== null) {
                    $array['tokens'][] = $element;
                }
            }
        }
        return $array;
    }
}
