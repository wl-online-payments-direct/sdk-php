<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Services;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\GetIINDetailsRequest;
use OnlinePayments\Sdk\Resource;
use OnlinePayments\Sdk\ResponseClassMap;

class ServicesClient extends Resource implements ServicesClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function testConnection(CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\TestConnection');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/services/testconnection'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getIINDetails(GetIINDetailsRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\GetIINDetailsResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/services/getIINdetails'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }
}
