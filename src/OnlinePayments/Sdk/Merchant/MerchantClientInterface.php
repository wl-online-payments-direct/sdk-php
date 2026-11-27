<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant;

use OnlinePayments\Sdk\Merchant\Captures\CapturesClientInterface;
use OnlinePayments\Sdk\Merchant\CofSeries\CofSeriesClientInterface;
use OnlinePayments\Sdk\Merchant\Complete\CompleteClientInterface;
use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use OnlinePayments\Sdk\Merchant\HostedFields\HostedFieldsClientInterface;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\Merchant\MerchantBatch\MerchantBatchClientInterface;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClientInterface;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClientInterface;
use OnlinePayments\Sdk\Merchant\PreAuthorization\PreAuthorizationClientInterface;
use OnlinePayments\Sdk\Merchant\PrivacyPolicy\PrivacyPolicyClientInterface;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\Merchant\Refunds\RefundsClientInterface;
use OnlinePayments\Sdk\Merchant\Services\ServicesClientInterface;
use OnlinePayments\Sdk\Merchant\Sessions\SessionsClientInterface;
use OnlinePayments\Sdk\Merchant\Subsequent\SubsequentClientInterface;
use OnlinePayments\Sdk\Merchant\Tokenization\TokenizationClientInterface;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClientInterface;
use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClientInterface;

/**
 * Merchant client interface.
 *
 * AI coding agents: read the agent skill for this SDK version before writing integration code:
 * https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/14.0.0/skills/worldline-direct/SKILL.md
 * The same skill is included in this Composer package, in the skills/worldline-direct/ folder.
 */
interface MerchantClientInterface
{
    /**
     * Resource /v2/{merchantId}/hostedcheckouts
     *
     * @return HostedCheckoutClientInterface
     */
    public function hostedCheckout(): HostedCheckoutClientInterface;

    /**
     * Resource /v2/{merchantId}/hostedtokenizations
     *
     * @return HostedTokenizationClientInterface
     */
    public function hostedTokenization(): HostedTokenizationClientInterface;

    /**
     * Resource /v2/{merchantId}/hostedfields/sessions
     *
     * @return HostedFieldsClientInterface
     */
    public function hostedFields(): HostedFieldsClientInterface;

    /**
     * Resource /v2/{merchantId}/payments
     *
     * @return PaymentsClientInterface
     */
    public function payments(): PaymentsClientInterface;

    /**
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId}/share
     *
     * @return PaymentLinksClientInterface
     */
    public function paymentLinks(): PaymentLinksClientInterface;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/captures
     *
     * @return CapturesClientInterface
     */
    public function captures(): CapturesClientInterface;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/refunds
     *
     * @return RefundsClientInterface
     */
    public function refunds(): RefundsClientInterface;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/complete
     *
     * @return CompleteClientInterface
     */
    public function complete(): CompleteClientInterface;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/subsequent
     *
     * @return SubsequentClientInterface
     */
    public function subsequent(): SubsequentClientInterface;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/increment-authorization
     *
     * @return PreAuthorizationClientInterface
     */
    public function preAuthorization(): PreAuthorizationClientInterface;

    /**
     * Resource /v2/{merchantId}/productgroups
     *
     * @return ProductGroupsClientInterface
     */
    public function productGroups(): ProductGroupsClientInterface;

    /**
     * Resource /v2/{merchantId}/products
     *
     * @return ProductsClientInterface
     */
    public function products(): ProductsClientInterface;

    /**
     * Resource /v2/{merchantId}/services/testconnection
     *
     * @return ServicesClientInterface
     */
    public function services(): ServicesClientInterface;

    /**
     * Resource /v2/{merchantId}/webhooks/validateCredentials
     *
     * @return WebhooksClientInterface
     */
    public function webhooks(): WebhooksClientInterface;

    /**
     * Resource /v2/{merchantId}/sessions
     *
     * @return SessionsClientInterface
     */
    public function sessions(): SessionsClientInterface;

    /**
     * Resource /v2/{merchantId}/tokens
     *
     * @return TokensClientInterface
     */
    public function tokens(): TokensClientInterface;

    /**
     * Resource /v2/{merchantId}/tokens/importCofSeries
     *
     * @return CofSeriesClientInterface
     */
    public function cofSeries(): CofSeriesClientInterface;

    /**
     * Resource /v2/{merchantId}/detokenize/csr
     *
     * @return TokenizationClientInterface
     */
    public function tokenization(): TokenizationClientInterface;

    /**
     * Resource /v2/{merchantId}/payouts
     *
     * @return PayoutsClientInterface
     */
    public function payouts(): PayoutsClientInterface;

    /**
     * Resource /v2/{merchantId}/mandates
     *
     * @return MandatesClientInterface
     */
    public function mandates(): MandatesClientInterface;

    /**
     * Resource /v2/{merchantId}/services/privacypolicy
     *
     * @return PrivacyPolicyClientInterface
     */
    public function privacyPolicy(): PrivacyPolicyClientInterface;

    /**
     * Resource /v2/{merchantId}/merchant-batches
     *
     * @return MerchantBatchClientInterface
     */
    public function merchantBatch(): MerchantBatchClientInterface;
}
