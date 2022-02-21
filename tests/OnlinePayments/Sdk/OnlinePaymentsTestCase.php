<?php

namespace OnlinePayments\Sdk;

use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class TestCase
 */
abstract class OnlinePaymentsTestCase extends TestCase
{
    /**
     * @var string|null
     */
    protected $configFilePath = null;

    /**
     * @var JsonValuesStore|null
     */
    protected $jsonValuesStore = null;

    /**
     * @var CommunicatorConfiguration
     */
    protected $communicatorConfiguration;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
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
    protected function getApiKey()
    {
        return $this->getJsonValuesStore()->getValue('api_key');
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getApiSecret()
    {
        return $this->getJsonValuesStore()->getValue('api_secret');
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
     * @throws Exception
     */
    protected function getCommunicatorConfiguration()
    {
        if (is_null($this->communicatorConfiguration)) {
            $this->communicatorConfiguration = new CommunicatorConfiguration(
                $this->getApiKey(),
                $this->getApiSecret(),
                $this->getApiEndpoint(),
                'OnlinePayments'
            );
        }
        return $this->communicatorConfiguration;
    }
}
