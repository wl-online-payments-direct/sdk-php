<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\ProductGroups;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\GetPaymentProductGroupsResponse;
use OnlinePayments\Sdk\Domain\PaymentProductGroup;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * ProductGroups client interface.
 */
interface ProductGroupsClientInterface
{
    /**
     * Resource /v2/{merchantId}/productgroups - Get product groups
     *
     * @param GetProductGroupsParams $query
     * @param CallContext|null $callContext
     * @return GetPaymentProductGroupsResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getProductGroups(GetProductGroupsParams $query, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/productgroups/{paymentProductGroupId} - Get product group
     *
     * @param string $paymentProductGroupId
     * @param GetProductGroupParams $query
     * @param CallContext|null $callContext
     * @return PaymentProductGroup
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getProductGroup($paymentProductGroupId, GetProductGroupParams $query, CallContext $callContext = null);
}
