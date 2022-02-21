<?php

namespace OnlinePayments\Sdk\Examples;

use Exception;
use OnlinePayments\Sdk\ClientTestCase;
use OnlinePayments\Sdk\Domain\TestConnection;

/**
 * @group examples
 *
 */
class ServicesTest extends ClientTestCase
{
    /**
     * @return TestConnection
     * @throws Exception
     */
    public function testTestConnection()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        return $client->merchant($merchantId)->services()->testConnection();
    }

    // TODO getIINDetails is not specced yet. Re-enable and fix test once it is.
//    /**
//     * @return GetIINDetailsResponse
//     * @throws ApiException
//     */
//    public function testRetrieveIINDetails()
//    {
//        $client = $this->getClient();
//        $merchantId = $this->getMerchantId();
//        $body = new GetIINDetailsRequest();
//
//        $body->setBin("4567350000427977");
//
//        return $client->merchant($merchantId)->services()->getIINdetails($body);
//    }
}
