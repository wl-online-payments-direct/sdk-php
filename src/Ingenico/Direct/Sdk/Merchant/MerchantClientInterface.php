<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Merchant;

use Ingenico\Direct\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use Ingenico\Direct\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use Ingenico\Direct\Sdk\Merchant\Payments\PaymentsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Payouts\PayoutsClientInterface;
use Ingenico\Direct\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Products\ProductsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Services\ServicesClientInterface;
use Ingenico\Direct\Sdk\Merchant\Sessions\SessionsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Tokens\TokensClientInterface;

interface MerchantClientInterface
{
    /**
     * Resource /v2/{merchantId}/hostedcheckouts
     *
     * @return HostedCheckoutClientInterface
     */
    public function hostedCheckout();

    /**
     * Resource /v2/{merchantId}/hostedtokenizations
     *
     * @return HostedTokenizationClientInterface
     */
    public function hostedTokenization();

    /**
     * Resource /v2/{merchantId}/payments
     *
     * @return PaymentsClientInterface
     */
    public function payments();

    /**
     * Resource /v2/{merchantId}/payouts
     *
     * @return PayoutsClientInterface
     */
    public function payouts();

    /**
     * Resource /v2/{merchantId}/productgroups
     *
     * @return ProductGroupsClientInterface
     */
    public function productGroups();

    /**
     * Resource /v2/{merchantId}/products
     *
     * @return ProductsClientInterface
     */
    public function products();

    /**
     * Resource /v2/{merchantId}/services
     *
     * @return ServicesClientInterface
     */
    public function services();

    /**
     * Resource /v2/{merchantId}/sessions
     *
     * @return SessionsClientInterface
     */
    public function sessions();

    /**
     * Resource /v2/{merchantId}/tokens
     *
     * @return TokensClientInterface
     */
    public function tokens();
}
