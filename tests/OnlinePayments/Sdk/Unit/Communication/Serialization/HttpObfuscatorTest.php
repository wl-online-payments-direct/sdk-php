<?php

namespace OnlinePayments\Sdk\Unit\Communication\Serialization;

use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use OnlinePayments\Sdk\Communication\HttpObfuscator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('communication')]
#[Group('serialization')]
class HttpObfuscatorTest extends TestCase
{
    /**
     * @param string $requestMethod
     * @param string $relativeRequestUri
     * @param array<string, string> $requestHeaders
     * @param string $requestBody
     * @param string $expectedRawObfuscatedRequest
     */
    #[DataProvider('rawObfuscatedRequestProvider')]
    public function testHttpObfuscator_GetRawObfuscatedRequest_ObfuscatesRequestCorrectly(
        string $requestMethod,
        string $relativeRequestUri,
        array $requestHeaders,
        string $requestBody,
        string $expectedRawObfuscatedRequest,
    ): void {
        $httpObfuscator = new HttpObfuscator();
        $this->assertEquals(
            $expectedRawObfuscatedRequest,
            $httpObfuscator->getRawObfuscatedRequest($requestMethod, $relativeRequestUri, $requestHeaders, $requestBody),
        );
    }

    /**
     * @param ConnectionResponseInterface $response
     * @param string $expectedRawObfuscatedResponse
     */
    #[DataProvider('rawObfuscatedResponseProvider')]
    public function testHttpObfuscator_GetRawObfuscatedResponse_ObfuscatesResponseCorrectly(ConnectionResponseInterface $response, string $expectedRawObfuscatedResponse): void
    {
        $httpObfuscator = new HttpObfuscator();
        $this->assertEquals(
            $expectedRawObfuscatedResponse,
            $httpObfuscator->getRawObfuscatedResponse($response),
        );
    }

    /**
     * @return array<int, array{0: string, 1: string, 2: array<string, string>, 3: string|false, 4: string}>
     */
    public static function rawObfuscatedRequestProvider(): array
    {
        return [
            [
                'GET',
                '/foo',
                [],
                '',
                "GET /foo HTTP/1.1",
            ],
            [
                'DELETE',
                '/foo',
                ['Content-Type' => 'application/json', 'Authorization' => '123'],
                '',
                "DELETE /foo HTTP/1.1" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . "Authorization: ********",
            ],
            [
                'POST',
                '/foo',
                ['Content-Type' => 'application/json'],
                json_encode(['name' => 'bar', 'value' => 'bar'], JSON_PRETTY_PRINT),
                "POST /foo HTTP/1.1" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . PHP_EOL .
                json_encode(['name' => 'bar', 'value' => '***'], JSON_PRETTY_PRINT),
            ],
            [
                'PUT',
                '/foo',
                ['Content-Type' => 'application/json', 'Authorization' => '123'],
                json_encode(['value' => 'baz'], JSON_PRETTY_PRINT),
                "PUT /foo HTTP/1.1" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . "Authorization: ********" . PHP_EOL . PHP_EOL .
                json_encode(['value' => '***'], JSON_PRETTY_PRINT),
            ],
            [
                'PUT',
                '/foo',
                ['Content-Type' => 'text/html', 'Authorization' => '123'],
                json_encode(['value' => 'baz'], JSON_PRETTY_PRINT),
                "PUT /foo HTTP/1.1" . PHP_EOL . "Content-Type: text/html" . PHP_EOL . "Authorization: ********" . PHP_EOL . PHP_EOL .
                json_encode(['value' => 'baz'], JSON_PRETTY_PRINT),
            ],
        ];
    }

    /**
     * @return array<int, array{0: ConnectionResponse, 1: string}>
     */
    public static function rawObfuscatedResponseProvider(): array
    {
        return [
            [
                new ConnectionResponse(0, [], ''),
                "",
            ],
            [
                new ConnectionResponse(
                    200,
                    [0 => 'HTTP/1.1 200 OK', 'Content-Type' => 'application/json', 'Authorization' => '123'],
                    '',
                ),
                "HTTP/1.1 200 OK" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . "Authorization: ********",
            ],
            [
                new ConnectionResponse(
                    404,
                    [0 => 'HTTP/1.1 404 Not Found', 'Content-Type' => 'text/html'],
                    json_encode(['value' => 'foo'], JSON_PRETTY_PRINT),
                ),
                "HTTP/1.1 404 Not Found" . PHP_EOL . "Content-Type: text/html" . PHP_EOL . PHP_EOL .
                json_encode(['value' => 'foo'], JSON_PRETTY_PRINT),
            ],
            [
                new ConnectionResponse(
                    201,
                    [0 => 'HTTP/1.1 201 Created', 'Content-Type' => 'application/json'],
                    json_encode(['name' => 'foo', 'value' => 'baz'], JSON_PRETTY_PRINT),
                ),
                "HTTP/1.1 201 Created" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . PHP_EOL .
                json_encode(['name' => 'foo', 'value' => '***'], JSON_PRETTY_PRINT),
            ],
        ];
    }
}
