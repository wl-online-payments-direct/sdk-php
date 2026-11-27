<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\MerchantBatch;

use OnlinePayments\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payments report
 *
 * @package OnlinePayments\Sdk\Merchant\MerchantBatch
 */
class GetPaymentsReportParams extends RequestObject
{
    /**
     * @var string|null
     */
    public ?string $cursor = null;

    /**
     * @var int|null
     */
    public ?int $limit = null;

    /**
     * @return string|null
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * @param string|null $value
     */
    public function setCursor(?string $value): void
    {
        $this->cursor = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withCursor(?string $value): static
    {
        $this->cursor = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $value
     */
    public function setLimit(?int $value): void
    {
        $this->limit = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withLimit(?int $value): static
    {
        $this->limit = $value;
        return $this;
    }

    /**
     * @return array<string, string|int|string[]>
     */
    public function toArray(): array
    {
        $array = [];
        if ($this->cursor !== null) {
            $array['cursor'] = $this->cursor;
        }
        if ($this->limit !== null) {
            $array['limit'] = $this->limit;
        }
        return $array;
    }
}
