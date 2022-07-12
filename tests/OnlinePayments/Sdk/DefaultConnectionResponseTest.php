<?php

namespace OnlinePayments\Sdk;

/**
 * @group default_connection
 *
 */
class DefaultConnectionResponseTest extends OnlinePaymentsTestCase
{
    public function testGetters()
    {
        $httpStatusCode = 123;
        $headers = array(0 => 'Foo', 'Bar' => 'Baz');
        $body = "Foo Bar\nBáz";
        $connectionResponse = new DefaultConnectionResponse($httpStatusCode, $headers, $body);
        $this->assertEquals($httpStatusCode, $connectionResponse->getHttpStatusCode());
        $this->assertEquals($headers, $connectionResponse->getHeaders());
        $this->assertEquals($body, $connectionResponse->getBody());
        $this->assertEquals('Foo', $connectionResponse->getHeaderValue(0));
        $this->assertEquals('Baz', $connectionResponse->getHeaderValue('Bar'));
        $this->assertEquals('Baz', $connectionResponse->getHeaderValue('bar'));
        $this->assertEquals('', $connectionResponse->getHeaderValue(1));
        $this->assertEquals('', $connectionResponse->getHeaderValue('baz'));
    }
}
