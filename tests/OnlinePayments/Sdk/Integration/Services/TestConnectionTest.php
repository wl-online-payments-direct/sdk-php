<?php

namespace OnlinePayments\Sdk\Integration\Services;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Merchant\Services\ServicesClientInterface;
use OnlinePayments\Sdk\TestUtil\TestCase;

class TestConnectionTest extends TestCase
{
    private ServicesClientInterface $servicesClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->servicesClient = $this->client->merchant($this->getMerchantId())->services();
    }

    public function testTestConnection_ValidRequest_ReturnsResult(): void
    {
        $response = $this->servicesClient->testConnection();

        $this->assertNotNull($response->getResult());
    }

    public function testTestConnection_WithCallContext_ReturnsResult(): void
    {
        $callContext = new CallContext();
        $callContext->setIdempotenceKey("test-services-" . uniqid());

        $response = $this->servicesClient->testConnection($callContext);

        $this->assertNotNull($response->getResult());
    }
}
