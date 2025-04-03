<?php
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Authentication\V1HmacAuthenticator;

class ClientTestCase extends TestCase
{
    /**
     * @var Client|null
     */
    protected $client = null;

    /**
     * @var Client|null
     */
    protected $proxyClient = null;

    /**
     * @return Client
     */
    protected function getClient()
    {
        if (is_null($this->client)) {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $authenticator = new V1HmacAuthenticator($communicatorConfiguration);
            $communicator = new Communicator($communicatorConfiguration, $authenticator);
            $this->client = new Client($communicator);
        }
        return $this->client;
    }

    /**
     * @return Client
     */
    protected function getProxyClient()
    {
        $proxyHost = $this->getProxyHost();
        if (!$proxyHost) {
            $this->markTestSkipped("Proxy host not set");
        }

        if (is_null($this->proxyClient)) {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setProxyConfiguration(new ProxyConfiguration(
                $this->getProxyHost(),
                $this->getProxyPort(),
                $this->getProxyUsername(),
                $this->getProxyPassword()
            ));
            $authenticator = new V1HmacAuthenticator($communicatorConfiguration);
            $communicator = new Communicator($communicatorConfiguration, $authenticator);
            $this->proxyClient = new Client($communicator);
        }
        return $this->proxyClient;
    }
}
