<?php
namespace OnlinePayments\Sdk\Communication;

use ErrorException;
use ReflectionMethod;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\Logging\BodyObfuscator;
use OnlinePayments\Sdk\Logging\HeaderObfuscator;
use OnlinePayments\Sdk\TestCase;
use OnlinePayments\Sdk\TestUtil\TestingAuthenticator;

/**
 * @group default_connection
 *
 */
class DefaultConnectionTest extends TestCase
{
    /** @var DefaultConnection */
    protected $connection;

    public function setUp(): void
    {
        parent::setUp();
        $this->connection = new DefaultConnection();
        $this->connection->setBodyObfuscator(new BodyObfuscator());
        $this->connection->setHeaderObfuscator(new HeaderObfuscator());
    }

    public function test404()
    {
        $this->skipWithoutHttpBin();

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $relativeUriPath = '/status/404';
        $this->connection->get($this->getHttpBinUrl() . $relativeUriPath, [], $responseHandler);
        $this->assertEquals(404, $responseBuilder->getResponse()->getHttpStatusCode());
    }

    public function testSuccess()
    {
        $this->skipWithoutHttpBin();

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        $relativeUriPath = '/get';
        $requestHeaders = $this->getRequestHeaders('GET', $relativeUriPath);
        $this->connection->get($this->getHttpBinUrl() . $relativeUriPath, $requestHeaders, $responseHandler);
        $response = $responseBuilder->getResponse();
        $this->assertEquals(200, $response->getHttpStatusCode());
        $this->assertStringStartsWith('application/json', $response->getHeaderValue('Content-Type'));
        $body = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('url', $body);
        $this->assertEquals($this->getHttpBinUrl() . $relativeUriPath, $body['url']);
    }

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

    public function testConnectTimeoutExceeded()
    {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        // Without this connect timeout, a cURL error 7 (Couldn't connect to server) is thrown instead
        $communicatorConfiguration->setConnectTimeout(1);
        $communicatorConfiguration->setReadTimeout(-1);
        $this->connection = new DefaultConnection($communicatorConfiguration);
        try {
            $responseHandler = function ($httpStatusCode, $data, $headers) {
            };
            $startTime = time();
            $this->connection->get('https://www.example.org:12345', [], $responseHandler);
            $this->fail('Expected connect timeout error');
        } catch (ErrorException $e) {
            $endTime = time();
            $expectedErrorMessage1 = 'cURL error ' . CURLE_OPERATION_TIMEOUTED;
            $expectedErrorMessage2 = 'cURL error ' . CURLE_COULDNT_CONNECT;
            if (function_exists('curl_strerror')) {
                $expectedErrorMessage1 .= ' (' . curl_strerror(CURLE_OPERATION_TIMEOUTED) . ')';
                $expectedErrorMessage2 .= ' (' . curl_strerror(CURLE_COULDNT_CONNECT) . ')';
            }
            $expectedErrorMessagePattern = '/' . preg_quote($expectedErrorMessage1) . '|' . preg_quote($expectedErrorMessage2) . '/';
            $this->assertMatchesRegularExpression($expectedErrorMessagePattern, $e->getMessage());
            $this->assertTrue($endTime - $startTime <= 2, 'Connect timeout should occur within 2 seconds');
        }
    }

    public function testReadTimeoutExceeded()
    {
        $this->skipWithoutHttpBin();

        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setConnectTimeout(-1);
        $communicatorConfiguration->setReadTimeout(1);
        $this->connection = new DefaultConnection($communicatorConfiguration);
        try {
            $responseHandler = function ($httpStatusCode, $data, $headers) {
            };
            $this->connection->get($this->getHttpBinUrl() . '/delay/2', [], $responseHandler);
            $this->fail('Expected read timeout error');
        } catch (ErrorException $e) {
            $expectedErrorMessage = 'cURL error ' . CURLE_OPERATION_TIMEOUTED;
            if (function_exists('curl_strerror')) {
                $expectedErrorMessage .= ' (' . curl_strerror(CURLE_OPERATION_TIMEOUTED) . ')';
            }
            $this->assertEquals($expectedErrorMessage, $e->getMessage());
        }
    }

    /**
     * @dataProvider timeoutAndDelayProvider
     * @param int $timeout
     * @param int $delay
     */
    public function testReadTimeoutNotExceeded($timeout, $delay)
    {
        $this->skipWithoutHttpBin();

        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicatorConfiguration->setConnectTimeout(-1);
        $communicatorConfiguration->setReadTimeout($timeout);
        $this->connection = new DefaultConnection($communicatorConfiguration);
        $responseBuilder = new ResponseBuilder();
        $responseHandler = function ($httpStatusCode, $data, $headers) use ($responseBuilder) {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
        };
        $this->connection->get($this->getHttpBinUrl() .  '/delay/' . $delay, [], $responseHandler);
        $this->assertEquals(200, $responseBuilder->getResponse()->getHttpStatusCode());
    }

    public function timeoutAndDelayProvider() {
        print "Returning timeouts and delays";
        return array(
            array(-1, 1), // no timeout
            array(0, 1),  // no timeout
            array(3, 1)   // delay < timeout
        );
    }

    private function getRequestHeaders($httpMethod, $relativeUri, $contentType = '') {
        $communicatorConfiguration = $this->getCommunicatorConfiguration();
        $communicator = new Communicator($communicatorConfiguration, new TestingAuthenticator());
        $method = new ReflectionMethod($communicator, 'getRequestHeaders');
        $method->setAccessible(true);
        return $method->invoke($communicator, $httpMethod, $relativeUri, $contentType);
    }
}
