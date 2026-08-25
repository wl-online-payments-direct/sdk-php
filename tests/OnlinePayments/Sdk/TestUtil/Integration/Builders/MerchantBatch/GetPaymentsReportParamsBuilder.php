<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\MerchantBatch;

use OnlinePayments\Sdk\Merchant\MerchantBatch\GetPaymentsReportParams;

class GetPaymentsReportParamsBuilder
{
    private ?string $cursor = null;
    private ?int $limit = null;

    public static function create(): self
    {
        return new self();
    }

    public function withCursor(?string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function withLimit(?int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function build(): GetPaymentsReportParams
    {
        $params = new GetPaymentsReportParams();

        if ($this->cursor !== null) {
            $params->setCursor($this->cursor);
        }

        if ($this->limit !== null) {
            $params->setLimit($this->limit);
        }

        return $params;
    }
}
