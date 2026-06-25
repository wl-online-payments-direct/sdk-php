<?php

namespace OnlinePayments\Sdk\Integration\Services;

use OnlinePayments\Sdk\Merchant\Services\ServicesClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Services\CalculateSurchargeRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class SurchargeCalculationTest extends TestCase
{
    private ServicesClientInterface $servicesClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->servicesClient = $this->client->merchant($this->getMerchantId())->services();
    }

    public function testSurchargeCalculation_WithValidRequest_ReturnsResponse(): void
    {
        $this->markTestSkipped('Test is skipped because the Surcharge Calculation feature is not enabled for the test merchant.');

        $request = CalculateSurchargeRequestBuilder::create()
            ->withCardNumber("5425233430109903")
            ->build();

        $response = $this->servicesClient->surchargeCalculation($request);

        $this->assertNotNull($response);
        $this->assertNotNull($response->getSurcharges());
    }

    public function testSurchargeCalculation_WithMissingCardSource_ThrowsValidationException(): void
    {
        $request = CalculateSurchargeRequestBuilder::create()->build();

        try {
            $this->servicesClient->surchargeCalculation($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }

    public function testSurchargeCalculation_WithInvalidAmount_ThrowsValidationException(): void
    {
        $request = CalculateSurchargeRequestBuilder::create()
            ->withAmount(-1000)
            ->build();

        try {
            $this->servicesClient->surchargeCalculation($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
