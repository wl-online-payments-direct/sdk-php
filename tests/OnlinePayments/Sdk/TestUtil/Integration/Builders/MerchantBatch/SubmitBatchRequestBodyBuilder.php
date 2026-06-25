<?php

namespace OnlinePayments\Sdk\TestUtil\Integration\Builders\MerchantBatch;

use OnlinePayments\Sdk\Domain\BatchMetadata;
use OnlinePayments\Sdk\Domain\SubmitBatchRequestBody;

class SubmitBatchRequestBodyBuilder
{
    private string $merchantBatchReference;
    private string $operationType;
    private int $itemCount;
    private array $createPaymentRequests;

    public static function create(): self
    {
        $builder = new SubmitBatchRequestBodyBuilder();

        $builder->merchantBatchReference = $builder->generateMerchantBatchReference();

        return $builder;
    }

    public function withMerchantBatchReference(string $merchantBatchReference): self
    {
        $this->merchantBatchReference = $merchantBatchReference;
        return $this;
    }

    public function withOperationType(string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function withItemCount(int $itemCount): self
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    public function withCreatePaymentRequests(array $createPaymentRequests): self
    {
        $this->createPaymentRequests = $createPaymentRequests;
        return $this;
    }

    public function build(): SubmitBatchRequestBody
    {
        $header = new BatchMetadata();
        $header->setMerchantBatchReference($this->merchantBatchReference);
        $header->setItemCount($this->itemCount);
        $header->setOperationType($this->operationType);

        $body = new SubmitBatchRequestBody();
        $body->setHeader($header);
        $body->setCreatePayments($this->createPaymentRequests);

        return $body;
    }

    private function generateMerchantBatchReference(): string
    {
        return "Ref-" . strtoupper(uniqid());
    }
}
