<?php

namespace OnlinePayments\Sdk\Integration\Services;

use OnlinePayments\Sdk\Merchant\Services\ServicesClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Services\CurrencyConversionRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetCurrencyConversionQuoteTest extends TestCase
{
    private ServicesClientInterface $servicesClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->servicesClient = $this->client->merchant($this->getMerchantId())->services();
    }

    public function testGetCurrencyConversionQuote_WithValidRequest_ReturnsResponse(): void
    {
        $this->markTestSkipped('Test is skipped because the Currency Conversion feature is not enabled for the test merchant.');

        $request = CurrencyConversionRequestBuilder::create()
            ->withCardNumber("4012000033330026")
            ->build();

        $response = $this->servicesClient->getDccRateInquiry($request);

        $this->assertNotNull($response);
        $this->assertNotNull($response->getResult());
    }

    public function testGetCurrencyConversionQuote_WithMissingCardSourceAndTransaction_ThrowsValidationException(): void
    {
        $request = CurrencyConversionRequestBuilder::create()
            ->withAmount(1000)
            ->build();

        try {
            $this->servicesClient->getDccRateInquiry($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testGetCurrencyConversionQuote_WithInvalidAmount_ThrowsValidationException(): void
    {
        $request = CurrencyConversionRequestBuilder::create()
            ->withAmount(-1000)
            ->build();

        try {
            $this->servicesClient->getDccRateInquiry($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
