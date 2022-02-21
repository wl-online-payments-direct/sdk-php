<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\HostedTokenization;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\CreateHostedTokenizationRequest;
use OnlinePayments\Sdk\Resource;
use OnlinePayments\Sdk\ResponseClassMap;

class HostedTokenizationClient extends Resource implements HostedTokenizationClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function createHostedTokenization(CreateHostedTokenizationRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\CreateHostedTokenizationResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/hostedtokenizations'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getHostedTokenization($hostedTokenizationId, CallContext $callContext = null)
    {
        $this->context['hostedTokenizationId'] = $hostedTokenizationId;
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\GetHostedTokenizationResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/hostedtokenizations/{hostedTokenizationId}'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }
}
