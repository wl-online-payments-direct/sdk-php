<?php

namespace OnlinePayments\Sdk\Unit\Communication\Http;

use DateTime;
use DateTimeInterface;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;
use OnlinePayments\Sdk\TestUtil\Unit\TestingConnection;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group http
 */
class IdempotenceTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testIdempotence_RequestHeadersWithKey_ReturnsHeaderWhenSet()
    {
        $callContext = new CallContext();

        $idempotenceKey = 'test';
        $idempotenceKeyHeaderName = 'X-GCS-Idempotence-Key';

        $requestHeaders = $this->getRequestHeaders($callContext);
        $this->assertArrayNotHasKey($idempotenceKeyHeaderName, $requestHeaders);

        $callContext->setIdempotenceKey($idempotenceKey);

        $requestHeaders = $this->getRequestHeaders($callContext);
        $this->assertArrayHasKey($idempotenceKeyHeaderName, $requestHeaders);
        $this->assertEquals($idempotenceKey, $requestHeaders[$idempotenceKeyHeaderName]);
    }

    /**
     * @throws \Exception
     */
    public function testIdempotence_GetWithCallContext_SetsIdempotenceValuesCorrectly()
    {
        $callContext = new CallContext();
        $idempotenceKey = 'test';
        $idempotenceRequestTimestamp = '12345';
        $idempotenceResponseDateTime = new DateTime('2023-10-10T08:00:00Z');
        $callContext->setIdempotenceKey($idempotenceKey);

        $responseHeaders = array(
            'X-GCS-Idempotence-Request-Timestamp' => $idempotenceRequestTimestamp,
            'IdempotencyResponseDatetime' => $idempotenceResponseDateTime->format(DateTimeInterface::ATOM),
            'Content-Type' => 'application/json'
        );

        $responseBody = "{}";
        $response = new ConnectionResponse(201, $responseHeaders, $responseBody);

        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator(), new TestingConnection($response));
        $communicator->get(new ResponseClassMap(), '/', '', null, $callContext);

        $this->assertEquals($idempotenceKey, $callContext->getIdempotenceKey());
        $this->assertEquals($idempotenceRequestTimestamp, $callContext->getIdempotenceRequestTimestamp());
        $this->assertEquals($idempotenceResponseDateTime, $callContext->getIdempotenceResponseDateTime());
    }

    /**
     * @throws \Exception
     */
    private function getRequestHeaders(CallContext $context)
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();

        $capturedHeaders = null;

        $connection = $this->createMock(Connection::class);

        $connection->method('get')
            ->willReturnCallback(function ($url, $headers, $handler) use (&$capturedHeaders) {
                $capturedHeaders = $headers;

                $handler(200, '{}', ['Content-Type' => 'application/json']);
            });

        $communicator = new Communicator(
            $communicatorConfiguration,
            new TestingAuthenticator(),
            $connection
        );

        $responseClassMap = new ResponseClassMap();

        $communicator->get(
            $responseClassMap,
            '/test',
            '',
            null,
            $context
        );

        return $capturedHeaders;
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
