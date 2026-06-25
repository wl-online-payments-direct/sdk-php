<?php

namespace OnlinePayments\Sdk\Integration\MerchantBatch;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\MerchantBatch\MerchantBatchClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\MerchantBatch\SubmitBatchRequestBodyBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class SubmitBatchTest extends TestCase
{
    private const INVALID_MERCHANT_BATCH_REFERENCE = '';

    private MerchantBatchClientInterface $merchantBatchClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->merchantBatchClient = $this->client->merchant($this->getMerchantId())->merchantBatch();
    }

    public function testSubmitBatch_ValidInput_ReturnsBatchReferenceAndTotalCount()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $request = SubmitBatchRequestBodyBuilder::create()
            ->withCreatePaymentRequests([$createPaymentRequest])
            ->withOperationType("CreatePayment")
            ->withItemCount(1)
            ->build();

        $merchantBatchReference = $request->getHeader()->getMerchantBatchReference();

        $response = $this->merchantBatchClient->submitBatch($request);

        $this->assertNotNull($response->getMerchantBatchReference());
        $this->assertSame($merchantBatchReference, $response->getMerchantBatchReference());
        $this->assertNotNull($response->getTotalCount());
        $this->assertSame(1, $response->getTotalCount());
    }

    public function testSubmitBatch_ValidInputWithCallContext_ReturnsBatchReferenceAndTotalCount()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $request = SubmitBatchRequestBodyBuilder::create()
            ->withCreatePaymentRequests([$createPaymentRequest])
            ->withOperationType("CreatePayment")
            ->withItemCount(1)
            ->build();

        $merchantBatchReference = $request->getHeader()->getMerchantBatchReference();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test-merchant-batch-' . uniqid());

        $response = $this->merchantBatchClient->submitBatch($request, $callContext);

        $this->assertNotNull($response->getMerchantBatchReference());
        $this->assertSame($merchantBatchReference, $response->getMerchantBatchReference());
        $this->assertNotNull($response->getTotalCount());
        $this->assertSame(1, $response->getTotalCount());
    }

    public function testSubmitBatch_InvalidMerchantBatchReference_ReturnsValidationException()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $request = SubmitBatchRequestBodyBuilder::create()
            ->withMerchantBatchReference(self::INVALID_MERCHANT_BATCH_REFERENCE)
            ->withCreatePaymentRequests([$createPaymentRequest])
            ->withOperationType("CreatePayment")
            ->withItemCount(1)
            ->build();

        try {
            $this->merchantBatchClient->submitBatch($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertNotEmpty($e->getErrors());
        }
    }
}
