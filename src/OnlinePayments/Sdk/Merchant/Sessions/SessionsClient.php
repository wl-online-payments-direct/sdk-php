<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Sessions;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\SessionRequest;
use OnlinePayments\Sdk\ResponseClassMap;

class SessionsClient extends ApiResource implements SessionsClientInterface
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
