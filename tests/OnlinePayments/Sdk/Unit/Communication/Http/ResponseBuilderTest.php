<?php

namespace OnlinePayments\Sdk\Unit\Communication\Http;

use OnlinePayments\Sdk\Communication\ResponseBuilder;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group http
 */
class ResponseBuilderTest extends TestCase
{
    public function testResponseBuilder_SetHttpStatusCode_ValidCode_ResponseContainsSameStatusCode(): void
    {
        $builder = new ResponseBuilder();
        $builder->setHttpStatusCode(200);

        $response = $builder->getResponse();

        $this->assertEquals(200, $response->getHttpStatusCode());
    }

    public function testResponseBuilder_SetHeaders_ValidHeaders_ResponseContainsSameHeaders(): void
    {
        $builder = new ResponseBuilder();
        $headers = [
            'Content-Type' => 'application/json',
            'X-Test' => 'value'
        ];

        $builder->setHeaders($headers);
        $response = $builder->getResponse();

        $this->assertEquals($headers, $response->getHeaders());
    }

    public function testResponseBuilder_SetBody_ValidBody_ResponseContainsSameBody(): void
    {
        $builder = new ResponseBuilder();
        $body = '{"status":"ok"}';

        $builder->setBody($body);
        $response = $builder->getResponse();

        $this->assertEquals($body, $response->getBody());
    }

    public function testResponseBuilder_AppendBody_MultipleChunks_ResponseContainsConcatenatedBody(): void
    {
        $builder = new ResponseBuilder();

        $builder->appendBody('Hello ');
        $builder->appendBody('World');

        $response = $builder->getResponse();

        $this->assertEquals('Hello World', $response->getBody());
    }

    public function testResponseBuilder_SetAllFields_ResponseReturnedWithExpectedValues(): void
    {
        $builder = new ResponseBuilder();

        $statusCode = 201;
        $headers = ['Content-Type' => 'application/json'];
        $body = '{"created":true}';

        $builder->setHttpStatusCode($statusCode);
        $builder->setHeaders($headers);
        $builder->setBody($body);

        $response = $builder->getResponse();

        $this->assertEquals($statusCode, $response->getHttpStatusCode());
        $this->assertEquals($headers, $response->getHeaders());
        $this->assertEquals($body, $response->getBody());
    }
}
