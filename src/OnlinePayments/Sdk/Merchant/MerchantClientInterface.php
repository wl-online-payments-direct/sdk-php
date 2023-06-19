<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant;

use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClientInterface;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClientInterface;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\Merchant\Services\ServicesClientInterface;
use OnlinePayments\Sdk\Merchant\Sessions\SessionsClientInterface;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClientInterface;

interface MerchantClientInterface
{
    /**
     * ApiResource /v2/{merchantId}/hostedcheckouts
     *
     * @return HostedCheckoutClientInterface
     */
    public function hostedCheckout();

    /**
     * ApiResource /v2/{merchantId}/hostedtokenizations
     *
     * @return HostedTokenizationClientInterface
     */
    public function hostedTokenization();

    /**
     * ApiResource /v2/{merchantId}/mandates
     *
     * @return MandatesClientInterface
     */
    public function mandates();

    /**
     * ApiResource /v2/{merchantId}/paymentlinks
     *
     * @return PaymentLinksClientInterface
     */
    public function paymentLinks();

    /**
     * ApiResource /v2/{merchantId}/payments
     *
     * @return PaymentsClientInterface
     */
    public function payments();

    /**
     * ApiResource /v2/{merchantId}/payouts
     *
     * @return PayoutsClientInterface
     */
    public function payouts();

    /**
     * ApiResource /v2/{merchantId}/productgroups
     *
     * @return ProductGroupsClientInterface
     */
    public function productGroups();

    /**
     * ApiResource /v2/{merchantId}/products
     *
     * @return ProductsClientInterface
     */
    public function products();

    /**
     * ApiResource /v2/{merchantId}/services
     *
     * @return ServicesClientInterface
     */
    public function services();

    /**
     * ApiResource /v2/{merchantId}/sessions
     *
     * @return SessionsClientInterface
     */
    public function sessions();

    /**
     * ApiResource /v2/{merchantId}/tokens
     *
     * @return TokensClientInterface
     */
    public function tokens();
}
