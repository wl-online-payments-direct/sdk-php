<?php
namespace OnlinePayments\Sdk;

use Exception;
use RuntimeException;

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
     * @var int|null PID of the mock server
     */
    private $mockServerPid = null;

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

    /**
     * Start a PHP built-in mock HTTP server for a specific test.
     * @return string Base URL of the mock server
     * @throws RuntimeException
     */
    protected function startMockServerForTest()
    {
        $mockServerScript = __DIR__ . '/../../mockHttpServer.php';
        if (!file_exists($mockServerScript)) {
            throw new RuntimeException("Mock server script not found: $mockServerScript");
        }

        $cmd = sprintf(
            "php -S 127.0.0.1:8080 %s > /dev/null 2>&1 & echo $!",
            escapeshellarg($mockServerScript)
        );

        $pid = (int)shell_exec($cmd);
        if ($pid === 0) {
            throw new RuntimeException("Failed to start mock server");
        }

        $this->mockServerPid = $pid;
        usleep(200_000); // Give server a moment to start

        return 'http://127.0.0.1:8080';
    }

    /**
     * Stop the mock server for a test
     */
    protected function stopMockServerForTest()
    {
        if ($this->mockServerPid) {
            exec("kill {$this->mockServerPid}");
            $this->mockServerPid = null;
        }
    }
}
