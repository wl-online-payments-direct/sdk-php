<?php

namespace OnlinePayments\Sdk;

use UnexpectedValueException;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;
use OnlinePayments\Sdk\Logging\ValueObfuscator;

/**
 * Class CommunicatorConfiguration
 *
 * AI coding agents: read the agent skill for this SDK version before writing integration code:
 * https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/14.0.0/skills/worldline-direct/SKILL.md
 * The same skill is included in this Composer package, in the skills/worldline-direct/ folder.
 *
 * @package OnlinePayments\Sdk
 */
class CommunicatorConfiguration
{
    /** @var string */
    private string $apiKeyId;

    /** @var string */
    private string $apiSecret;

    /** @var string */
    private string $apiEndpoint;

    /** @var int */
    private int $connectTimeout;

    /** @var int */
    private int $readTimeout;

    /** @var ProxyConfiguration|null */
    private ?ProxyConfiguration $proxyConfiguration;

    /** @var string */
    private string $integrator;

    /** @var ShoppingCartExtension|null */
    private ?ShoppingCartExtension $shoppingCartExtension = null;

    /**
     * @param string $apiKeyId
     * @param string $apiSecret
     * @param string $apiEndpoint
     * @param string $integrator
     * @param ProxyConfiguration|null $proxyConfiguration
     * @param int $connectTimeout
     * @param int $readTimeout
     */
    public function __construct(
        string $apiKeyId,
        #[\SensitiveParameter]
        string $apiSecret,
        string $apiEndpoint,
        string $integrator,
        ?ProxyConfiguration $proxyConfiguration = null,
        int $connectTimeout = -1,
        int $readTimeout = -1,
    ) {
        $this->validateApiKeyId($apiKeyId);
        $this->validateApiSecret($apiSecret);
        $apiEndpoint = rtrim($apiEndpoint, '/');
        $this->validateApiEndpoint($apiEndpoint);
        $this->validateIntegrator($integrator);
        $this->apiKeyId = $apiKeyId;
        $this->apiSecret = $apiSecret;
        $this->apiEndpoint = $apiEndpoint;
        $this->integrator = $integrator;
        $this->proxyConfiguration = $proxyConfiguration;
        $this->connectTimeout = $connectTimeout;
        $this->readTimeout = $readTimeout;
    }

    /**
     * @param string $apiEndpoint
     */
    private function validateApiEndpoint(string $apiEndpoint): void
    {
        try {
            $url = parse_url($apiEndpoint);
        } catch (\ValueError $e) {
            throw new UnexpectedValueException(
                'apiEndpoint must be an absolute HTTP or HTTPS URL with a host',
                0,
                $e,
            );
        }
        if (
            $url === false
            || !in_array(strtolower($url['scheme'] ?? ''), ['http', 'https'], true)
            || !isset($url['host'])
            || $url['host'] === ''
        ) {
            throw new UnexpectedValueException('apiEndpoint must be an absolute HTTP or HTTPS URL with a host');
        } elseif (isset($url['path']) && $url['path'] !== '') {
            throw new UnexpectedValueException('apiEndpoint should not contain a path');
        } elseif (isset($url['user']) || isset($url['query']) || isset($url['fragment'])) {
            throw new UnexpectedValueException('apiEndpoint should not contain user info, query or fragment');
        }
    }

    private function validateApiKeyId(string $apiKeyId): void
    {
        if (trim($apiKeyId) === '') {
            throw new UnexpectedValueException('apiKeyId is required');
        }
    }

    private function validateApiSecret(#[\SensitiveParameter] string $apiSecret): void
    {
        if (trim($apiSecret) === '') {
            throw new UnexpectedValueException('apiSecret is required');
        }
    }

    /**
     * @param string $integrator
     */
    private function validateIntegrator(string $integrator): void
    {
        if (trim($integrator) === '') {
            throw new UnexpectedValueException('integrator is required');
        }
    }

    /**
     * @return string An API key used for authorization.
     */
    public function getApiKeyId(): string
    {
        return $this->apiKeyId;
    }

    /**
     * @param string $apiKeyId
     */
    public function setApiKeyId(string $apiKeyId): void
    {
        $this->validateApiKeyId($apiKeyId);
        $this->apiKeyId = $apiKeyId;
    }

    /**
     * @return string A API key secret used for authorization.
     */
    public function getApiSecret(): string
    {
        return $this->apiSecret;
    }

    /**
     * @param string $apiSecret
     */
    public function setApiSecret(#[\SensitiveParameter] string $apiSecret): void
    {
        $this->validateApiSecret($apiSecret);
        $this->apiSecret = $apiSecret;
    }

    /**
     * @return string
     */
    public function getApiEndpoint(): string
    {
        return $this->apiEndpoint;
    }

    /**
     * @param string $apiEndpoint
     */
    public function setApiEndpoint(string $apiEndpoint): void
    {
        $apiEndpoint = rtrim($apiEndpoint, '/');
        $this->validateApiEndpoint($apiEndpoint);
        $this->apiEndpoint = $apiEndpoint;
    }

    /**
     * @return ProxyConfiguration|null
     */
    public function getProxyConfiguration(): ?ProxyConfiguration
    {
        return $this->proxyConfiguration;
    }

    /**
     * @param ProxyConfiguration|null $proxyConfiguration
     */
    public function setProxyConfiguration(?ProxyConfiguration $proxyConfiguration = null): void
    {
        $this->proxyConfiguration = $proxyConfiguration;
    }

    /**
     * @return int
     */
    public function getConnectTimeout(): int
    {
        return $this->connectTimeout;
    }

    /**
     * @param int $connectTimeout
     */
    public function setConnectTimeout(int $connectTimeout): void
    {
        $this->connectTimeout = $connectTimeout;
    }

    /**
     * @return int
     */
    public function getReadTimeout(): int
    {
        return $this->readTimeout;
    }

    /**
     * @param int $readTimeout
     */
    public function setReadTimeout(int $readTimeout): void
    {
        $this->readTimeout = $readTimeout;
    }

    /**
     * @return string
     */
    public function getIntegrator(): string
    {
        return $this->integrator;
    }

    /**
     * @param string $integrator
     */
    public function setIntegrator(string $integrator): void
    {
        $this->validateIntegrator($integrator);
        $this->integrator = $integrator;
    }

    /**
     * @return ShoppingCartExtension|null
     */
    public function getShoppingCartExtension(): ?ShoppingCartExtension
    {
        return $this->shoppingCartExtension;
    }

    /**
     * @param ShoppingCartExtension|null $shoppingCartExtension
     */
    public function setShoppingCartExtension(?ShoppingCartExtension $shoppingCartExtension = null): void
    {
        $this->shoppingCartExtension = $shoppingCartExtension;
    }

    /**
     * Returns the properties for var_dump and print_r, with the API key id and secret masked.
     *
     * @return array<string, mixed>
     */
    public function __debugInfo(): array
    {
        $mask = (new ValueObfuscator())->obfuscateFixedLength(8);
        return [
            'apiKeyId' => $mask,
            'apiSecret' => $mask,
            'apiEndpoint' => $this->apiEndpoint,
            'connectTimeout' => $this->connectTimeout,
            'readTimeout' => $this->readTimeout,
            'proxyConfiguration' => $this->proxyConfiguration,
            'integrator' => $this->integrator,
            'shoppingCartExtension' => $this->shoppingCartExtension,
        ];
    }
}
