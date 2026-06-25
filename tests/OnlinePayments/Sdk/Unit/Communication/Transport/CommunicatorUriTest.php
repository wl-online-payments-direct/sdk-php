<?php

namespace OnlinePayments\Sdk\Unit\Communication\Transport;

use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\RequestObject;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group transport
 */
class CommunicatorUriTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCommunicator_GetRequestUri_WithoutQueryParameters_ConstructsAbsoluteUri(): void
    {
        $configuration = $this->getCommunicatorConfiguration();

        $capturedUrl = null;

        $connection = $this->createMock(Connection::class);

        $connection->method('get')
            ->willReturnCallback(function ($url, $headers, $handler) use (&$capturedUrl) {
                $capturedUrl = $url;

                $handler(200, '{}', ['Content-Type' => 'application/json']);
            });

        $communicator = new Communicator(
            $configuration,
            new TestingAuthenticator(),
            $connection
        );

        $responseClassMap = new ResponseClassMap();

        $communicator->get($responseClassMap, '/v2/1/payments');

        $this->assertStringEndsWith('/v2/1/payments', $capturedUrl);
    }

    /**
     * @throws \Exception
     */
    public function testCommunicator_GetRequestUri_WithQueryParameters_EncodesCorrectly(): void
    {
        $configuration = $this->getCommunicatorConfiguration();

        $capturedUrl = null;

        $connection = $this->createMock(Connection::class);

        $connection->method('get')
            ->willReturnCallback(function ($url, $headers, $handler) use (&$capturedUrl) {
                $capturedUrl = $url;

                $handler(200, '{}', ['Content-Type' => 'application/json']);
            });

        $communicator = new Communicator(
            $configuration,
            new TestingAuthenticator(),
            $connection
        );

        $requestParameters = new class extends RequestObject {
            public function toArray(): array
            {
                return [
                    'currency' => 'EUR',
                    'merchantId' => '123 456'
                ];
            }
        };

        $responseClassMap = new ResponseClassMap();

        $communicator->get(
            $responseClassMap,
            '/v2/1/payments',
            '',
            $requestParameters
        );

        $this->assertStringContainsString('currency=EUR', $capturedUrl);
        $this->assertStringContainsString('merchantId=123+456', $capturedUrl);
    }

    private function getCommunicatorConfiguration(): CommunicatorConfiguration
    {
        return new CommunicatorConfiguration(
            'apiKeyId',
            'secretKey',
            'https://example.com',
            'integrator'
        );
    }
}
