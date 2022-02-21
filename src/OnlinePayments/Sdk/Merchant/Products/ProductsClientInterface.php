<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Products;

use Exception;
use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\GetPaymentProductsResponse;
use OnlinePayments\Sdk\Domain\PaymentProduct;
use OnlinePayments\Sdk\Domain\PaymentProductNetworksResponse;
use OnlinePayments\Sdk\Domain\ProductDirectory;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\InvalidResponseException;
use OnlinePayments\Sdk\PaymentPlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

interface ProductsClientInterface
{
    /**
     * Resource /v2/{merchantId}/products - Get payment products
     *
     * @param GetPaymentProductsParams $query
     * @param CallContext $callContext
     * @return GetPaymentProductsResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function getPaymentProducts(GetPaymentProductsParams $query, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/products/{paymentProductId} - Get payment product
     *
     * @param int $paymentProductId
     * @param GetPaymentProductParams $query
     * @param CallContext $callContext
     * @return PaymentProduct
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function getPaymentProduct($paymentProductId, GetPaymentProductParams $query, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/products/{paymentProductId}/directory - Get payment product directory
     *
     * @param int $paymentProductId
     * @param GetProductDirectoryParams $query
     * @param CallContext $callContext
     * @return ProductDirectory
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function getProductDirectory($paymentProductId, GetProductDirectoryParams $query, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/products/{paymentProductId}/networks - Get payment product networks
     *
     * @param int $paymentProductId
     * @param GetPaymentProductNetworksParams $query
     * @param CallContext $callContext
     * @return PaymentProductNetworksResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function getPaymentProductNetworks($paymentProductId, GetPaymentProductNetworksParams $query, CallContext $callContext = null);
}
