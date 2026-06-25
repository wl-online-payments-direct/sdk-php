<?php

namespace OnlinePayments\Sdk\Integration\CofSeries;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\CofSeries\CofSeriesClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\CofSeries\ImportCofSeriesRequestBuilder;
use OnlinePayments\Sdk\TestUtil\Integration\Helpers\SdkTestHelper;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class ImportCofSeriesTest extends TestCase
{
    private CofSeriesClientInterface $cofSeriesClient;
    protected SdkTestHelper $sdkHelper;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cofSeriesClient = $this->client->merchant($this->getMerchantId())->cofSeries();

        $this->sdkHelper = new SdkTestHelper($this->client->merchant($this->getMerchantId()));
    }

    public function testImportCofSeries_WithValidInput_ReturnsImportCofSeriesResponse(): void
    {
        $this->markTestSkipped('Test is skipped because the Import COF Series endpoint features are not enabled for the test merchant.');

        $request = ImportCofSeriesRequestBuilder::create()->build();

        $response = $this->cofSeriesClient->importCofSeries($request);

        $this->assertNotNull($response->getPaymentId());
    }

    public function testImportCofSeries_WithValidInput_WithCallContext_ReturnsImportCofSeriesResponse(): void
    {
        $this->markTestSkipped('Test is skipped because the Import COF Series endpoint features are not enabled for the test merchant.');

        $request = ImportCofSeriesRequestBuilder::create()->build();

        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-cof-series-" . uniqid());

        $response = $this->cofSeriesClient->importCofSeries($request, $callContext);

        $this->assertNotNull($response->getPaymentId());
    }

    public function testImportCofSeries_WithValidToken_ReturnsImportCofSeriesResponse(): void
    {
        $this->markTestSkipped('Test is skipped because the Import COF Series endpoint features are not enabled for the test merchant.');

        $tokenId = $this->sdkHelper->createTokenAndGetId();

        $request = ImportCofSeriesRequestBuilder::create()
            ->withTokenId($tokenId)
            ->build();

        $response = $this->cofSeriesClient->importCofSeries($request);

        $this->assertNotNull($response->getPaymentId());
    }

    public function testImportCofSeries_WithInvalidInput_ThrowsValidationException(): void
    {
        $request = ImportCofSeriesRequestBuilder::create()
            ->withSchemeReferenceData(null)
            ->build();

        try {
            $this->cofSeriesClient->importCofSeries($request);
            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testImportCofSeries_WithTransactionLinkIdentifier_ReturnsImportCofSeriesResponse(): void
    {
        $this->markTestSkipped('Test is skipped because the Import COF Series endpoint features are not enabled for the test merchant.');

        $paymentId = $this->sdkHelper->createPaymentAndGetId();

        $request = ImportCofSeriesRequestBuilder::create()
            ->withTransactionLinkIdentifier($paymentId)
            ->build();

        $response = $this->cofSeriesClient->importCofSeries($request);

        $this->assertNotNull($response->getPaymentId());
    }
}
