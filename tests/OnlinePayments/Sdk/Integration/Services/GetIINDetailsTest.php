<?php

namespace OnlinePayments\Sdk\Integration\Services;

use OnlinePayments\Sdk\Merchant\Services\ServicesClientInterface;
use OnlinePayments\Sdk\TestUtil\Integration\Builders\Services\GetIINDetailsRequestBuilder;
use OnlinePayments\Sdk\TestUtil\TestCase;
use OnlinePayments\Sdk\ValidationException;

class GetIINDetailsTest extends TestCase
{
    private const INVALID_BIN = '123';

    private ServicesClientInterface $servicesClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->servicesClient = $this->client->merchant($this->getMerchantId())->services();
    }

    public function testGetIINDetails_WithValidBin_ReturnsIINDetails(): void
    {
        $request = GetIINDetailsRequestBuilder::create()->build();

        $response = $this->servicesClient->getIINDetails($request);

        $this->assertNotNull($response->getCardType());
        $this->assertNotNull($response->getPaymentProductId());
        $this->assertNotNull($response->getCardScheme());
    }

    public function testGetIINDetails_WithInvalidBin_ThrowsValidationException(): void
    {
        $request = GetIINDetailsRequestBuilder::create()
            ->withBin(self::INVALID_BIN)
            ->build();

        try {
            $this->servicesClient->getIINDetails($request);

            $this->fail('Expected ValidationException was not thrown');
        } catch (ValidationException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
        }
    }
}
