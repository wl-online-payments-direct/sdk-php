<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Merchant\ProductGroups;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\AuthorizationException;
use Ingenico\Direct\Sdk\CallContext;
use Ingenico\Direct\Sdk\DirectException;
use Ingenico\Direct\Sdk\Domain\GetPaymentProductGroupsResponse;
use Ingenico\Direct\Sdk\Domain\PaymentProductGroup;
use Ingenico\Direct\Sdk\IdempotenceException;
use Ingenico\Direct\Sdk\InvalidResponseException;
use Ingenico\Direct\Sdk\ReferenceException;
use Ingenico\Direct\Sdk\Resource;
use Ingenico\Direct\Sdk\ResponseClassMap;
use Ingenico\Direct\Sdk\ValidationException;

class ProductGroupsClient extends Resource implements ProductGroupsClientInterface
{
    /**
     * Resource /v2/{merchantId}/productgroups - Get product groups
     *
     * @param GetProductGroupsParams $query
     * @param CallContext $callContext
     * @return GetPaymentProductGroupsResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference/index.html#operation/GetProductGroups Get product groups
     */
    public function getProductGroups(GetProductGroupsParams $query, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\GetPaymentProductGroupsResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/productgroups'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }

    /**
     * Resource /v2/{merchantId}/productgroups/{paymentProductGroupId} - Get product group
     *
     * @param string $paymentProductGroupId
     * @param GetProductGroupParams $query
     * @param CallContext $callContext
     * @return PaymentProductGroup
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference/index.html#operation/GetProductGroup Get product group
     */
    public function getProductGroup($paymentProductGroupId, GetProductGroupParams $query, CallContext $callContext = null)
    {
        $this->context['paymentProductGroupId'] = $paymentProductGroupId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\PaymentProductGroup');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/productgroups/{paymentProductGroupId}'),
            $this->getClientMetaInfo(),
            $query,
            $callContext
        );
    }
}
