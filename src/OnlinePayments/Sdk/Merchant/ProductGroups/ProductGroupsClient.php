<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\ProductGroups;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Resource;
use OnlinePayments\Sdk\ResponseClassMap;

class ProductGroupsClient extends Resource implements ProductGroupsClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getProductGroups(GetProductGroupsParams $query, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\GetPaymentProductGroupsResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/productgroups'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getProductGroup($paymentProductGroupId, GetProductGroupParams $query, CallContext $callContext = null)
    {
        $this->context['paymentProductGroupId'] = $paymentProductGroupId;
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\PaymentProductGroup');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/productgroups/{paymentProductGroupId}'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }
}
