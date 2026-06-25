<?php

namespace OnlinePayments\Sdk\Integration\MerchantBatch;

use OnlinePayments\Sdk\Merchant\MerchantBatch\MerchantBatchClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;

class GetBatchStatusTest extends TestCase
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

    public function testGetBatchStatus_ExistingMerchantBatchReference_ReturnsBatchStatus()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $response = $this->merchantBatchClient->getBatchStatus($reference);

        $this->assertNotNull($response->getMerchantBatchReference());
        $this->assertSame($reference, $response->getMerchantBatchReference());

        $this->assertNotNull($response->getItemCount());
        $this->assertSame(1, $response->getItemCount());

        $this->assertNotEmpty($response->getOperationType());
        $this->assertNotEmpty($response->getStatus());
    }

    public function testGetBatchStatus_NonExistingMerchantBatchReference_ReturnsReferenceException()
    {
        try {
            $this->merchantBatchClient->getBatchStatus(self::NON_EXISTING_MERCHANT_BATCH_REFERENCE);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }
}
