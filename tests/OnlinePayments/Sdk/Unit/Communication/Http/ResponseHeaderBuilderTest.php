<?php

namespace OnlinePayments\Sdk\Unit\Communication\Http;

use OnlinePayments\Sdk\Communication\ResponseHeaderBuilder;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group http
 */
class ResponseHeaderBuilderTest extends TestCase
{
    public function testResponseHeaderBuilder_AppendSingleHeader_GetHeadersReturnsParsedHeader(): void
    {
        $builder = new ResponseHeaderBuilder();

        $builder->append("Content-Type: application/json\r\n");

        $headers = $builder->getHeaders();

        $this->assertArrayHasKey('Content-Type', $headers);
        $this->assertEquals('application/json', $headers['Content-Type']);
    }

    public function testResponseHeaderBuilder_AppendMultipleHeaders_GetHeadersReturnsAllParsedHeaders(): void
    {
        $builder = new ResponseHeaderBuilder();

        $builder->append("Content-Type: application/json\r\n");
        $builder->append("X-Test: value\r\n");

        $headers = $builder->getHeaders();

        $this->assertCount(2, $headers);
        $this->assertEquals('application/json', $headers['Content-Type']);
        $this->assertEquals('value', $headers['X-Test']);
    }

    public function testResponseHeaderBuilder_GetContentType_ContentTypeHeaderPresent_ReturnsContentType(): void
    {
        $builder = new ResponseHeaderBuilder();

        $builder->append("Content-Type: application/json\r\n");

        $contentType = $builder->getContentType();

        $this->assertEquals('application/json', $contentType);
    }

    public function testResponseHeaderBuilder_GetContentType_HeaderNotPresent_ReturnsNull(): void
    {
        $builder = new ResponseHeaderBuilder();

        $builder->append("X-Test: value\r\n");

        $contentType = $builder->getContentType();

        $this->assertNull($contentType);
    }

    public function testResponseHeaderBuilder_GetContentType_HeaderCaseInsensitive_ReturnsContentType(): void
    {
        $builder = new ResponseHeaderBuilder();

        $builder->append("content-type: application/xml\r\n");

        $contentType = $builder->getContentType();

        $this->assertEquals('application/xml', $contentType);
    }

    public function testResponseHeaderBuilder_AppendAfterHeadersParsed_GetHeadersReturnsUpdatedHeaders(): void
    {
        $builder = new ResponseHeaderBuilder();

        $builder->append("Content-Type: application/json\r\n");
        $builder->getHeaders();

        $builder->append("X-Test: value\r\n");

        $headers = $builder->getHeaders();

        $this->assertCount(2, $headers);
        $this->assertEquals('value', $headers['X-Test']);
    }
}
