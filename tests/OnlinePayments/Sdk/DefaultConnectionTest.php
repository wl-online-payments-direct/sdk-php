<?php

namespace OnlinePayments\Sdk;

use ErrorException;
use Exception;

/**
 * @group default_connection
 *
 */
class DefaultConnectionTest extends OnlinePaymentsTestCase
{

    /** @var DefaultConnection */
    protected $connection;

    public function setUp()
    {
        parent::setUp();
        $this->connection = new DefaultConnection();
    }

    /**
     * @throws Exception
     */
    public function testTestConnection()
    {
        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $merchantId = $this->getMerchantId();
        $relativeUriPath = '/' . Client::API_VERSION . '/' . $merchantId . '/services/testconnection';
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $requestHeaderGenerator = new RequestHeaderGenerator($communicatorConfiguration, 'GET', $relativeUriPath);
        $requestHeaders = $requestHeaderGenerator->generateRequestHeaders(null);
        $this->connection->get($this->getApiEndpoint() . $relativeUriPath, $requestHeaders, $responseHandler);
        $response = $responseBuilder->getResponse();
        $this->assertEquals(200, $response->getHttpStatusCode());
        $this->assertStringStartsWith('application/json', $response->getHeaderValue('Content-Type'));
        $this->assertEquals(array('result' => 'OK'), json_decode($response->getBody(), true));
    }

    /**
     * @throws Exception
     */
    public function testCurlErrors()
    {
        $expectedErrorCodeByDomain = array(
            '' => CURLE_URL_MALFORMAT,
            'foo://bar' => CURLE_UNSUPPORTED_PROTOCOL,
            'http://non-existing-domain' => CURLE_COULDNT_RESOLVE_HOST,
            'https://expired.badssl.com' => CURLE_SSL_CACERT
        );
        foreach ($expectedErrorCodeByDomain as $domain => $expectedErrorCode) {
            try {
                $responseHandler = function ($httpStatusCode, $data, $headers) {
                };

                $this->connection->get($domain, [], $responseHandler);
            } catch (ErrorException $e) {
                $expectedErrorMessage = 'cURL error ' . $expectedErrorCode;
                if (function_exists('curl_strerror')) {
                    $expectedErrorMessage .= ' (' . curl_strerror($expectedErrorCode) . ')';
                }
                $this->assertEquals($expectedErrorMessage, $e->getMessage());
                continue;
            }
            $this->fail('An expected exception has not been raised');
        }
    }
}
