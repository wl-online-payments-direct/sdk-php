<?php
namespace OnlinePayments\Sdk;

use UnexpectedValueException;
use OnlinePayments\Sdk\Domain\ShoppingCartExtension;

/**
 * Class CommunicatorConfiguration
 *
 * @package OnlinePayments\Sdk
 */
class CommunicatorConfiguration
{
    /**
     * @var string
     */
    private $apiKeyId;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var string
     */
    private $apiEndpoint;

    /**
     * @var int
     */
    private $connectTimeout;

    /**
     * @var int
     */
    private $readTimeout;

    /**
     * @var ProxyConfiguration|null
     */
    private $proxyConfiguration;

    /**
     * @var string
     */
    private $integrator;

    /**
     * @var ShoppingCartExtension|null
     */
    private $shoppingCartExtension = null;

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
        $apiKeyId,
        $apiSecret,
        $apiEndpoint,
        $integrator,
        ProxyConfiguration $proxyConfiguration = null,
        $connectTimeout = -1,
        $readTimeout = -1)
    {
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

    private function validateApiEndpoint($apiEndpoint)
    {
        $url = parse_url($apiEndpoint);
        if ($url === false) {
            throw new UnexpectedValueException('apiEndpoint is not a valid URL');
        } elseif (isset($url['path']) && $url['path'] !== '') {
            throw new UnexpectedValueException('apiEndpoint should not contain a path');
        } elseif (isset($url['user']) || isset($url['query']) || isset($url['fragment'])) {
            throw new UnexpectedValueException('apiEndpoint should not contain user info, query or fragment');
        }
    }

    private function validateIntegrator($integrator)
    {
        if (is_null($integrator) || strlen(trim($integrator)) == 0) {
            throw new UnexpectedValueException("integrator is required");
        }
    }

    /**
     * @return string An API key used for authorization.
     */
    public function getApiKeyId()
    {
        return $this->apiKeyId;
    }

    /**
     * @param string $apiKeyId
     */
    public function setApiKeyId($apiKeyId)
    {
        $this->apiKeyId = $apiKeyId;
    }

    /**
     * @return string A API key secret used for authorization.
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * @param string $apiSecret
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;
    }

    /**
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->apiEndpoint;
    }

    /**
     * @param string $apiEndpoint
     */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->validateApiEndpoint($apiEndpoint);
        $this->apiEndpoint = $apiEndpoint;
    }

    /**
     * @return ProxyConfiguration|null
     */
    public function getProxyConfiguration()
    {
        return $this->proxyConfiguration;
    }

    /**
     * @param ProxyConfiguration|null $proxyConfiguration
     */
    public function setProxyConfiguration(ProxyConfiguration $proxyConfiguration = null)
    {
        $this->proxyConfiguration = $proxyConfiguration;
    }

    /**
     * @return int
     */
    public function getConnectTimeout()
    {
        return $this->connectTimeout;
    }

    /**
     * @param int $connectTimeout
     */
    public function setConnectTimeout($connectTimeout)
    {
        $this->connectTimeout = $connectTimeout;
    }

    /**
     * @return int
     */
    public function getReadTimeout()
    {
        return $this->readTimeout;
    }

    /**
     * @param int $readTimeout
     */
    public function setReadTimeout($readTimeout)
    {
        $this->readTimeout = $readTimeout;
    }

    /**
     * @return string
     */
    public function getIntegrator()
    {
        return $this->integrator;
    }

    /**
     * @param string $integrator
     */
    public function setIntegrator($integrator)
    {
        $this->validateIntegrator($integrator);
        $this->integrator = $integrator;
    }

    /**
     * @return ShoppingCartExtension|null
     */
    public function getShoppingCartExtension()
    {
        return $this->shoppingCartExtension;
    }

    /**
     * @param ShoppingCartExtension|null $shoppingCartExtension
     */
    public function setShoppingCartExtension(ShoppingCartExtension $shoppingCartExtension = null)
    {
        $this->shoppingCartExtension = $shoppingCartExtension;
    }
}
