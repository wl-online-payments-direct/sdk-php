<?php
namespace OnlinePayments\Sdk;

use ErrorException;
use ReflectionMethod;
use stdClass;
use OnlinePayments\Sdk\Communication\CommunicatorLoggerHelper;
use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\HttpObfuscator;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\TestUtil\TestErrorResponse;
use OnlinePayments\Sdk\TestUtil\TestingAuthenticator;
use OnlinePayments\Sdk\TestUtil\TestingConnection;

/**
 * @group logging
 */
class CommunicatorLoggingTest extends TestCase
{
    public function testOnlyLogWhileLoggingIsEnabled()
    {
        $connection = new TestingConnection(
            new ConnectionResponse(200, array('Content-Type' => 'application/json'), '{}')
        );
        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );
        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();
        $logger->expects($this->exactly(2))->method('log')->will(
            $this->returnCallback(function ($message) {
                $messageParts = explode("\n", $message);
                $this->assertGreaterThanOrEqual(2, count($messageParts));
                if (strpos($messageParts[0], 'Outgoing request') === 0) {
                    $this->assertStringContainsString('/bar', $messageParts[1]);
                }
            })
        );
        $logger->expects($this->never())->method('logException');
        $responseClassMap = new ResponseClassMap();
        $communicator->get($responseClassMap, '/foo');
        $communicator->enableLogging($logger);
        $communicator->get($responseClassMap, '/bar');
        $communicator->disableLogging();
        $communicator->get($responseClassMap, '/baz');
    }

    public function testLoggingForSuccessResponse()
    {
        $relativeRequestUri = '/foo/bar';
        $connection = new TestingConnection(
            new ConnectionResponse(200, array('Content-Type' => 'application/json'), '{}')
        );
        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );
        $relativeRequestUriWithRequestParameters = $relativeRequestUri;
        $requestHeaders =
            $this->getCommunicatorRequestHeaders($communicator, 'POST', $relativeRequestUriWithRequestParameters);
        $requestBody = $this->getMockRequestDataObject();
        $httpObfuscator = new HttpObfuscator();
        $rawObfuscatedRequest = $httpObfuscator->getRawObfuscatedRequest(
            'POST',
            $relativeRequestUriWithRequestParameters,
            $requestHeaders,
            $requestBody->toJson()
        );
        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();
        $logger->expects($this->exactly(2))->method('log')->will(
            $this->returnCallback(function ($message) use ($rawObfuscatedRequest) {
                $messageHeader = strstr($message, "\n", true);
                if (strpos($messageHeader, 'Outgoing request') === 0) {
                    $this->assertEquals(trim(strstr($message, "\n")), $rawObfuscatedRequest);
                }
            })
        );
        $logger->expects($this->never())->method('logException');
        $communicator->enableLogging($logger);
        $responseClassMap = new ResponseClassMap();
        $communicator->post($responseClassMap, $relativeRequestUri, '', $requestBody);
    }

    public function testLoggingForSuccessUTF8Response()
    {
        $relativeRequestUri = '/foo/bar';
        $connection = new TestingConnection(
            new ConnectionResponse(200, array('Content-Type' => 'application/json;charset=UTF-8'), '{}')
        );
        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );
        $relativeRequestUriWithRequestParameters = $relativeRequestUri;
        $requestHeaders =
            $this->getCommunicatorRequestHeaders($communicator, 'POST', $relativeRequestUriWithRequestParameters);
        $requestBody = $this->getMockRequestDataObject();
        $httpObfuscator = new HttpObfuscator();
        $rawObfuscatedRequest = $httpObfuscator->getRawObfuscatedRequest(
            'POST',
            $relativeRequestUriWithRequestParameters,
            $requestHeaders,
            $requestBody->toJson()
        );
        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();
        $logger->expects($this->exactly(2))->method('log')->will(
            $this->returnCallback(function ($message) use ($rawObfuscatedRequest) {
                $messageHeader = strstr($message, "\n", true);
                if (strpos($messageHeader, 'Outgoing request') === 0) {
                    $this->assertEquals(trim(strstr($message, "\n")), $rawObfuscatedRequest);
                }
            })
        );
        $logger->expects($this->never())->method('logException');
        $communicator->enableLogging($logger);
        $responseClassMap = new ResponseClassMap();
        $communicator->post($responseClassMap, $relativeRequestUri, '', $requestBody);
    }

    public function testLoggingForClientErrorResponse()
    {
        $relativeRequestUri = '/foo/bar';
        $responseHeaders = array('Content-Type' => 'application/json');
        $errorResponse = $this->getErrorResponseDataObject();
        $connectionResponse = new ConnectionResponse(400, $responseHeaders, $errorResponse->toJson());
        $connection = new TestingConnection($connectionResponse);
        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );
        $httpObfuscator = new HttpObfuscator();
        $rawObfuscatedResponse = $httpObfuscator->getRawObfuscatedResponse($connectionResponse);
        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();
        $logger->expects($this->exactly(2))->method('log')->will(
            $this->returnCallback(function ($message) use ($rawObfuscatedResponse) {
                $messageHeader = strstr($message, "\n", true);
                if (strpos($messageHeader, 'Incoming response') === 0) {
                    $this->assertEquals(trim(strstr($message, "\n")), $rawObfuscatedResponse);
                }
            })
        );
        $logger->expects($this->never())->method('logException');
        $communicator->enableLogging($logger);
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\TestUtil\TestErrorResponse';
        try {
            $communicator->put($responseClassMap, $relativeRequestUri);
        } catch (ErrorResponseException $e) {
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    public function testLoggingForInvalidResponse()
    {
        $relativeRequestUri = '/foo/bar';
        $responseHeaders = array('Content-Type' => 'text/html');
        $responseBody = 'an error occurred';
        $connectionResponse = new ConnectionResponse(400, $responseHeaders, $responseBody);
        $connection = new TestingConnection($connectionResponse);
        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );
        $httpObfuscator = new HttpObfuscator();
        $rawObfuscatedResponse = $httpObfuscator->getRawObfuscatedResponse($connectionResponse);
        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();
        $logger->expects($this->exactly(2))->method('log')->will(
            $this->returnCallback(function ($message) use ($rawObfuscatedResponse) {
                $messageHeader = strstr($message, "\n", true);
                if (strpos($messageHeader, 'Incoming response') === 0) {
                    $this->assertEquals(trim(strstr($message, "\n")), $rawObfuscatedResponse);
                }
            })
        );
        $logger->expects($this->never())->method('logException');
        $communicator->enableLogging($logger);
        $responseClassMap = new ResponseClassMap();
        try {
            $communicator->get($responseClassMap, $relativeRequestUri);
        } catch (InvalidResponseException $e) {
            $this->assertEquals($connectionResponse->getHttpStatusCode(), $e->getResponse()->getHttpStatusCode());
            $this->assertEquals($connectionResponse->getHeaders(), $e->getResponse()->getHeaders());
            $this->assertEquals($connectionResponse->getBody(), $e->getResponse()->getBody());
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    public function testLoggingForCommunicationException()
    {
        $relativeRequestUri = '/foo/bar';
        $errorException = new ErrorException('Test error exception');
        $connection = new TestingConnection(null, $errorException);
        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );
        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();
        $logger->expects($this->once())->method('log')->will(
            $this->returnCallback(function ($message) {
                $messageHeader = strstr($message, "\n", true);
                $this->assertStringContainsString('Outgoing request', $messageHeader);
            })
        );
        $logger->expects($this->once())->method('logException')->will(
            $this->returnCallback(function ($message, $exception) use ($errorException) {
                $this->assertStringNotContainsString("\n", $message);
                $this->assertEquals($errorException, $exception);
            })
        );
        $communicator->enableLogging($logger);
        $responseClassMap = new ResponseClassMap();
        try {
            $communicator->delete($responseClassMap, $relativeRequestUri);
        } catch (ErrorException $e) {
            return;
        }
        $this->fail('an expected exception has not been raised');
    }

    /**
     * @return DataObject
     */
    protected function getMockRequestDataObject()
    {
        $requestDataObject = $this->getMockBuilder('\OnlinePayments\Sdk\Domain\DataObject')->getMock();
        $convertedDataObject = new stdClass();
        $convertedDataObject->customer = new stdClass();
        $convertedDataObject->customer->firstName = 'John';
        $convertedDataObject->customer->lastname = 'Doe';
        $convertedDataObject->accountNumber = '1234567890';
        $requestDataObject->method('toObject')->willReturn($convertedDataObject);
        $requestDataObject->method('toJson')->willReturn(json_encode($convertedDataObject));
        return $requestDataObject;
    }

    /**
     * @return DataObject
     */
    protected function getErrorResponseDataObject()
    {
        $errorResponse = new TestErrorResponse();
        $errorResponse->errorId = '123';
        $errorResponse->errorMessage = 'Test error message';
        return $errorResponse;
    }

    /**
     * @param Connection $connection
     * @return CommunicatorLoggerHelper
     */
    protected function getCommunicatorLoggerHelper(Connection $connection)
    {
        $method = new ReflectionMethod($connection, 'getCommunicatorLoggerHelper');
        $method->setAccessible(true);
        return $method->invoke($connection);
    }

    /**
     * @param CommunicatorInterface $communicator
     * @param $httpMethod
     * @param $relativeUriPathWithRequestParameters
     * @param string $clientMetaInfo
     * @param CallContext|null $callContext
     * @return string[]
     */
    protected function getCommunicatorRequestHeaders(
        CommunicatorInterface $communicator,
        $httpMethod,
        $relativeUriPathWithRequestParameters,
        $clientMetaInfo = '',
        CallContext $callContext = null
    ) {
        $method = new ReflectionMethod($communicator, 'getRequestHeaders');
        $method->setAccessible(true);
        return $method->invoke(
            $communicator,
            $httpMethod,
            $relativeUriPathWithRequestParameters,
            Communicator::MIME_APPLICATION_JSON,
            $clientMetaInfo,
            $callContext
        );
    }
}
