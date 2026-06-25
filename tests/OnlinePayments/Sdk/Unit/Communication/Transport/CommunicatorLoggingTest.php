<?php

namespace OnlinePayments\Sdk\Unit\Communication\Transport;

use ErrorException;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\HttpObfuscator;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\TestUtil\Unit\TestErrorResponse;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;
use OnlinePayments\Sdk\TestUtil\Unit\TestingConnection;
use PHPUnit\Framework\TestCase;
use stdClass;

/**
 * @group communication
 * @group transport
 */
class CommunicatorLoggingTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCommunicator_OnlyLogWhileLoggingIsEnabled_LogsRequestsWhenEnabled()
    {
        $connection = new TestingConnection(
            new ConnectionResponse(
                200,
                array('Content-Type' => 'application/json'),
                '{}'
            )
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

    /**
     * @throws \Exception
     */
    public function testCommunicator_PostSuccessResponse_LogsRequestAndResponse()
    {
        $relativeRequestUri = '/foo/bar';

        $connection = new TestingConnection(
            new ConnectionResponse(200, ['Content-Type' => 'application/json'], '{}')
        );

        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );

        $requestBody = $this->getMockRequestDataObject();

        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')
            ->getMock();

        $logger->expects($this->exactly(2))
            ->method('log')
            ->willReturnCallback(function ($message) {
                static $call = 0;
                $call++;

                if ($call === 1) {
                    $this->assertStringContainsString('Outgoing request to https://example.com', $message);
                    $this->assertStringContainsString('POST /foo/bar HTTP/1.1', $message);
                    $this->assertStringContainsString('"customer"', $message);

                    return;
                }

                $this->assertStringContainsString('Content-Type: application/json', $message);
                $this->assertStringContainsString('{}', $message);
                $this->assertStringContainsString('Incoming response', $message);
            });

        $logger->expects($this->any())
            ->method('logException');

        $communicator->enableLogging($logger);

        $responseClassMap = new ResponseClassMap();

        $communicator->post(
            $responseClassMap,
            $relativeRequestUri,
            '',
            $requestBody
        );
    }

    /**
     * @throws \Exception
     */
    public function testCommunicator_PostSuccessUTF8Response_LogsRequestAndResponse()
    {
        $relativeRequestUri = '/foo/bar';

        $connection = new TestingConnection(
            new ConnectionResponse(
                200,
                ['Content-Type' => 'application/json;charset=UTF-8'],
                '{}'
            )
        );

        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );

        $requestBody = $this->getMockRequestDataObject();

        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();

        $logger->expects($this->exactly(2))
            ->method('log')
            ->willReturnCallback(function ($message) {
                static $call = 0;
                $call++;

                if ($call === 1) {
                    $this->assertStringContainsString('Outgoing request to https://example.com', $message);
                    $this->assertStringContainsString('POST /foo/bar HTTP/1.1', $message);
                    $this->assertStringContainsString('"customer"', $message);

                    return;
                }

                $this->assertStringContainsString('Incoming response', $message);
                $this->assertStringContainsString('Content-Type: application/json;charset=UTF-8', $message);
                $this->assertStringContainsString('{}', $message);
            });

        $logger->expects($this->any())
            ->method('logException');

        $communicator->enableLogging($logger);

        $responseClassMap = new ResponseClassMap();

        $communicator->post(
            $responseClassMap,
            $relativeRequestUri,
            '',
            $requestBody
        );
    }

    /**
     * @throws \Exception
     */
    public function testCommunicator_PutClientErrorResponse_LogsResponseAndThrowsErrorResponseException()
    {
        $relativeRequestUri = '/foo/bar';

        $responseHeaders = array(
            'Content-Type' => 'application/json'
        );

        $errorResponse = $this->getErrorResponseDataObject();

        $connectionResponse = new ConnectionResponse(
            400,
            $responseHeaders,
            $errorResponse->toJson()
        );

        $connection = new TestingConnection($connectionResponse);

        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );

        $httpObfuscator = new HttpObfuscator();
        $rawObfuscatedResponse = $httpObfuscator->getRawObfuscatedResponse($connectionResponse);

        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')->getMock();

        $logger->expects($this->exactly(2))
            ->method('log')
            ->will($this->returnCallback(function ($message) use ($rawObfuscatedResponse) {
                $messageHeader = strstr($message, "\n", true);

                if (strpos($messageHeader, 'Outgoing request') === 0) {
                    $this->assertStringContainsString('PUT /foo/bar HTTP/1.1', $message);
                    $this->assertStringContainsString('Content-Type: application/json', $message);

                    return;
                }

                if (strpos($messageHeader, 'Incoming response') === 0) {
                    $this->assertEquals(
                        trim(strstr($message, "\n")),
                        $rawObfuscatedResponse
                    );

                    return;
                }

                $this->fail('Unexpected log message type: ' . $messageHeader);
            }));

        $logger->expects($this->never())
            ->method('logException');

        $communicator->enableLogging($logger);

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\TestUtil\Unit\TestErrorResponse';

        $this->expectException(ErrorResponseException::class);

        $communicator->put($responseClassMap, $relativeRequestUri);
    }

    /**
     * @throws \Exception
     */
    public function testCommunicator_GetInvalidResponse_LogsResponseAndThrowsInvalidResponseException()
    {
        $relativeRequestUri = '/foo/bar';

        $responseHeaders = array(
            'Content-Type' => 'text/html'
        );

        $responseBody = 'an error occurred';

        $connectionResponse = new ConnectionResponse(
            400,
            $responseHeaders,
            $responseBody
        );

        $connection = new TestingConnection($connectionResponse);

        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );

        $httpObfuscator = new HttpObfuscator();
        $rawObfuscatedResponse = $httpObfuscator->getRawObfuscatedResponse($connectionResponse);

        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')
            ->getMock();

        $logger->expects($this->exactly(2))
            ->method('log')
            ->will($this->returnCallback(function ($message) use ($rawObfuscatedResponse) {
                $messageHeader = strstr($message, "\n", true);

                if (strpos($messageHeader, 'Incoming response') === 0) {
                    $this->assertEquals(
                        trim(strstr($message, "\n")),
                        $rawObfuscatedResponse
                    );
                }
            }));

        $logger->expects($this->never())
            ->method('logException');

        $communicator->enableLogging($logger);

        $responseClassMap = new ResponseClassMap();

        try {
            $communicator->get($responseClassMap, $relativeRequestUri);
            $this->fail('an expected exception has not been raised');
        } catch (InvalidResponseException $e) {
            $this->assertEquals(
                $connectionResponse->getHttpStatusCode(),
                $e->getResponse()->getHttpStatusCode()
            );

            $this->assertEquals(
                $connectionResponse->getHeaders(),
                $e->getResponse()->getHeaders()
            );

            $this->assertEquals(
                $connectionResponse->getBody(),
                $e->getResponse()->getBody()
            );
        }
    }

    /**
     * @throws \Exception
     */
    public function testCommunicator_DeleteCommunicationException_LogsRequestAndThrowsException()
    {
        $relativeRequestUri = '/foo/bar';

        $errorException = new ErrorException('Test error exception');

        $connection = new TestingConnection(
            null,
            $errorException
        );

        $communicator = new Communicator(
            $this->getCommunicatorConfiguration(),
            new TestingAuthenticator(),
            $connection
        );

        $logger = $this->getMockBuilder('\OnlinePayments\Sdk\Logging\CommunicatorLogger')
            ->getMock();

        $logger->expects($this->once())
            ->method('log')
            ->will($this->returnCallback(function ($message) {
                $messageHeader = strstr($message, "\n", true);

                $this->assertStringContainsString(
                    'Outgoing request',
                    $messageHeader
                );
            }));

        $logger->expects($this->once())
            ->method('logException')
            ->will($this->returnCallback(function ($message, $exception) use ($errorException) {
                $this->assertStringNotContainsString("\n", $message);
                $this->assertEquals($errorException, $exception);
            }));

        $communicator->enableLogging($logger);

        $responseClassMap = new ResponseClassMap();

        $this->expectException(ErrorException::class);

        $communicator->delete($responseClassMap, $relativeRequestUri);

        $this->fail('an expected exception has not been raised');
    }

    /**
     * @return DataObject
     */
    private function getMockRequestDataObject(): DataObject
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

    private function getErrorResponseDataObject(): TestErrorResponse
    {
        $errorResponse = new TestErrorResponse();
        $errorResponse->errorId = '123';
        $errorResponse->errorMessage = 'Test error message';

        return $errorResponse;
    }

    private function getCommunicatorConfiguration(): CommunicatorConfiguration
    {
        return new CommunicatorConfiguration(
            'apiKeyId',
            'secretKey',
            'https://example.com',
            'integrator'
        );
    }
}
