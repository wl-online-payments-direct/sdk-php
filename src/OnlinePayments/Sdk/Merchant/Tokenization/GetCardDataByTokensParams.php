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
     */
    public function addTokens(array $value): void
    {
        if (is_null($this->tokens)) {
            $this->tokens = [];
        }
        $this->tokens[] = $value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [];
        if ($this->tokens != null) {
            $array['tokens'] = [];
            foreach ($this->tokens as $element) {
                if ($element != null) {
                    $array['tokens'][] = $element;
                }
            }
        }
        return $array;
    }
}
