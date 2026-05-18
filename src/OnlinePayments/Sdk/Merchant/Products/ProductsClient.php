<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Products;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\GetPaymentProductsResponse;
use OnlinePayments\Sdk\Domain\PaymentProduct;
use OnlinePayments\Sdk\Domain\PaymentProductNetworksResponse;
use OnlinePayments\Sdk\Domain\ProductDirectory;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Products client.
 *
 * @package OnlinePayments\Sdk\Merchant\Products
 */
class ProductsClient extends ApiResource implements ProductsClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/products - Get payment products
     *
     * @param GetPaymentProductsParams $query
     * @param CallContext|null         $callContext
     *
     * @return GetPaymentProductsResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getPaymentProducts(GetPaymentProductsParams $query, ?CallContext $callContext = null): GetPaymentProductsResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\GetPaymentProductsResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/products'),
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
     * Resource /v2/{merchantId}/products/{paymentProductId} - Get payment product
     *
     * @param int                     $paymentProductId
     * @param GetPaymentProductParams $query
     * @param CallContext|null        $callContext
     *
     * @return PaymentProduct
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getPaymentProduct(int $paymentProductId, GetPaymentProductParams $query, ?CallContext $callContext = null): PaymentProduct
    {
        $this->context['paymentProductId'] = $paymentProductId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\PaymentProduct';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/products/{paymentProductId}'),
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
     * Resource /v2/{merchantId}/products/{paymentProductId}/networks - Get payment product networks
     *
     * @param int                             $paymentProductId
     * @param GetPaymentProductNetworksParams $query
     * @param CallContext|null                $callContext
     *
     * @return PaymentProductNetworksResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getPaymentProductNetworks(int $paymentProductId, GetPaymentProductNetworksParams $query, ?CallContext $callContext = null): PaymentProductNetworksResponse
    {
        $this->context['paymentProductId'] = $paymentProductId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\PaymentProductNetworksResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/products/{paymentProductId}/networks'),
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
     * Resource /v2/{merchantId}/products/{paymentProductId}/directory - Get payment product directory
     *
     * @param int                       $paymentProductId
     * @param GetProductDirectoryParams $query
     * @param CallContext|null          $callContext
     *
     * @return ProductDirectory
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getProductDirectory(int $paymentProductId, GetProductDirectoryParams $query, ?CallContext $callContext = null): ProductDirectory
    {
        $this->context['paymentProductId'] = $paymentProductId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\ProductDirectory';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/products/{paymentProductId}/directory'),
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
