<?php

namespace OnlinePayments\Sdk\Unit\Communication\Serialization;

use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ConnectionResponseInterface;
use OnlinePayments\Sdk\Communication\HttpObfuscator;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group serialization
 */
class HttpObfuscatorTest extends TestCase
{
    /**
     * @dataProvider rawObfuscatedRequestProvider
     * @param $requestMethod
     * @param $relativeRequestUri
     * @param array $requestHeaders
     * @param string $requestBody
     * @param string $expectedRawObfuscatedRequest
     */
    public function testHttpObfuscator_GetRawObfuscatedRequest_ObfuscatesRequestCorrectly(
        $requestMethod,
        $relativeRequestUri,
        array $requestHeaders,
        string $requestBody,
        string $expectedRawObfuscatedRequest
    )
    {
        $httpObfuscator = new HttpObfuscator();
        $this->assertEquals(
            $expectedRawObfuscatedRequest,
            $httpObfuscator->getRawObfuscatedRequest($requestMethod, $relativeRequestUri, $requestHeaders, $requestBody)
        );
    }

    /**
     * @dataProvider rawObfuscatedResponseProvider
     * @param ConnectionResponseInterface $response
     * @param string $expectedRawObfuscatedResponse
     */
    public function testHttpObfuscator_GetRawObfuscatedResponse_ObfuscatesResponseCorrectly(ConnectionResponseInterface $response, string $expectedRawObfuscatedResponse)
    {
        $httpObfuscator = new HttpObfuscator();
        $this->assertEquals(
            $expectedRawObfuscatedResponse,
            $httpObfuscator->getRawObfuscatedResponse($response)
        );
    }

    /**
     * @return array
     */
    public function rawObfuscatedRequestProvider(): array
    {
        return array(
            array(
                'GET',
                '/foo',
                array(),
                '',
                "GET /foo HTTP/1.1"
            ),
            array(
                'DELETE',
                '/foo',
                array('Content-Type' => 'application/json', 'Authorization' => '123'),
                '',
                "DELETE /foo HTTP/1.1" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . "Authorization: ********"
            ),
            array(
                'POST',
                '/foo',
                array('Content-Type' => 'application/json'),
                json_encode(array('name' => 'bar', 'value' => 'bar'), JSON_PRETTY_PRINT),
                "POST /foo HTTP/1.1" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . PHP_EOL .
                json_encode(array('name' => 'bar', 'value' => '***'), JSON_PRETTY_PRINT)
            ),
            array(
                'PUT',
                '/foo',
                array('Content-Type' => 'application/json', 'Authorization' => '123'),
                json_encode(array('value' => 'baz'), JSON_PRETTY_PRINT),
                "PUT /foo HTTP/1.1" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . "Authorization: ********" . PHP_EOL . PHP_EOL .
                json_encode(array('value' => '***'), JSON_PRETTY_PRINT)
            ),
            array(
                'PUT',
                '/foo',
                array('Content-Type' => 'text/html', 'Authorization' => '123'),
                json_encode(array('value' => 'baz'), JSON_PRETTY_PRINT),
                "PUT /foo HTTP/1.1" . PHP_EOL . "Content-Type: text/html" . PHP_EOL . "Authorization: ********" . PHP_EOL . PHP_EOL .
                json_encode(array('value' => 'baz'), JSON_PRETTY_PRINT)
            ),
        );
    }

    /**
     * @return array
     */
    public function rawObfuscatedResponseProvider(): array
    {
        return array(
            array(
                new ConnectionResponse(0, array(), ''),
                ""
            ),
            array(
                new ConnectionResponse(
                    200,
                    array(0 => 'HTTP/1.1 200 OK', 'Content-Type' => 'application/json', 'Authorization' => '123'),
                    ''
                ),
                "HTTP/1.1 200 OK" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . "Authorization: ********"
            ),
            array(
                new ConnectionResponse(
                    404,
                    array(0 => 'HTTP/1.1 404 Not Found', 'Content-Type' => 'text/html'),
                    json_encode(array('value' => 'foo'), JSON_PRETTY_PRINT)
                ),
                "HTTP/1.1 404 Not Found" . PHP_EOL . "Content-Type: text/html" . PHP_EOL . PHP_EOL .
                json_encode(array('value' => 'foo'), JSON_PRETTY_PRINT)
            ),
            array(
                new ConnectionResponse(
                    201,
                    array(0 => 'HTTP/1.1 201 Created', 'Content-Type' => 'application/json'),
                    json_encode(array('name' => 'foo', 'value' => 'baz'), JSON_PRETTY_PRINT)
                ),
                "HTTP/1.1 201 Created" . PHP_EOL . "Content-Type: application/json" . PHP_EOL . PHP_EOL .
                json_encode(array('name' => 'foo', 'value' => '***'), JSON_PRETTY_PRINT)
            ),
        );
    }
}
