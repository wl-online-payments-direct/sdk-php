<?php

namespace OnlinePayments\Sdk\TestUtil;

use Exception;
use OnlinePayments\Sdk\Authentication\V1HmacAuthenticator;
use OnlinePayments\Sdk\Client;
use OnlinePayments\Sdk\Communicator;
use OnlinePayments\Sdk\CommunicatorConfiguration;
use OnlinePayments\Sdk\TestUtil\Unit\JsonValuesStore;

/**
 * Class TestCase
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected ?Client $client = null;
    protected string $merchantId;

    /**
     * @var string
     */
    private string $configFilePath;

    /**
     * @var JsonValuesStore|null
     */
    private ?JsonValuesStore $jsonValuesStore = null;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->configFilePath = dirname(__FILE__) . '/../../../config.json';
    }

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->client = $this->getClient();
        $this->merchantId = $this->getMerchantId();
    }

    protected function tearDown(): void
    {
        $this->client = null;

        parent::tearDown();
    }

    /**
     * @throws Exception
     */
    protected function getClient(): Client
    {
        $config = $this->getCommunicatorConfiguration();
        $authenticator = new V1HmacAuthenticator($config);
        $communicator = new Communicator($config, $authenticator);

        return new Client($communicator);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getMerchantId(): string
    {
        return $this->getJsonValuesStore()->getValue('merchant_id');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiEndpoint(): string
    {
        return $this->getJsonValuesStore()->getValue('api_endpoint');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyHost(): string
    {
        return $this->getJsonValuesStore()->getValue('proxy_host', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyPort(): string
    {
        return $this->getJsonValuesStore()->getValue('proxy_port', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyUsername(): string
    {
        return $this->getJsonValuesStore()->getValue('proxy_username', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyPassword(): string
    {
        return $this->getJsonValuesStore()->getValue('proxy_password', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiKey(): string
    {
        return $this->getJsonValuesStore()->getValue('v1hmac_api_key', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiSecret(): string
    {
        return $this->getJsonValuesStore()->getValue('v1hmac_api_secret', false);
    }

    /**
     * @return JsonValuesStore
     */
    protected function getJsonValuesStore(): JsonValuesStore
    {
        if (is_null($this->jsonValuesStore)) {
            $this->jsonValuesStore = new JsonValuesStore($this->configFilePath);
        }

        return $this->jsonValuesStore;
    }

    /**
     * @return CommunicatorConfiguration
     * @throws Exception
     */
    protected function getCommunicatorConfiguration(): CommunicatorConfiguration
    {
        return new CommunicatorConfiguration(
            $this->getApiKey(),
            $this->getApiSecret(),
            $this->getApiEndpoint(),
            'OnlinePayments'
        );
    }
}
