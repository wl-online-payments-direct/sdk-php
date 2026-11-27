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
use OnlinePayments\Sdk\Logging\CommunicatorLogger;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;
use OnlinePayments\Sdk\TestUtil\Unit\TestingConnection;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('communication')]
#[Group('http')]
class IdempotenceTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testIdempotence_RequestHeadersWithKey_ReturnsHeaderWhenSet(): void
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
    public function testIdempotence_GetWithCallContext_SetsIdempotenceValuesCorrectly(): void
    {
        $callContext = new CallContext();
        $idempotenceKey = 'test';
        $idempotenceRequestTimestamp = '12345';
        $idempotenceResponseDateTime = new DateTime('2023-10-10T08:00:00Z');
        $callContext->setIdempotenceKey($idempotenceKey);

        $responseHeaders = [
            'X-GCS-Idempotence-Request-Timestamp' => $idempotenceRequestTimestamp,
            'IdempotencyResponseDatetime' => $idempotenceResponseDateTime->format(DateTimeInterface::ATOM),
            'Content-Type' => 'application/json',
        ];

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
    public function testIdempotence_InvalidResponseDateTimeWithoutLogger_SetsResponseDateTimeToNull(): void
    {
        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test');

        $response = new ConnectionResponse(201, [
            'X-GCS-Idempotence-Request-Timestamp' => '12345',
            'IdempotencyResponseDatetime' => 'not-a-date',
            'Content-Type' => 'application/json',
        ], '{}');

        $communicator = new Communicator($this->getCommunicatorConfiguration(), new TestingAuthenticator(), new TestingConnection($response));
        $communicator->get(new ResponseClassMap(), '/', '', null, $callContext);

        $this->assertEquals('12345', $callContext->getIdempotenceRequestTimestamp());
        $this->assertNull($callContext->getIdempotenceResponseDateTime());
    }

    /**
     * @throws \Exception
     */
    public function testIdempotence_InvalidResponseDateTimeWithLogger_SetsResponseDateTimeToNullAndLogs(): void
    {
        $callContext = new CallContext();
        $callContext->setIdempotenceKey('test');

        $response = new ConnectionResponse(201, [
            'IdempotencyResponseDatetime' => 'not-a-date',
            'Content-Type' => 'application/json',
        ], '{}');

        $logger = new class implements CommunicatorLogger {
            /** @var list<string> */
            public array $messages = [];

            public function log(string $message): void
            {
                $this->messages[] = $message;
            }

            public function logException(string $message, \Throwable $exception): void
            {
                $this->messages[] = $message;
            }
        };

        $communicator = new Communicator($this->getCommunicatorConfiguration(), new TestingAuthenticator(), new TestingConnection($response));
        $communicator->enableLogging($logger);
        $communicator->get(new ResponseClassMap(), '/', '', null, $callContext);

        $this->assertNull($callContext->getIdempotenceResponseDateTime());
        $this->assertCount(1, array_keys(
            $logger->messages,
            "Ignoring invalid value 'not-a-date' for response header 'IdempotencyResponseDatetime'",
            true,
        ));
    }

    /**
     * @return array<string, string>|null
     * @throws \Exception
     */
    private function getRequestHeaders(CallContext $context): ?array
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();

        $capturedHeaders = null;

        $connection = $this->createStub(Connection::class);

        $connection->method('get')
            ->willReturnCallback(function ($url, $headers, $handler) use (&$capturedHeaders) {
                $capturedHeaders = $headers;

                $handler(200, '{}', ['Content-Type' => 'application/json']);
            });

        $communicator = new Communicator(
            $communicatorConfiguration,
            new TestingAuthenticator(),
            $connection,
        );

        $responseClassMap = new ResponseClassMap();

        $communicator->get(
            $responseClassMap,
            '/test',
            '',
            null,
            $context,
        );

        return $capturedHeaders;
    }

    private function getCommunicatorConfiguration(): CommunicatorConfiguration
    {
        return new CommunicatorConfiguration(
            'apiKeyId',
            'secretKey',
            'https://example.com',
            'integrator',
        );
    }
}
