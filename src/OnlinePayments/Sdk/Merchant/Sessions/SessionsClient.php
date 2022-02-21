<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Sessions;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\SessionRequest;
use OnlinePayments\Sdk\Resource;
use OnlinePayments\Sdk\ResponseClassMap;

class SessionsClient extends Resource implements SessionsClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function createSession(SessionRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\SessionResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/sessions'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }
}
