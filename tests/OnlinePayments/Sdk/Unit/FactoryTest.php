<?php

namespace OnlinePayments\Sdk\Unit;

use InvalidArgumentException;
use OnlinePayments\Sdk\Authentication\Authenticator;
use OnlinePayments\Sdk\Authentication\V1HmacAuthenticator;
use OnlinePayments\Sdk\Client;
use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\DefaultConnection;
use OnlinePayments\Sdk\Communication\MetadataProvider;
use OnlinePayments\Sdk\Communication\MetadataProviderInterface;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\CommunicatorInterface;
use OnlinePayments\Sdk\Factory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

#[Group('communication')]
class FactoryTest extends TestCase
{
    private const string API_ENDPOINT = 'https://payment.direct.ecom.preprod.worldline-solutions.com';

    public function testFactory_CreateCommunicator_UsesDefaultComponents(): void
    {
        $communicator = Factory::createCommunicator($this->createCommunicatorConfiguration());

        $this->assertInstanceOf(DefaultConnection::class, $this->getProperty($communicator, Communicator::class, 'connection'));

        $authenticator = $this->getProperty($communicator, Communicator::class, 'authenticator');
        $this->assertInstanceOf(V1HmacAuthenticator::class, $authenticator);
        $this->assertSame('apiKeyId', $this->getProperty($authenticator, V1HmacAuthenticator::class, 'apiKeyId'));
        $this->assertSame('apiSecret', $this->getProperty($authenticator, V1HmacAuthenticator::class, 'apiSecret'));

        $metadataProvider = $this->getProperty($communicator, Communicator::class, 'metadataProvider');
        $this->assertInstanceOf(MetadataProvider::class, $metadataProvider);
        $this->assertNotSame('', $metadataProvider->getServerMetaInfoValue());
    }

    public function testFactory_CreateCommunicator_UsesProvidedComponents(): void
    {
        $connection = $this->createStub(Connection::class);
        $authenticator = $this->createStub(Authenticator::class);
        $metadataProvider = $this->createStub(MetadataProviderInterface::class);

        $communicator = Factory::createCommunicator(
            $this->createCommunicatorConfiguration(),
            $connection,
            $authenticator,
            $metadataProvider,
        );

        $this->assertSame($connection, $this->getProperty($communicator, Communicator::class, 'connection'));
        $this->assertSame($authenticator, $this->getProperty($communicator, Communicator::class, 'authenticator'));
        $this->assertSame($metadataProvider, $this->getProperty($communicator, Communicator::class, 'metadataProvider'));
    }

    public function testFactory_CreateClientFromConfiguration_ReturnsClient(): void
    {
        $client = Factory::createClientFromConfiguration($this->createCommunicatorConfiguration());

        $this->assertInstanceOf(Communicator::class, $this->getProperty($client, Client::class, 'communicator'));
    }

    public function testFactory_CreateClientFromCommunicator_UsesProvidedCommunicator(): void
    {
        $communicator = $this->createStub(CommunicatorInterface::class);

        $client = Factory::createClientFromCommunicator($communicator);

        $this->assertSame($communicator, $this->getProperty($client, Client::class, 'communicator'));
    }

    public function testFactory_CreateClient_UsesProvidedValues(): void
    {
        $connection = $this->createStub(Connection::class);

        $client = Factory::createClient(
            apiEndpoint: self::API_ENDPOINT,
            apiKeyId: 'apiKeyId',
            apiSecret: 'apiSecret',
            integrator: 'Integrator',
            connectTimeout: 10,
            readTimeout: 20,
            connection: $connection,
        );

        $communicator = $this->getProperty($client, Client::class, 'communicator');
        $this->assertSame(self::API_ENDPOINT, $this->getProperty($communicator, Communicator::class, 'apiEndpoint'));
        $this->assertSame($connection, $this->getProperty($communicator, Communicator::class, 'connection'));
    }

    public function testFactory_CreateClient_UsesDefaultConnectionWithGivenTimeouts(): void
    {
        $client = Factory::createClient(
            apiEndpoint: self::API_ENDPOINT,
            apiKeyId: 'apiKeyId',
            apiSecret: 'apiSecret',
            integrator: 'Integrator',
            connectTimeout: 10,
            readTimeout: 20,
        );

        $communicator = $this->getProperty($client, Client::class, 'communicator');
        $connection = $this->getProperty($communicator, Communicator::class, 'connection');
        $this->assertInstanceOf(DefaultConnection::class, $connection);
        $this->assertSame(10, $this->getProperty($connection, DefaultConnection::class, 'connectTimeout'));
        $this->assertSame(20, $this->getProperty($connection, DefaultConnection::class, 'readTimeout'));
    }

    #[DataProvider('invalidTimeoutProvider')]
    public function testFactory_CreateClient_WithNonPositiveTimeout_ThrowsInvalidArgumentException(int $connectTimeout, int $readTimeout, string $message): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage($message);

        Factory::createClient(
            apiEndpoint: self::API_ENDPOINT,
            apiKeyId: 'apiKeyId',
            apiSecret: 'apiSecret',
            integrator: 'Integrator',
            connectTimeout: $connectTimeout,
            readTimeout: $readTimeout,
        );
    }

    /**
     * @return array<int, array{0: int, 1: int, 2: string}>
     */
    public static function invalidTimeoutProvider(): array
    {
        return [
            [0, 20, 'connectTimeout must be positive'],
            [10, 0, 'readTimeout must be positive'],
        ];
    }

    private function createCommunicatorConfiguration(): CommunicatorConfiguration
    {
        return new CommunicatorConfiguration('apiKeyId', 'apiSecret', self::API_ENDPOINT, 'Integrator');
    }

    /**
     * @param object $object
     * @param class-string $class
     * @param string $name
     * @return mixed
     */
    private function getProperty(object $object, string $class, string $name): mixed
    {
        return (new ReflectionProperty($class, $name))->getValue($object);
    }
}
