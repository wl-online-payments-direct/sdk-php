<?php

namespace OnlinePayments\Sdk\Unit\Communication;

use Exception;
use OnlinePayments\Sdk\Communication\DefaultConnection;
use OnlinePayments\Sdk\Communication\ResponseBuilder;
use OnlinePayments\Sdk\Logging\BodyObfuscator;
use OnlinePayments\Sdk\Logging\HeaderObfuscator;
use OnlinePayments\Sdk\TestUtil\Unit\MockUtil;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
 * @group gzip
 */
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
                $responseHandler
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
}
