<?php

namespace OnlinePayments\Sdk\Unit\Communication;

use Exception;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\DefaultConnection;
use OnlinePayments\Sdk\Communication\ResponseBuilder;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\AmountOfMoney;
use OnlinePayments\Sdk\Logging\BodyObfuscator;
use OnlinePayments\Sdk\Logging\HeaderObfuscator;
use OnlinePayments\Sdk\TestUtil\Unit\MockUtil;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('communication')]
#[Group('gzip')]
class DefaultGzipRequestTest extends TestCase
{
    private MockUtil $mockUtil;

    /** @var DefaultConnection */
    private DefaultConnection $connection;

    protected function setUp(): void
    {
        parent::setUp();

        $this->connection = new DefaultConnection();
        $this->connection->setBodyObfuscator(new BodyObfuscator());
        $this->connection->setHeaderObfuscator(new HeaderObfuscator());

        $this->mockUtil = new MockUtil();
    }

    /**
     * @throws Exception
     */
    public function testPostWithGzipContentEncodingSendsCompressedBody(): void
    {
        $mockServerUrl = $this->mockUtil->startMockServerForTest();

        $responseBuilder = new ResponseBuilder();
        $responseHandler = function (int $httpStatusCode, string $data, array $headers) use ($responseBuilder): void {
            $responseBuilder->setHttpStatusCode($httpStatusCode);
            $responseBuilder->setHeaders($headers);
            $responseBuilder->appendBody($data);
        };

        try {
            $relativeUriPath = '/gzip';

            $bodyArray = [
                'header' => [
                    'operationType' => 'CreatePayment',
                    'itemCount' => 2,
                    'merchantBatchReference' => uniqid('', true),
                ],
                'createPayments' => [
                    [
                        'order' => [
                            'amountOfMoney' => [
                                'amount' => 10000,
                                'currencyCode' => 'EUR',
                            ],
                        ],
                    ],
                    [
                        'order' => [
                            'amountOfMoney' => [
                                'amount' => 20000,
                                'currencyCode' => 'EUR',
                            ],
                        ],
                    ],
                ],
            ];

            $requestBody = gzencode(json_encode($bodyArray));

            $requestHeaders = [
                'Content-Type'     => 'application/json',
                'Content-Encoding' => 'gzip',
            ];

            $this->connection->post(
                $mockServerUrl . $relativeUriPath,
                $requestHeaders,
                $requestBody,
                $responseHandler,
            );

            $response = $responseBuilder->getResponse();

            $this->assertEquals(200, $response->getHttpStatusCode());

            $this->assertArrayHasKey('Content-Encoding', $requestHeaders);
            $this->assertSame('gzip', $requestHeaders['Content-Encoding']);

            $decompressedBody = gzdecode($requestBody);
            $this->assertNotEmpty($decompressedBody);

            $decodedJson = json_decode($decompressedBody, true);
            $this->assertIsArray($decodedJson);

            $this->assertSame('CreatePayment', $decodedJson['header']['operationType']);
            $this->assertSame(2, $decodedJson['header']['itemCount']);
        } finally {
            $this->mockUtil->stopMockServerForTest();
        }
    }

    /**
     * @throws Exception
     */
    public function testPutWithGzipEnabledInCallContextAddsContentEncodingHeader(): void
    {
        $capturedHeaders = null;

        $connection = $this->createStub(Connection::class);
        $connection->method('put')
            ->willReturnCallback(function ($url, $headers, $body, $handler) use (&$capturedHeaders) {
                $capturedHeaders = $headers;

                $handler(200, '{}', ['Content-Type' => 'application/json']);
            });

        $communicator = new Communicator(
            new CommunicatorConfiguration('apiKeyId', 'secretKey', 'https://example.com', 'integrator'),
            new TestingAuthenticator(),
            $connection,
        );

        $callContext = new CallContext();
        $callContext->setGzip(true);

        $amountOfMoney = new AmountOfMoney();
        $amountOfMoney->setAmount(100);
        $amountOfMoney->setCurrencyCode('EUR');

        $communicator->put(new ResponseClassMap(), '/test', '', $amountOfMoney, null, $callContext);

        $this->assertIsArray($capturedHeaders);
        $this->assertArrayHasKey('Content-Encoding', $capturedHeaders);
        $this->assertSame('gzip', $capturedHeaders['Content-Encoding']);
    }
}
