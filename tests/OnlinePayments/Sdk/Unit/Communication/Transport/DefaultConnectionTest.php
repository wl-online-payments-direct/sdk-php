<?php

namespace OnlinePayments\Sdk\Unit\Communication\Transport;

use ErrorException;
use Exception;
use OnlinePayments\Sdk\Communication\CommunicationException;
use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\DefaultConnection;
use OnlinePayments\Sdk\Communication\MultipartFormDataObject;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\UploadableFile;
use OnlinePayments\Sdk\Logging\BodyObfuscator;
use OnlinePayments\Sdk\Logging\CommunicatorLogger;
use OnlinePayments\Sdk\Logging\HeaderObfuscator;
use OnlinePayments\Sdk\ProxyConfiguration;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('communication')]
#[Group('transport')]
class DefaultConnectionTest extends TestCase
{
    protected DefaultConnection $connection;

    public function setUp(): void
    {
        parent::setUp();
        $this->connection = new DefaultConnection();
        $this->connection->setBodyObfuscator(new BodyObfuscator());
        $this->connection->setHeaderObfuscator(new HeaderObfuscator());
    }

    public function testDefaultConnection_ConstructDefaultValues_NoExceptionThrown(): void
    {
        new DefaultConnection();

        $this->expectNotToPerformAssertions();
    }

    public function testDefaultConnection_ConstructWithProxyWithoutAuthentication_SetsProxyCorrectly(): void
    {
        $configuration = $this->createCommunicatorConfiguration();
        $proxy = new ProxyConfiguration('proxy.example.com', 8080);
        $configuration->setProxyConfiguration($proxy);

        new DefaultConnection($configuration);

        $this->assertSame('proxy.example.com:8080', $proxy->getCurlProxy());
        $this->assertSame('', $proxy->getCurlProxyUserPwd());
    }

    public function testDefaultConnection_ConstructWithProxyWithAuthentication_SetsProxyAndCredentials(): void
    {
        $configuration = $this->createCommunicatorConfiguration();
        $proxy = new ProxyConfiguration('proxy.example.com', 8080, 'user', 'pass');
        $configuration->setProxyConfiguration($proxy);

        new DefaultConnection($configuration);

        $this->assertSame('proxy.example.com:8080', $proxy->getCurlProxy());
        $this->assertSame('user:pass', $proxy->getCurlProxyUserPwd());
    }

    public function testDefaultConnection_ConstructWithProxyWithAuthenticationWithHandler_SetsProxyAndCredentials(): void
    {
        $configuration = $this->createCommunicatorConfiguration();
        $configuration->setConnectTimeout(3);
        $configuration->setReadTimeout(7);

        $proxy = new ProxyConfiguration('proxy.example.com', 3128, 'admin', 'secret');
        $configuration->setProxyConfiguration($proxy);

        new DefaultConnection($configuration);

        $this->assertSame('admin:secret', $proxy->getCurlProxyUserPwd());
    }

    /**
     * @throws Exception
     */
    public function testConnection_EnableLoggingThenDisableLogging_LogStoppedAfterDisable(): void
    {
        $captured = [];
        $connection = $this->createRecordedConnection($captured);

        $logger = $this->createMock(CommunicatorLogger::class);
        $logger->expects($this->exactly(2))->method('log');
        $logger->expects($this->never())->method('logException');

        $connection->enableLogging($logger);
        $connection->get('https://example.com/first', [], static function (): void {});
        $connection->disableLogging();
        $connection->get('https://example.com/second', [], static function (): void {});

        $this->assertSame('GET', $captured['httpMethod']);
        $this->assertSame('https://example.com/second', $captured['requestUri']);
    }

    /**
     * @throws Exception
     */
    public function testConnection_Get_WithLoggingEnabled_LogsRequestAndResponse(): void
    {
        $captured = [];
        $connection = $this->createRecordedConnection($captured);

        $logger = $this->createMock(CommunicatorLogger::class);
        $logger->expects($this->exactly(2))->method('log');
        $logger->expects($this->never())->method('logException');

        $connection->enableLogging($logger);
        $connection->get(
            'https://example.com/foo',
            ['Accept' => 'application/json'],
            static function (): void {},
        );

        $this->assertSame('GET', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame(['Accept' => 'application/json'], $captured['requestHeaders']);
    }

    public function testConnection_Get_WhenExecuteRequestThrows_LogsExceptionAndRethrows(): void
    {
        $captured = [];
        $connection = $this->createRecordedConnection(
            $captured,
            new Exception('fail'),
        );

        $logger = $this->createMock(CommunicatorLogger::class);
        $logger->expects($this->once())->method('log');
        $logger->expects($this->once())->method('logException');

        $connection->enableLogging($logger);

        $this->expectException(Exception::class);

        $connection->get(
            'https://example.com/foo',
            [],
            static function (): void {},
        );
    }

    /**
     * @throws Exception
     */
    public function testConnection_Delete_WithLoggingEnabled_LogsRequestAndResponse(): void
    {
        $captured = [];
        $connection = $this->createRecordedConnection($captured);

        $logger = $this->createMock(CommunicatorLogger::class);
        $logger->expects($this->exactly(2))->method('log');
        $logger->expects($this->never())->method('logException');

        $connection->enableLogging($logger);
        $connection->delete(
            'https://example.com/foo',
            ['X-Test' => '1'],
            static function (): void {},
        );

        $this->assertSame('DELETE', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame(['X-Test' => '1'], $captured['requestHeaders']);
    }

    /**
     * @throws Exception
     */
    public function testConnection_Post_WithStringBody_LogsRequestBodyAndResponse(): void
    {
        $captured = [];
        $connection = $this->createRecordedConnection($captured);

        $logger = $this->createMock(CommunicatorLogger::class);

        $logger->expects($this->exactly(2))
            ->method('log')
            ->willReturnCallback(function (string $message): void {
                if (strpos($message, 'Outgoing request') === 0) {
                    $this->assertStringContainsString('POST /foo HTTP/1.1', $message);
                    $this->assertStringContainsString('"foo": "bar"', $message);
                }
            });

        $logger->expects($this->never())
            ->method('logException');

        $connection->enableLogging($logger);

        $connection->post(
            'https://example.com/foo',
            ['Content-Type' => 'application/json'],
            '{"foo":"bar"}',
            static function (): void {},
        );

        $this->assertSame('POST', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame('{"foo":"bar"}', $captured['body']);
    }

    /**
     * @throws Exception
     */
    public function testConnection_Post_WithBinaryBody_LogsBinaryContentAndResponse(): void
    {
        $captured = [];
        $body = new MultipartFormDataObject();
        $body->addFile('file', new UploadableFile('binary.dat', "\x00\x01binary\xFF", 'application/octet-stream'));

        $connection = new class ($this->createCommunicatorConfiguration(), $captured) extends DefaultConnection {
            /** @var array<string, mixed> */
            private array $captured;

            /**
             * @param array<string, mixed> $captured
             */
            public function __construct(CommunicatorConfiguration $config, array &$captured)
            {
                parent::__construct($config);
                $this->captured = &$captured;
            }

            protected function executeRequest(
                string $httpMethod,
                string $requestUri,
                array $requestHeaders,
                $body,
                callable $responseHandler,
            ): ?ConnectionResponse {
                $this->captured = [
                    'httpMethod' => $httpMethod,
                    'requestUri' => $requestUri,
                    'body' => $body,
                ];

                return new ConnectionResponse(
                    200,
                    [],
                    '{}',
                );
            }
        };

        $logger = $this->createMock(CommunicatorLogger::class);

        $logger->expects($this->exactly(2))
            ->method('log')
            ->willReturnCallback(function (string $message): void {
                if (strpos($message, 'Outgoing request') === 0) {
                    $this->assertStringContainsString('<binary content>', $message);
                }
            });

        $logger->expects($this->never())
            ->method('logException');

        $connection->enableLogging($logger);

        $connection->post(
            'https://example.com/foo',
            [],
            $body,
            static function (): void {},
        );

        $this->assertSame('POST', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame($body, $captured['body']);
    }

    /**
     * @throws Exception
     */
    public function testConnection_Put_WithStringBody_LogsRequestBodyAndResponse(): void
    {
        $captured = [];
        $connection = $this->createRecordedConnection($captured);

        $logger = $this->createMock(CommunicatorLogger::class);

        $logger->expects($this->exactly(2))
            ->method('log')
            ->willReturnCallback(function (string $message): void {
                if (strpos($message, 'Outgoing request') === 0) {
                    $this->assertStringContainsString('PUT /foo HTTP/1.1', $message);
                    $this->assertStringContainsString('"foo": "bar"', $message);
                }
            });

        $logger->expects($this->never())
            ->method('logException');

        $connection->enableLogging($logger);

        $connection->put(
            'https://example.com/foo',
            ['Content-Type' => 'application/json'],
            '{"foo":"bar"}',
            static function (): void {},
        );

        $this->assertSame('PUT', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame('{"foo":"bar"}', $captured['body']);
    }

    /**
     * @throws Exception
     */
    public function testConnection_Put_WithBinaryBody_LogsBinaryContentAndResponse(): void
    {
        $captured = [];
        $body = new MultipartFormDataObject();
        $body->addFile('file', new UploadableFile('binary.dat', "\x00\x01binary\xFF", 'application/octet-stream'));

        $connection = new class ($this->createCommunicatorConfiguration(), $captured) extends DefaultConnection {
            /** @var array<string, mixed> */
            private array $captured;

            /**
             * @param array<string, mixed> $captured
             */
            public function __construct(CommunicatorConfiguration $config, array &$captured)
            {
                parent::__construct($config);
                $this->captured = &$captured;
            }

            protected function executeRequest(
                string $httpMethod,
                string $requestUri,
                array $requestHeaders,
                $body,
                callable $responseHandler,
            ): ?ConnectionResponse {
                $this->captured = [
                    'httpMethod' => $httpMethod,
                    'requestUri' => $requestUri,
                    'body' => $body,
                ];

                return new ConnectionResponse(
                    200,
                    [],
                    '{}',
                );
            }
        };

        $logger = $this->createMock(CommunicatorLogger::class);

        $logger->expects($this->exactly(2))
            ->method('log')
            ->willReturnCallback(function (string $message): void {
                if (strpos($message, 'Outgoing request') === 0) {
                    $this->assertStringContainsString('<binary content>', $message);
                }
            });

        $logger->expects($this->never())
            ->method('logException');

        $connection->enableLogging($logger);

        $connection->put(
            'https://example.com/foo',
            [],
            $body,
            static function (): void {},
        );

        $this->assertSame('PUT', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame($body, $captured['body']);
    }

    /**
     * @throws \ReflectionException
     */
    public function testConnection_ExecuteRequest_WithUnsupportedMethod_ThrowsUnexpectedValueException(): void
    {
        $captured = [];

        $connection = new class ($this->createCommunicatorConfiguration(), $captured) extends DefaultConnection {
            /** @var array<string, mixed> */
            private array $captured;

            /**
             * @param array<string, mixed> $captured
             */
            public function __construct(CommunicatorConfiguration $config, array &$captured)
            {
                parent::__construct($config);
                $this->captured = &$captured;
            }
        };

        $this->expectException(\UnexpectedValueException::class);

        $ref = new \ReflectionClass($connection);
        $method = $ref->getMethod('executeRequest');

        $method->invoke(
            $connection,
            'PATCH',
            'https://example.com/foo',
            [],
            '',
            static function (): void {},
        );
    }

    /**
     * @throws Exception
     */
    public function testConnection_SetCurlOptions_WithGzipAndStringBody_DoesNotThrow(): void
    {
        $captured = [];

        $connection = $this->createRecordedConnection($captured);

        $connection->post(
            'https://example.com/foo',
            [
                'Content-Encoding' => 'gzip',
            ],
            '{"foo":"bar"}',
            static function (): void {},
        );

        $this->assertSame('POST', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame('{"foo":"bar"}', $captured['body']);
    }

    /**
     * @throws Exception
     */
    public function testConnection_SetCurlOptions_WithProxyAndTimeouts_DoesNotThrow(): void
    {
        $captured = [];

        $configuration = $this->createCommunicatorConfiguration(
            new ProxyConfiguration('proxy.example.com', 8080, 'user', 'pass'),
            5,
            10,
        );

        $connection = $this->createRecordedConnection($captured, null, $configuration);

        $connection->get(
            'https://example.com/foo',
            [],
            static function (): void {},
        );

        $this->assertSame('GET', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame([], $captured['requestHeaders']);
    }

    /**
     * @throws Exception
     */
    public function testConnection_SetCurlOptions_WithMultipartFormData_DoesNotThrow(): void
    {
        $captured = [];

        $connection = $this->createRecordedConnection($captured);

        $multipart = $this->createStub(MultipartFormDataObject::class);

        $multipart->method('getBoundary')->willReturn('boundary');
        $multipart->method('getValues')->willReturn([]);
        $multipart->method('getFiles')->willReturn([]);

        $connection->post(
            'https://example.com/foo',
            [],
            $multipart,
            static function (): void {},
        );

        $this->assertSame('POST', $captured['httpMethod']);
        $this->assertSame('https://example.com/foo', $captured['requestUri']);
        $this->assertSame($multipart, $captured['body']);
    }

    /**
     * @throws Exception
     */
    public function testSetCurlOptions_WithUnsupportedBody_ThrowsTypeError(): void
    {
        $captured = [];

        $connection = $this->createRecordedConnection($captured);

        $this->expectException(\TypeError::class);

        $ref = new \ReflectionClass($connection);
        $method = $ref->getMethod('setCurlOptions');

        $handle = curl_init();
        $this->assertNotFalse($handle);

        $method->invoke(
            $connection,
            $handle,
            'POST',
            'https://example.com/foo',
            [],
            new \stdClass(),
        );
    }

    public function testConnection_Get_WhenConnectionFails_ThrowsCommunicationException(): void
    {
        $connection = new DefaultConnection($this->createCommunicatorConfiguration(null, 5, 5));

        try {
            $connection->get('http://127.0.0.1:1/', [], static function (): void {});
            $this->fail('expected a CommunicationException');
        } catch (CommunicationException $e) {
            $this->assertInstanceOf(ErrorException::class, $e);
            $this->assertStringStartsWith('cURL error ', $e->getMessage());
            $this->assertInstanceOf(ErrorException::class, $e->getPrevious());
        }
    }

    public function testConnection_Get_WhenExecuteRequestThrowsError_LogsThrowableAndRethrows(): void
    {
        $captured = [];
        $connection = $this->createRecordedConnection($captured, new \Error('fail'));

        $logger = $this->createMock(CommunicatorLogger::class);
        $logger->expects($this->once())->method('log');
        $logger->expects($this->once())
            ->method('logException')
            ->with($this->isString(), $this->isInstanceOf(\Error::class));

        $connection->enableLogging($logger);

        $this->expectException(\Error::class);
        $connection->get('https://example.com/foo', [], static function (): void {});
    }

    public function testConnectionResponse_Getters_ReturnExpectedValues(): void
    {
        $httpStatusCode = 123;
        $headers = [0 => 'Foo', 'Bar' => 'Baz'];
        $body = "Foo Bar\nBáz";
        $connectionResponse = new ConnectionResponse($httpStatusCode, $headers, $body);

        $this->assertSame($httpStatusCode, $connectionResponse->getHttpStatusCode());
        $this->assertSame($headers, $connectionResponse->getHeaders());
        $this->assertSame($body, $connectionResponse->getBody());
        // @phpstan-ignore-next-line
        $this->assertSame('Foo', $connectionResponse->getHeaderValue(0));
        $this->assertSame('Baz', $connectionResponse->getHeaderValue('Bar'));
        $this->assertSame('Baz', $connectionResponse->getHeaderValue('bar'));
        // @phpstan-ignore-next-line
        $this->assertSame('', $connectionResponse->getHeaderValue(1));
        $this->assertSame('', $connectionResponse->getHeaderValue('baz'));
    }

    #[DataProvider('dispositionFilenameProvider')]
    public function testConnectionResponse_GetDispositionFilename_ParsesFilenameCorrectly(string $headerValue, ?string $expected): void
    {
        $headers = ['Content-Disposition' => $headerValue];
        $this->assertSame($expected, ConnectionResponse::getDispositionFilename($headers));
    }

    private function createCommunicatorConfiguration(
        ?ProxyConfiguration $proxyConfiguration = null,
        int $connectTimeout = -1,
        int $readTimeout = -1,
    ): CommunicatorConfiguration {
        return new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://example.com',
            'OnlinePayments',
            $proxyConfiguration,
            $connectTimeout,
            $readTimeout,
        );
    }

    private function createOkResponse(): ConnectionResponse
    {
        return new ConnectionResponse(
            200,
            ['Content-Type' => 'application/json'],
            '{}',
        );
    }

    /**
     * @param array<string, mixed> $captured
     */
    private function createRecordedConnection(
        array &$captured,
        ?\Throwable $exception = null,
        ?CommunicatorConfiguration $configuration = null,
    ): DefaultConnection {
        $configuration = $configuration ?? $this->createCommunicatorConfiguration();

        return new class (
            $configuration,
            $captured,
            $this->createOkResponse(),
            $exception,
        ) extends DefaultConnection {
            /** @var array<string, mixed> */
            private array $captured;
            private ConnectionResponse $response;
            private ?\Throwable $exception;

            /**
             * @param array<string, mixed> $captured
             */
            public function __construct(
                CommunicatorConfiguration $configuration,
                array &$captured,
                ConnectionResponse $response,
                ?\Throwable $exception,
            ) {
                parent::__construct($configuration);
                $this->captured = &$captured;
                $this->response = $response;
                $this->exception = $exception;
            }

            protected function executeRequest(
                string $httpMethod,
                string $requestUri,
                array $requestHeaders,
                string|MultipartFormDataObject $body,
                callable $responseHandler,
            ): ConnectionResponse {
                $this->captured = [
                    'httpMethod' => $httpMethod,
                    'requestUri' => $requestUri,
                    'requestHeaders' => $requestHeaders,
                    'body' => $body,
                ];

                if ($this->exception !== null) {
                    throw $this->exception;
                }

                return $this->response;
            }
        };
    }

    /**
     * @return array<int, array{0: string, 1: string|null}>
     */
    public static function dispositionFilenameProvider(): array
    {
        return [
            ['attachment; filename=testfile', 'testfile'],
            ['attachment; filename="testfile"', 'testfile'],
            ['attachment; filename="testfile', '"testfile'],
            ['attachment; filename=testfile"', 'testfile"'],
            ["attachment; filename='testfile'", 'testfile'],
            ["attachment; filename='testfile", "'testfile"],
            ["attachment; filename=testfile'", "testfile'"],

            ['filename=testfile', 'testfile'],
            ['filename="testfile"', 'testfile'],
            ['filename="testfile', '"testfile'],
            ['filename=testfile"', 'testfile"'],
            ["filename='testfile'", 'testfile'],
            ["filename='testfile", "'testfile"],
            ["filename=testfile'", "testfile'"],
            ['attachment; filename=testfile; x=y', 'testfile'],
            ['attachment; filename="testfile"; x=y', 'testfile'],
            ['attachment; filename="testfile; x=y', '"testfile'],
            ['attachment; filename=testfile"; x=y', 'testfile"'],
            ["attachment; filename='testfile'; x=y", 'testfile'],
            ["attachment; filename='testfile; x=y", "'testfile"],
            ["attachment; filename=testfile'; x=y", "testfile'"],

            ['', null],
            ['filename="', '"'],
            ["filename='", "'"],
        ];
    }
}
