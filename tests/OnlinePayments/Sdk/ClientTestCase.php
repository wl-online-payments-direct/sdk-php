<?php

namespace OnlinePayments\Sdk;

use Exception;

class ClientTestCase extends OnlinePaymentsTestCase
{
    /**
     * @return Client
     * @throws Exception
     */
    protected function getClient()
    {
        return new Client(new Communicator(new DefaultConnection(), $this->getCommunicatorConfiguration()));
    }
}
