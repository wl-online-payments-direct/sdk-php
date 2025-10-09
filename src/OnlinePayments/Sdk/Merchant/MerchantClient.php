<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\Merchant\Captures\CapturesClient;
use OnlinePayments\Sdk\Merchant\Captures\CapturesClientInterface;
use OnlinePayments\Sdk\Merchant\Complete\CompleteClient;
use OnlinePayments\Sdk\Merchant\Complete\CompleteClientInterface;
use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClient;
use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClient;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClient;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClientInterface;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClient;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClientInterface;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClient;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClientInterface;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClient;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClientInterface;
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
use OnlinePayments\Sdk\Merchant\Tokens\TokensClient;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClientInterface;
use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClient;
use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClientInterface;

/**
 * Merchant client.
 */
class MerchantClient extends ApiResource implements MerchantClientInterface
{
    /**
     * @inheritdoc
     */
    public function hostedCheckout(): HostedCheckoutClientInterface
    {
        return new HostedCheckoutClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function hostedTokenization(): HostedTokenizationClientInterface
    {
        return new HostedTokenizationClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function payments(): PaymentsClientInterface
    {
        return new PaymentsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function captures(): CapturesClientInterface
    {
        return new CapturesClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function refunds(): RefundsClientInterface
    {
        return new RefundsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function complete(): CompleteClientInterface
    {
        return new CompleteClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function subsequent(): SubsequentClientInterface
    {
        return new SubsequentClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function productGroups(): ProductGroupsClientInterface
    {
        return new ProductGroupsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function products(): ProductsClientInterface
    {
        return new ProductsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function services(): ServicesClientInterface
    {
        return new ServicesClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function webhooks(): WebhooksClientInterface
    {
        return new WebhooksClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function sessions(): SessionsClientInterface
    {
        return new SessionsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function tokens(): TokensClientInterface
    {
        return new TokensClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function payouts(): PayoutsClientInterface
    {
        return new PayoutsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function mandates(): MandatesClientInterface
    {
        return new MandatesClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function privacyPolicy(): PrivacyPolicyClientInterface
    {
        return new PrivacyPolicyClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function paymentLinks(): PaymentLinksClientInterface
    {
        return new PaymentLinksClient($this, $this->context);
    }
}
