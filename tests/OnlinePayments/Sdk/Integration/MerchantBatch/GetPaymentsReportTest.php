<?php

namespace OnlinePayments\Sdk\Integration\MerchantBatch;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\MerchantBatch\MerchantBatchClientInterface;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Common\CreatePaymentRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\MerchantBatch\GetPaymentsReportParamsBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetPaymentsReportTest extends TestCase
{
    private const NON_EXISTING_MERCHANT_BATCH_REFERENCE = 'non-existing-batch-reference';
    private const INVALID_CURSOR = 'invalid-cursor-value';
    private const CURSOR_VALUE = 'cursor-value';
    private const LIMIT_BELOW_MINIMUM = -1;
    private const LIMIT_ABOVE_MAXIMUM = 1001;

    private MerchantBatchClientInterface $merchantBatchClient;
    private SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->merchantBatchClient = $this->client->merchant($this->getMerchantId())->merchantBatch();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testGetPaymentsReport_ParamGetters_ReturnExpectedValues()
    {
        $params = GetPaymentsReportParamsBuilder::create()
            ->withCursor(self::CURSOR_VALUE)
            ->withLimit(50)
            ->build();

        $this->assertSame(self::CURSOR_VALUE, $params->getCursor());
        $this->assertSame(50, $params->getLimit());
    }

    public function testGetPaymentsReport_ExistingMerchantBatchReference_ReturnsPaymentsReport()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitAndProcessBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $params = GetPaymentsReportParamsBuilder::create()->build();

        $response = $this->merchantBatchClient->getPaymentsReport($reference, $params);

        $this->assertNotNull($response);
        $this->assertNotNull($response->getPayments());
        $this->assertNotNull($response->getPagination());
    }

    public function testGetPaymentsReport_WithCursorAndLimit_ReturnsResponse()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitAndProcessBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $firstPageParams = GetPaymentsReportParamsBuilder::create()
            ->withLimit(1)
            ->build();

        $firstPage = $this->merchantBatchClient->getPaymentsReport($reference, $firstPageParams);

        $this->assertNotNull($firstPage);
        $this->assertNotNull($firstPage->getPayments());
        $this->assertNotNull($firstPage->getPagination());

        $secondPageParams = GetPaymentsReportParamsBuilder::create()
            ->withLimit(1)
            ->withCursor($firstPage->getPagination()->getNextCursor())
            ->build();

        $secondPage = $this->merchantBatchClient->getPaymentsReport($reference, $secondPageParams);

        $this->assertNotNull($secondPage);
        $this->assertNotNull($secondPage->getPayments());
        $this->assertNotNull($secondPage->getPagination());
    }

    public function testGetPaymentsReport_ExistingMerchantBatchReferenceWithCallContext_ReturnsPaymentsReport()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitAndProcessBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $params = GetPaymentsReportParamsBuilder::create()->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test-merchant-batch-' . uniqid());

        $response = $this->merchantBatchClient->getPaymentsReport($reference, $params, $callContext);

        $this->assertNotNull($response);
        $this->assertNotNull($response->getPayments());
        $this->assertNotNull($response->getPagination());
    }

    public function testGetPaymentsReport_NonExistingMerchantBatchReference_ReturnsReferenceException()
    {
        $params = GetPaymentsReportParamsBuilder::create()->build();

        try {
            $this->merchantBatchClient->getPaymentsReport(self::NON_EXISTING_MERCHANT_BATCH_REFERENCE, $params);

            $this->fail('Expected ReferenceException was not thrown');
        } catch (ReferenceException $e) {
            $this->assertSame(404, $e->getHttpStatusCode());
        }
    }

    public function testGetPaymentsReport_InvalidCursor_ReturnsValidationException()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $params = GetPaymentsReportParamsBuilder::create()
            ->withCursor(self::INVALID_CURSOR)
            ->build();

        try {
            $this->merchantBatchClient->getPaymentsReport($reference, $params);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testGetPaymentsReport_LimitBelowMinimum_ReturnsValidationException()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $params = GetPaymentsReportParamsBuilder::create()
            ->withLimit(self::LIMIT_BELOW_MINIMUM)
            ->build();

        try {
            $this->merchantBatchClient->getPaymentsReport($reference, $params);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testGetPaymentsReport_LimitAboveMaximum_ReturnsValidationException()
    {
        $createPaymentRequest = CreatePaymentRequestBuilder::create()->build();

        $reference = $this->sdkHelper->submitBatchAndGetReference(
            [$createPaymentRequest],
            "CreatePayment",
            1
        );

        $params = GetPaymentsReportParamsBuilder::create()
            ->withLimit(self::LIMIT_ABOVE_MAXIMUM)
            ->build();

        try {
            $this->merchantBatchClient->getPaymentsReport($reference, $params);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
