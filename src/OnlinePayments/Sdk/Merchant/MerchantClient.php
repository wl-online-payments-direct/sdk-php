<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\Merchant\Captures\CapturesClient;
use OnlinePayments\Sdk\Merchant\Complete\CompleteClient;
use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClient;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClient;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClient;
use OnlinePayments\Sdk\Merchant\PaymentLinks\PaymentLinksClient;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClient;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClient;
use OnlinePayments\Sdk\Merchant\PrivacyPolicy\PrivacyPolicyClient;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClient;
use OnlinePayments\Sdk\Merchant\Products\ProductsClient;
use OnlinePayments\Sdk\Merchant\Refunds\RefundsClient;
use OnlinePayments\Sdk\Merchant\Services\ServicesClient;
use OnlinePayments\Sdk\Merchant\Sessions\SessionsClient;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClient;
use OnlinePayments\Sdk\Merchant\Webhooks\WebhooksClient;

/**
 * Merchant client.
 */
class MerchantClient extends ApiResource implements MerchantClientInterface
{
    /**
     * @inheritdoc
     */
    public function hostedCheckout()
    {
        return new HostedCheckoutClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function hostedTokenization()
    {
        return new HostedTokenizationClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function payments()
    {
        return new PaymentsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function captures()
    {
        return new CapturesClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function refunds()
    {
        return new RefundsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function complete()
    {
        return new CompleteClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function productGroups()
    {
        return new ProductGroupsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function products()
    {
        return new ProductsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function services()
    {
        return new ServicesClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function webhooks()
    {
        return new WebhooksClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function sessions()
    {
        return new SessionsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function tokens()
    {
        return new TokensClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function payouts()
    {
        return new PayoutsClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function mandates()
    {
        return new MandatesClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function privacyPolicy()
    {
        return new PrivacyPolicyClient($this, $this->context);
    }

    /**
     * @inheritdoc
     */
    public function paymentLinks()
    {
        return new PaymentLinksClient($this, $this->context);
    }
}
