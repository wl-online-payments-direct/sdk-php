<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Products;

use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Resource;
use OnlinePayments\Sdk\ResponseClassMap;

class ProductsClient extends Resource implements ProductsClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function getPaymentProducts(GetPaymentProductsParams $query, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\GetPaymentProductsResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/products'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentProduct($paymentProductId, GetPaymentProductParams $query, CallContext $callContext = null)
    {
        $this->context['paymentProductId'] = $paymentProductId;
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\PaymentProduct');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/products/{paymentProductId}'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getProductDirectory($paymentProductId, GetProductDirectoryParams $query, CallContext $callContext = null)
    {
        $this->context['paymentProductId'] = $paymentProductId;
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\ProductDirectory');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/products/{paymentProductId}/directory'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentProductNetworks($paymentProductId, GetPaymentProductNetworksParams $query, CallContext $callContext = null)
    {
        $this->context['paymentProductId'] = $paymentProductId;
        $responseClassMap = new ResponseClassMap('\OnlinePayments\Sdk\Domain\PaymentProductNetworksResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/products/{paymentProductId}/networks'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }
}
