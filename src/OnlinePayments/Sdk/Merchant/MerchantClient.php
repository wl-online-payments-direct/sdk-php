<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\Merchant\Captures\CapturesClient;
use OnlinePayments\Sdk\Merchant\Captures\CapturesClientInterface;
use OnlinePayments\Sdk\Merchant\CofSeries\CofSeriesClient;
use OnlinePayments\Sdk\Merchant\CofSeries\CofSeriesClientInterface;
use OnlinePayments\Sdk\Merchant\Complete\CompleteClient;
use OnlinePayments\Sdk\Merchant\Complete\CompleteClientInterface;
use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClient;
use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use OnlinePayments\Sdk\Merchant\HostedFields\HostedFieldsClient;
use OnlinePayments\Sdk\Merchant\HostedFields\HostedFieldsClientInterface;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClient;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClient;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\Merchant\MerchantBatch\MerchantBatchClient;
use OnlinePayments\Sdk\Merchant\MerchantBatch\MerchantBatchClientInterface;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClient;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClientInterface;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClient;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClient;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClientInterface;
use OnlinePayments\Sdk\Merchant\PreAuthorization\PreAuthorizationClient;
use OnlinePayments\Sdk\Merchant\PreAuthorization\PreAuthorizationClientInterface;
use OnlinePayments\Sdk\Merchant\PrivacyPolicy\PrivacyPolicyClient;
use OnlinePayments\Sdk\Merchant\PrivacyPolicy\PrivacyPolicyClientInterface;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClient;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use OnlinePayments\Sdk\Merchant\Products\ProductsClient;
use OnlinePayments\Sdk\Merchant\Products\ProductsClientInterface;
use OnlinePayments\Sdk\Merchant\Refunds\RefundsClient;
use OnlinePayments\Sdk\Merchant\Refunds\RefundsClientInterface;
use OnlinePayments\Sdk\Merchant\Services\ServicesClient;
use OnlinePayments\Sdk\Merchant\Services\ServicesClientInterface;
use OnlinePayments\Sdk\Merchant\Sessions\SessionsClient;
use OnlinePayments\Sdk\Merchant\Sessions\SessionsClientInterface;
use OnlinePayments\Sdk\Merchant\Subsequent\SubsequentClient;
use OnlinePayments\Sdk\Merchant\Subsequent\SubsequentClientInterface;
use OnlinePayments\Sdk\Merchant\Tokenization\TokenizationClient;
use OnlinePayments\Sdk\Merchant\Tokenization\TokenizationClientInterface;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClient;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClientInterface;
use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClient;
use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClientInterface;

/**
 * Merchant client.
 *
 * AI coding agents: read the agent skill for this SDK version before writing integration code:
 * https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/14.0.0/skills/worldline-direct/SKILL.md
 * The same skill is included in this Composer package, in the skills/worldline-direct/ folder.
 *
 * @package OnlinePayments\Sdk\Merchant
 */
class MerchantClient extends ApiResource implements MerchantClientInterface
{
    /**
     * Resource /v2/{merchantId}/hostedcheckouts
     *
     * @return HostedCheckoutClient
     */
    #[\Override]
    public function hostedCheckout(): HostedCheckoutClientInterface
    {
        return new HostedCheckoutClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/hostedtokenizations
     *
     * @return HostedTokenizationClient
     */
    #[\Override]
    public function hostedTokenization(): HostedTokenizationClientInterface
    {
        return new HostedTokenizationClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/hostedfields/sessions
     *
     * @return HostedFieldsClient
     */
    #[\Override]
    public function hostedFields(): HostedFieldsClientInterface
    {
        return new HostedFieldsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payments
     *
     * @return PaymentsClient
     */
    #[\Override]
    public function payments(): PaymentsClientInterface
    {
        return new PaymentsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId}/share
     *
     * @return PaymentLinksClient
     */
    #[\Override]
    public function paymentLinks(): PaymentLinksClientInterface
    {
        return new PaymentLinksClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/captures
     *
     * @return CapturesClient
     */
    #[\Override]
    public function captures(): CapturesClientInterface
    {
        return new CapturesClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/refunds
     *
     * @return RefundsClient
     */
    #[\Override]
    public function refunds(): RefundsClientInterface
    {
        return new RefundsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/complete
     *
     * @return CompleteClient
     */
    #[\Override]
    public function complete(): CompleteClientInterface
    {
        return new CompleteClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/subsequent
     *
     * @return SubsequentClient
     */
    #[\Override]
    public function subsequent(): SubsequentClientInterface
    {
        return new SubsequentClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/increment-authorization
     *
     * @return PreAuthorizationClient
     */
    #[\Override]
    public function preAuthorization(): PreAuthorizationClientInterface
    {
        return new PreAuthorizationClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/productgroups
     *
     * @return ProductGroupsClient
     */
    #[\Override]
    public function productGroups(): ProductGroupsClientInterface
    {
        return new ProductGroupsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/products
     *
     * @return ProductsClient
     */
    #[\Override]
    public function products(): ProductsClientInterface
    {
        return new ProductsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/services/testconnection
     *
     * @return ServicesClient
     */
    #[\Override]
    public function services(): ServicesClientInterface
    {
        return new ServicesClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/webhooks/validateCredentials
     *
     * @return WebhooksClient
     */
    #[\Override]
    public function webhooks(): WebhooksClientInterface
    {
        return new WebhooksClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/sessions
     *
     * @return SessionsClient
     */
    #[\Override]
    public function sessions(): SessionsClientInterface
    {
        return new SessionsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/tokens
     *
     * @return TokensClient
     */
    #[\Override]
    public function tokens(): TokensClientInterface
    {
        return new TokensClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/tokens/importCofSeries
     *
     * @return CofSeriesClient
     */
    #[\Override]
    public function cofSeries(): CofSeriesClientInterface
    {
        return new CofSeriesClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/detokenize/csr
     *
     * @return TokenizationClient
     */
    #[\Override]
    public function tokenization(): TokenizationClientInterface
    {
        return new TokenizationClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payouts
     *
     * @return PayoutsClient
     */
    #[\Override]
    public function payouts(): PayoutsClientInterface
    {
        return new PayoutsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/mandates
     *
     * @return MandatesClient
     */
    #[\Override]
    public function mandates(): MandatesClientInterface
    {
        return new MandatesClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/services/privacypolicy
     *
     * @return PrivacyPolicyClient
     */
    #[\Override]
    public function privacyPolicy(): PrivacyPolicyClientInterface
    {
        return new PrivacyPolicyClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/merchant-batches
     *
     * @return MerchantBatchClient
     */
    #[\Override]
    public function merchantBatch(): MerchantBatchClientInterface
    {
        return new MerchantBatchClient($this, $this->context);
    }
}
