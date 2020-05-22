<?php
namespace Ingenico\Direct\Sdk\Examples;

use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\SessionRequest;
use Ingenico\Direct\Sdk\Domain\SessionResponse;

/**
 * @group examples
 *
 */
class SessionTest extends ClientTestCase
{
    /**
     * @return SessionResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function testCreateSession()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $sessionRequest = new SessionRequest();

        return $client->merchant($merchantId)->sessions()->createSession($sessionRequest);
    }
}
