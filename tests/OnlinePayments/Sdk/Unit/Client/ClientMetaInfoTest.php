<?php

namespace OnlinePayments\Sdk\Unit\Client;

use OnlinePayments\Sdk\Client;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\CommunicatorInterface;
use OnlinePayments\Sdk\Domain\TestConnection;
use PHPUnit\Framework\TestCase;

/**
 * @group client
 */
class ClientMetaInfoTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testClientMetaInfo_IsSentAsBase64EncodedValue()
    {
        $communicator = $this->createMock(CommunicatorInterface::class);

        $client = new Client($communicator);
        $client->setClientMetaInfo('test-info');

        $expectedMetaInfo = base64_encode('test-info');

        $communicator
            ->expects($this->once())
            ->method('get')
            ->with(
                $this->isInstanceOf(ResponseClassMap::class),
                $this->equalTo('/v2/123/services/testconnection'),
                $this->equalTo($expectedMetaInfo),
                $this->isNull(),
                $this->isNull()
            )
            ->willReturn(new TestConnection());

        $client->merchant('123')
            ->services()
            ->testConnection();
    }
}
