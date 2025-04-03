<?php
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Logging\CommunicatorLogger;
use PHPUnit\Framework\TestCase;

/**
 * @group logging
 */
class ClientLoggingTest extends TestCase
{
    public function testEnableLoggingCascade()
    {
        $logger = $this->getMockBuilder(CommunicatorLogger::class)->getMock();
        $communicator = $this->getMockBuilder(CommunicatorInterface::class)->disableOriginalConstructor()->getMock();
        $communicator->expects($this->once())->method('enableLogging')->with($this->equalTo($logger));
        $communicator->expects($this->never())->method('disableLogging');
        $client = new Client($communicator);
        $client->enableLogging($logger);
    }

    public function testDisableLoggingCascade()
    {
        $communicator = $this->getMockBuilder(CommunicatorInterface::class)->disableOriginalConstructor()->getMock();
        $communicator->expects($this->once())->method('disableLogging');
        $communicator->expects($this->never())->method('enableLogging');
        $client = new Client($communicator);
        $client->disableLogging();
    }

    public function testMultipleEnableAndDisableLoggingCascades()
    {
        $logger = $this->getMockBuilder(CommunicatorLogger::class)->getMock();
        $communicator = $this->getMockBuilder(CommunicatorInterface::class)->disableOriginalConstructor()->getMock();
        $communicator->expects($this->exactly(3))->method('enableLogging')->with($this->equalTo($logger));
        $communicator->expects($this->exactly(2))->method('disableLogging');
        $client = new Client($communicator);
        $client->enableLogging($logger);
        $client->enableLogging($logger);
        $client->disableLogging();
        $client->disableLogging();
        $client->enableLogging($logger);
    }
}
