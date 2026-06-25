<?php

namespace OnlinePayments\Sdk\Unit\Communication;

use OnlinePayments\Sdk\Communication\DefaultConnection;
use OnlinePayments\Sdk\Communication\MetadataProvider;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\TestUtil\Unit\TestingAuthenticator;
use PHPUnit\Framework\TestCase;

/**
 * @group communication
*/
class FactoryTest extends TestCase
{
    public function testFactory_CreateConfiguration_ReturnsValidCommunicatorConfiguration()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://example.com',
            'OnlinePayments'
        );

        $this->assertEquals(
            'https://example.com',
            $configuration->getApiEndpoint()
        );
    }

    public function testFactory_CreateConfigurationWithInvalidEndpoint_ThrowsException()
    {
        $this->expectException(\UnexpectedValueException::class);

        new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'invalid-endpoint',
            'OnlinePayments'
        );
    }

    public function testFactory_CreateCommunicatorWithValidConfiguration_CreatesCommunicatorSuccessfully()
    {
        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'https://example.com',
            'OnlinePayments'
        );

        $authenticator = new TestingAuthenticator();

        $connection = $this->createMock(DefaultConnection::class);
        $metadataProvider = $this->createMock(MetadataProvider::class);

        $this->expectNotToPerformAssertions();

        new Communicator(
            $configuration,
            $authenticator,
            $connection,
            $metadataProvider
        );
    }

    public function testFactory_CreateCommunicatorWithInvalidConfiguration_ThrowsException()
    {
        $this->expectException(\UnexpectedValueException::class);

        $configuration = new CommunicatorConfiguration(
            'apiKeyId',
            'apiSecret',
            'invalid-endpoint',
            'OnlinePayments'
        );

        $authenticator = new TestingAuthenticator();

        new Communicator($configuration, $authenticator);
    }
}
