<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Merchant;

use Ingenico\Direct\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use Ingenico\Direct\Sdk\Merchant\Payments\PaymentsClientInterface;
use Ingenico\Direct\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Products\ProductsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Services\ServicesClientInterface;
use Ingenico\Direct\Sdk\Merchant\Sessions\SessionsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Tokens\TokensClientInterface;

interface MerchantClientInterface
{
    /**
     * Resource /v2/{merchantId}/products
     *
     * @return ProductsClientInterface
     */
    public function products();

    /**
     * Resource /v2/{merchantId}/tokens/{tokenId}
     *
     * @param string $tokenId
     * @return TokensClientInterface
     */
    public function tokens($tokenId);

    /**
     * Resource /v2/{merchantId}/sessions
     *
     * @return SessionsClientInterface
     */
    public function sessions();

    /**
     * Resource /v2/{merchantId}/payments
     *
     * @return PaymentsClientInterface
     */
    public function payments();

    /**
     * Resource /v2/{merchantId}/services/testconnection
     *
     * @return ServicesClientInterface
     */
    public function services();

    /**
     * Resource /v2/{merchantId}/productgroups
     *
     * @return ProductGroupsClientInterface
     */
    public function productGroups();

    /**
     * Resource /v2/{merchantId}/hostedcheckouts
     *
     * @return HostedCheckoutClientInterface
     */
    public function hostedCheckout();
}