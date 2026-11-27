<?php

namespace OnlinePayments\Sdk\Unit\Client;

use OnlinePayments\Sdk\Client;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\CommunicatorInterface;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\TestConnection;
use OnlinePayments\Sdk\ValidationException;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('client')]
class ClientTest extends TestCase
{
    public function testMerchant_ReturnsMerchantClient(): void
    {
        $communicator = $this->createStub(CommunicatorInterface::class);
        $client = new Client($communicator);

        $merchantClient = $client->merchant('123');

        $this->assertNotNull($merchantClient);
    }

    public function testMerchant_WithMerchantId_UsesItInApiUri(): void
    {
        $communicator = $this->createMock(CommunicatorInterface::class);

        $communicator
            ->expects($this->once())
            ->method('get')
            ->with(
                $this->isInstanceOf(ResponseClassMap::class),
                $this->equalTo('/v2/merchant-456/services/testconnection'),
                $this->anything(),
                $this->anything(),
                $this->anything(),
            )
            ->willReturn(new TestConnection());

        $client = new Client($communicator);
        $client->merchant('merchant-456')->services()->testConnection();
    }

    public function testMerchant_DifferentIds_ReturnDifferentInstances(): void
    {
        $communicator = $this->createStub(CommunicatorInterface::class);
        $client = new Client($communicator);

        $first  = $client->merchant('111');
        $second = $client->merchant('222');

        $this->assertNotSame($first, $second);
    }

    public function testSetClientMetaInfo_WithValue_IsEncodedAsBase64(): void
    {
        $communicator = $this->createMock(CommunicatorInterface::class);

        $communicator
            ->expects($this->once())
            ->method('get')
            ->with(
                $this->isInstanceOf(ResponseClassMap::class),
                $this->anything(),
                $this->equalTo(base64_encode('custom-meta')),
                $this->anything(),
                $this->anything(),
            )
            ->willReturn(new TestConnection());

        $client = new Client($communicator);
        $client->setClientMetaInfo('custom-meta');
        $client->merchant('100')->services()->testConnection();
    }

    public function testSetClientMetaInfo_WithEmptyString_PassesEmptyString(): void
    {
        $communicator = $this->createMock(CommunicatorInterface::class);

        $communicator
            ->expects($this->once())
            ->method('get')
            ->with(
                $this->isInstanceOf(ResponseClassMap::class),
                $this->anything(),
                $this->equalTo(''),
                $this->anything(),
                $this->anything(),
            )
            ->willReturn(new TestConnection());

        $client = new Client($communicator);
        $client->setClientMetaInfo('');
        $client->merchant('100')->services()->testConnection();
    }

    public function testMerchant_ErrorResponse_ThrowsApiExceptionWithErrorResponseAsPrevious(): void
    {
        $errorResponseException = new ErrorResponseException(
            400,
            new ErrorResponse(),
            headers: ['X-GCS-RequestId' => 'req-1'],
        );

        $communicator = $this->createStub(CommunicatorInterface::class);
        $communicator->method('get')->willThrowException($errorResponseException);

        $client = new Client($communicator);

        try {
            $client->merchant('m1')->services()->testConnection();
            $this->fail('expected a ValidationException');
        } catch (ValidationException $e) {
            $previous = $e->getPrevious();
            $this->assertSame($errorResponseException, $previous);
            $this->assertInstanceOf(ErrorResponseException::class, $previous);
            $this->assertSame('req-1', $previous->getHeaderValue('X-GCS-RequestId'));
        }
    }
}
