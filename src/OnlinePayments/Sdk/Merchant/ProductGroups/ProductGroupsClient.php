<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\ProductGroups;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\GetPaymentProductGroupsResponse;
use OnlinePayments\Sdk\Domain\PaymentProductGroup;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * ProductGroups client.
 *
 * @package OnlinePayments\Sdk\Merchant\ProductGroups
 */
class ProductGroupsClient extends ApiResource implements ProductGroupsClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/productgroups - Get product groups
     *
     * @param GetProductGroupsParams $query
     * @param CallContext|null       $callContext
     *
     * @return GetPaymentProductGroupsResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getProductGroups(GetProductGroupsParams $query, ?CallContext $callContext = null): GetPaymentProductGroupsResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\GetPaymentProductGroupsResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/productgroups'),
                $this->getClientMetaInfo(),
                $query,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * Resource /v2/{merchantId}/productgroups/{paymentProductGroupId} - Get product group
     *
     * @param string                $paymentProductGroupId
     * @param GetProductGroupParams $query
     * @param CallContext|null      $callContext
     *
     * @return PaymentProductGroup
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getProductGroup(string $paymentProductGroupId, GetProductGroupParams $query, ?CallContext $callContext = null): PaymentProductGroup
    {
        $this->context['paymentProductGroupId'] = $paymentProductGroupId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\PaymentProductGroup';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/productgroups/{paymentProductGroupId}'),
                $this->getClientMetaInfo(),
                $query,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * @return ExceptionFactory
     */
    private function getResponseExceptionFactory(): ExceptionFactory
    {
        if (is_null($this->responseExceptionFactory)) {
            $this->responseExceptionFactory = new ExceptionFactory();
        }
        return $this->responseExceptionFactory;
    }
}
