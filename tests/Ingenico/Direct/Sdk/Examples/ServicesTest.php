<?php
namespace Ingenico\Direct\Sdk\Examples;

use Exception;
//use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
//use Ingenico\Direct\Sdk\Domain\GetIINDetailsRequest;
use Ingenico\Direct\Sdk\Domain\TestConnection;

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
}
