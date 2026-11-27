<?php

namespace OnlinePayments\Sdk\Unit\Communication\Serialization;

use OnlinePayments\Sdk\Communication\HttpHeaderHelper;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('communication')]
#[Group('serialization')]
class HttpHeaderHelperTest extends TestCase
{
    public function testHttpHeaderHelper_GenerateStatusLine_ReturnsCorrectRawHeaders(): void
    {
        $rawHeaders = ['HTTP/1.0 200 OK'];
        $headers = ['HTTP/1.0 200 OK'];
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseStatusLine_ReturnsCorrectParsedHeaders(): void
    {
        $rawHeaders = ['HTTP/1.0 200 OK'];
        $headers = ['HTTP/1.0 200 OK'];
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateContentTypeHeader_ReturnsCorrectRawHeaders(): void
    {
        $rawHeaders = ['Content-Type: text/html'];
        $headers = ['Content-Type' => 'text/html'];
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseContentTypeHeader_ReturnsCorrectParsedHeaders(): void
    {
        $rawHeaders = ['Content-Type: text/html'];
        $headers = ['Content-Type' => 'text/html'];
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateDuplicateHeader_ReturnsCorrectRawHeaders(): void
    {
        $rawHeaders = ['Cache-Control: no-cache', 'Cache-Control: no-store'];
        $headers = ['Cache-Control' => ['no-cache', 'no-store']];
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseDuplicateHeader_ReturnsCorrectParsedHeaders(): void
    {
        $rawHeaders = ['Cache-Control: no-cache', 'Cache-Control: no-store'];
        $headers = ['Cache-Control' => ['no-cache', 'no-store']];
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    #[DataProvider('lineBreakProvider')]
    public function testHttpHeaderHelper_GenerateHeaderWithLineBreak_ThrowsInvalidArgumentException(string $value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        HttpHeaderHelper::generateRawHeaders(['Powered-By' => $value]);
    }

    public function testHttpHeaderHelper_GenerateHeaderWithLineBreakInName_ThrowsInvalidArgumentException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        HttpHeaderHelper::generateRawHeaders(["X-Test\r\nInjected" => 'value']);
    }

    /**
     * @return array<string, array{0: string}>
     */
    public static function lineBreakProvider(): array
    {
        return [
            'CRLF' => ["Acme\r\nInc."],
            'CR' => ["Acme\rInc."],
            'LF' => ["Acme\nInc."],
        ];
    }

    public function testHttpHeaderHelper_ParseMultiLineHeader_ReturnsCorrectParsedHeaders(): void
    {
        $rawHeaders = ['Powered-By: Acme', "\tInc."];
        $headers = ['Powered-By' => "Acme\r\n\tInc."];
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateStatusLineAndContentTypeHeader_ReturnsCorrectRawHeaders(): void
    {
        $rawHeaders = ['HTTP/1.0 200 OK', 'Content-Type: text/html'];
        $headers = ['HTTP/1.0 200 OK', 'Content-Type' => 'text/html'];
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseStatusLineAndContentTypeHeader_ReturnsCorrectParsedHeaders(): void
    {
        $rawHeaders = ['HTTP/1.0 200 OK', 'Content-Type: text/html'];
        $headers = ['HTTP/1.0 200 OK', 'Content-Type' => 'text/html'];
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateParseStatusLineAndSimpleHeaders_ReturnsSameHeaders(): void
    {
        $headers = [
            0 => 'HTTP/1.1 200 OK',
            'Date' => 'Wed, 23 Mar 2016 20:43:06 GMT',
            'Content-Type' => 'application/json',
            'X-Powered-By' => 'Servlet/3.0 JSP/2.2',
        ];

        $rawHeader = HttpHeaderHelper::generateRawHeaders($headers);
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeader));
    }

    public function testHttpHeaderHelper_GenerateParseStatusLineAndDuplicateHeaders_ReturnsSameHeaders(): void
    {
        $headers = [
            0 => 'HTTP/1.1 200 OK',
            'Date' => 'Wed, 23 Mar 2016 20:43:06 GMT',
            'Content-Type' => 'application/json',
            'Cache-Control' => ['no-cache', 'no-store'],
        ];

        $rawHeader = HttpHeaderHelper::generateRawHeaders($headers);
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeader));
    }

    public function testHttpHeaderHelper_ParseRawHeaders_WithContinuationArrayAndStringBranches(): void
    {
        $rawHeaders = [
            'Cache-Control: no-cache',
            "\tno-store",
            'Cache-Control: must-revalidate',
            "\tmax-age=0",
        ];

        $result = HttpHeaderHelper::parseRawHeaders($rawHeaders);

        $this->assertIsArray($result['Cache-Control']);
        $this->assertCount(2, $result['Cache-Control']);
    }
}
