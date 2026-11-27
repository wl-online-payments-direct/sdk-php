<?php

namespace OnlinePayments\Sdk;

use InvalidArgumentException;
use OnlinePayments\Sdk\Authentication\Authenticator;
use OnlinePayments\Sdk\Authentication\V1HmacAuthenticator;
use OnlinePayments\Sdk\Communication\Connection;
use OnlinePayments\Sdk\Communication\MetadataProviderInterface;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;
use UnexpectedValueException;

/**
 * Class Factory
 * Convenience class that creates CommunicatorConfiguration, Communicator and Client instances.
 *
 * @package OnlinePayments\Sdk
 */
final class Factory
{
    private function __construct() {}

    /**
     * Creates a Client from the given values, using the V1HMAC authorization type.
     *
     * @param string $apiEndpoint
     * @param string $apiKeyId
     * @param string $apiSecret
     * @param string $integrator
     * @param int $connectTimeout The connect timeout in seconds; must be positive.
     * @param int $readTimeout The read timeout in seconds; must be positive.
     * @param ProxyConfiguration|null $proxyConfiguration
     * @param ShoppingCartExtension|null $shoppingCartExtension
     * @param Connection|null $connection
     * @param Authenticator|null $authenticator
     * @param MetadataProviderInterface|null $metadataProvider
     * @return Client
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     */
    public static function createClient(
        string $apiEndpoint,
        string $apiKeyId,
        #[\SensitiveParameter]
        string $apiSecret,
        string $integrator,
        int $connectTimeout,
        int $readTimeout,
        ?ProxyConfiguration $proxyConfiguration = null,
        ?ShoppingCartExtension $shoppingCartExtension = null,
        ?Connection $connection = null,
        ?Authenticator $authenticator = null,
        ?MetadataProviderInterface $metadataProvider = null,
    ): Client {
        if ($connectTimeout <= 0) {
            throw new InvalidArgumentException('connectTimeout must be positive');
        }
        if ($readTimeout <= 0) {
            throw new InvalidArgumentException('readTimeout must be positive');
        }
        $configuration = new CommunicatorConfiguration(
            $apiKeyId,
            $apiSecret,
            $apiEndpoint,
            $integrator,
            $proxyConfiguration,
            $connectTimeout,
            $readTimeout,
        );
        $configuration->setShoppingCartExtension($shoppingCartExtension);
        return self::createClientFromConfiguration($configuration, $connection, $authenticator, $metadataProvider);
    }

    /**
     * Creates a Client from the given configuration.
     *
     * @param CommunicatorConfiguration $configuration
     * @param Connection|null $connection
     * @param Authenticator|null $authenticator
     * @param MetadataProviderInterface|null $metadataProvider
     * @return Client
     */
    public static function createClientFromConfiguration(
        CommunicatorConfiguration $configuration,
        ?Connection $connection = null,
        ?Authenticator $authenticator = null,
        ?MetadataProviderInterface $metadataProvider = null,
    ): Client {
        return self::createClientFromCommunicator(
            self::createCommunicator($configuration, $connection, $authenticator, $metadataProvider),
        );
    }

    /**
     * Creates a Client from the given communicator.
     *
     * @param CommunicatorInterface $communicator
     * @return Client
     */
    public static function createClientFromCommunicator(CommunicatorInterface $communicator): Client
    {
        return new Client($communicator);
    }

    /**
     * Creates a Communicator from the given configuration, using the V1HMAC authorization type by default.
     *
     * @param CommunicatorConfiguration $configuration
     * @param Connection|null $connection
     * @param Authenticator|null $authenticator
     * @param MetadataProviderInterface|null $metadataProvider
     * @return Communicator
     */
    public static function createCommunicator(
        CommunicatorConfiguration $configuration,
        ?Connection $connection = null,
        ?Authenticator $authenticator = null,
        ?MetadataProviderInterface $metadataProvider = null,
    ): Communicator {
        return new Communicator(
            $configuration,
            $authenticator ?? new V1HmacAuthenticator($configuration),
            $connection,
            $metadataProvider,
        );
    }
}
