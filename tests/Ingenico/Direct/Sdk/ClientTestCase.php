<?php
namespace Ingenico\Direct\Sdk;

use Exception;

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
     * @throws Exception
     */
    protected function getClient()
    {
        if (is_null($this->client)) {
            $connection = new DefaultConnection();
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicator = new Communicator($connection, $communicatorConfiguration);
            $this->client = new Client($communicator);
        }
        return $this->client;
    }

}
