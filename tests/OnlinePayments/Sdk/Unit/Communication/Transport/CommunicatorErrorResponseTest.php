<?php

namespace OnlinePayments\Sdk\Unit\Communication\Transport;

use OnlinePayments\Sdk\Communication\ConnectionResponse;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;
use OnlinePayments\Sdk\TestUtil\Unit\TestingConnection;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('communication')]
#[Group('transport')]
class CommunicatorErrorResponseTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCommunicator_ErrorResponse_PassesResponseHeaders(): void
    {
        $response = new ConnectionResponse(400, [
            'Content-Type' => 'application/json',
            'X-GCS-RequestId' => 'req-1',
        ], '{}');

        $communicator = new Communicator(
            new CommunicatorConfiguration('apiKeyId', 'secretKey', 'https://example.com', 'integrator'),
            new TestingAuthenticator(),
            new TestingConnection($response),
        );

        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;

        try {
            $communicator->get($responseClassMap, '/v2/m1/services/testconnection');
            $this->fail('expected an ErrorResponseException');
        } catch (ErrorResponseException $e) {
            $this->assertSame(400, $e->getHttpStatusCode());
            $this->assertSame('req-1', $e->getHeaderValue('X-GCS-RequestId'));
        }
    }
}
