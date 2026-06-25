<?php

namespace OnlinePayments\Sdk\Integration\MerchantBatch;

use OnlinePayments\Sdk\Merchant\MerchantBatch\MerchantBatchClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class ProcessBatchTransactionsTest extends TestCase
{
    private const NON_EXISTING_MERCHANT_BATCH_REFERENCE = 'non-existing-batch-reference';

    private MerchantBatchClientInterface $merchantBatchClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->merchantBatchClient = $this->client->merchant($this->getMerchantId())->merchantBatch();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testProcessBatch_ExistingMerchantBatchReference_ReturnsAccepted()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $this->merchantBatchClient->processBatch($reference);

        $statusResponse = $this->merchantBatchClient->getBatchStatus($reference);

        $this->assertNotEmpty($statusResponse->getStatus());
    }

    public function testProcessBatch_NonExistingMerchantBatchReference_ReturnsReferenceException()
    {
        try {
            $this->merchantBatchClient->processBatch(self::NON_EXISTING_MERCHANT_BATCH_REFERENCE);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
