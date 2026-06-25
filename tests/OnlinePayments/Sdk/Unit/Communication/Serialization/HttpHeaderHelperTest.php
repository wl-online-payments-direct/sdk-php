<?php

namespace OnlinePayments\Sdk\Unit\Communication\Serialization;

use OnlinePayments\Sdk\Communication\HttpHeaderHelper;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group serialization
 */
class HttpHeaderHelperTest extends TestCase
{
    public function testHttpHeaderHelper_GenerateStatusLine_ReturnsCorrectRawHeaders()
    {
        $rawHeaders = array('HTTP/1.0 200 OK');
        $headers = array('HTTP/1.0 200 OK');
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseStatusLine_ReturnsCorrectParsedHeaders()
    {
        $rawHeaders = array('HTTP/1.0 200 OK');
        $headers = array('HTTP/1.0 200 OK');
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateContentTypeHeader_ReturnsCorrectRawHeaders()
    {
        $rawHeaders = array('Content-Type: text/html');
        $headers = array('Content-Type' => 'text/html');
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseContentTypeHeader_ReturnsCorrectParsedHeaders()
    {
        $rawHeaders = array('Content-Type: text/html');
        $headers = array('Content-Type' => 'text/html');
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateDuplicateHeader_ReturnsCorrectRawHeaders()
    {
        $rawHeaders = array('Cache-Control: no-cache', 'Cache-Control: no-store');
        $headers = array('Cache-Control' => array('no-cache', 'no-store'));
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseDuplicateHeader_ReturnsCorrectParsedHeaders()
    {
        $rawHeaders = array('Cache-Control: no-cache', 'Cache-Control: no-store');
        $headers = array('Cache-Control' => array('no-cache', 'no-store'));
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateMultiLineHeader_ReturnsCorrectRawHeaders()
    {
        $rawHeaders = array('Powered-By: Acme', "\tInc.");
        $headers = array('Powered-By' => "Acme\r\n\tInc.");
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseMultiLineHeader_ReturnsCorrectParsedHeaders()
    {
        $rawHeaders = array('Powered-By: Acme', "\tInc.");
        $headers = array('Powered-By' => "Acme\r\n\tInc.");
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateStatusLineAndContentTypeHeader_ReturnsCorrectRawHeaders()
    {
        $rawHeaders = array('HTTP/1.0 200 OK', 'Content-Type: text/html');
        $headers = array('HTTP/1.0 200 OK', 'Content-Type' => 'text/html');
        $this->assertEquals($rawHeaders, HttpHeaderHelper::generateRawHeaders($headers));
    }

    public function testHttpHeaderHelper_ParseStatusLineAndContentTypeHeader_ReturnsCorrectParsedHeaders()
    {
        $rawHeaders = array('HTTP/1.0 200 OK', 'Content-Type: text/html');
        $headers = array('HTTP/1.0 200 OK', 'Content-Type' => 'text/html');
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeaders));
    }

    public function testHttpHeaderHelper_GenerateParseStatusLineAndSimpleHeaders_ReturnsSameHeaders()
    {
        $headers = array(
            0 => 'HTTP/1.1 200 OK',
            'Date' => 'Wed, 23 Mar 2016 20:43:06 GMT',
            'Content-Type' => 'application/json',
            'X-Powered-By' => 'Servlet/3.0 JSP/2.2'
        );

        $rawHeader = HttpHeaderHelper::generateRawHeaders($headers);
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeader));
    }

    public function testHttpHeaderHelper_GenerateParseStatusLineAndDuplicateHeaders_ReturnsSameHeaders ()
    {
        $headers = array(
            0 => 'HTTP/1.1 200 OK',
            'Date' => 'Wed, 23 Mar 2016 20:43:06 GMT',
            'Content-Type' => 'application/json',
            'Cache-Control' => array('no-cache', 'no-store')
        );

        $rawHeader = HttpHeaderHelper::generateRawHeaders($headers);
        $this->assertEquals($headers, HttpHeaderHelper::parseRawHeaders($rawHeader));
    }

    public function testHttpHeaderHelper_ParseRawHeaders_WithContinuationArrayAndStringBranches(): void
    {
        $rawHeaders = [
            'Cache-Control: no-cache',
            "\tno-store",
            'Cache-Control: must-revalidate',
            "\tmax-age=0"
        ];

        $result = HttpHeaderHelper::parseRawHeaders($rawHeaders);

        $this->assertIsArray($result['Cache-Control']);
        $this->assertCount(2, $result['Cache-Control']);
    }
}
