<?php
namespace OnlinePayments\Sdk;

use Exception;

/**
 * Class TestCase
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    private $configFilePath;

    /**
     * @var JsonValuesStore|null
     */
    private $jsonValuesStore = null;

    /**
     *
     */
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->configFilePath = dirname(__FILE__) . '/../../config.json';
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getMerchantId()
    {
        return $this->getJsonValuesStore()->getValue('merchant_id');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiEndpoint()
    {
        return $this->getJsonValuesStore()->getValue('api_endpoint');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyHost()
    {
        return $this->getJsonValuesStore()->getValue('proxy_host', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyPort()
    {
        return $this->getJsonValuesStore()->getValue('proxy_port', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyUsername()
    {
        return $this->getJsonValuesStore()->getValue('proxy_username', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getProxyPassword()
    {
        return $this->getJsonValuesStore()->getValue('proxy_password', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiKey()
    {
        return $this->getJsonValuesStore()->getValue('v1hmac_api_key', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiSecret()
    {
        return $this->getJsonValuesStore()->getValue('v1hmac_api_secret', false);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getHttpBinUrl()
    {
        $httpBinUrl = $this->getJsonValuesStore()->getValue('httpbin_url', false);
        if (is_null($httpBinUrl)) {
            $httpBinUrl = 'http://httpbin.org';
        }
        return $httpBinUrl;
    }

    /**
     * @return JsonValuesStore
     */
    protected function getJsonValuesStore()
    {
        if (is_null($this->jsonValuesStore)) {
            $this->jsonValuesStore = new JsonValuesStore($this->configFilePath);
        }
        return $this->jsonValuesStore;
    }

    /**
     * @return CommunicatorConfiguration
     */
    protected function getCommunicatorConfiguration()
    {
        return new CommunicatorConfiguration(
            $this->getApiKey(),
            $this->getApiSecret(),
            $this->getApiEndpoint(),
            'OnlinePayments'
        );
    }

    protected function skipWithoutHttpBin() {
        if (!$this->getHttpBinUrl()) {
            $this->markTestSkipped('Testing with httpbin not possible');
        }
    }
}
