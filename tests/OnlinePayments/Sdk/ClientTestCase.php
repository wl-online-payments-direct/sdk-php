<?php

namespace OnlinePayments\Sdk;

use Exception;

class ClientTestCase extends OnlinePaymentsTestCase
{
    /**
     * @var Client|null
     */
    protected $client = null;

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
