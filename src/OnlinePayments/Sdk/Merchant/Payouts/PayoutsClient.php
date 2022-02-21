<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Payouts;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\CreatePayoutRequest;
use OnlinePayments\Sdk\Resource;
use OnlinePayments\Sdk\ResponseClassMap;

class PayoutsClient extends Resource implements PayoutsClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function createPayout(CreatePayoutRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\PayoutResponse');
        $responseClassMap->setDefaultErrorResponseClassName('\OnlinePayments\Sdk\Domain\PayoutErrorResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payouts'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getPayout($payoutId, CallContext $callContext = null)
    {
        $this->context['payoutId'] = $payoutId;
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\PayoutResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payouts/{payoutId}'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }
}
