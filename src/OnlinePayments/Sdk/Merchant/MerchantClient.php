<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant;

use OnlinePayments\Sdk\Merchant\HostedCheckout\HostedCheckoutClient;
use OnlinePayments\Sdk\Merchant\HostedTokenization\HostedTokenizationClient;
use OnlinePayments\Sdk\Merchant\Mandates\MandatesClient;
use OnlinePayments\Sdk\Merchant\Payments\PaymentsClient;
use OnlinePayments\Sdk\Merchant\Payouts\PayoutsClient;
use OnlinePayments\Sdk\Merchant\ProductGroups\ProductGroupsClient;
use OnlinePayments\Sdk\Merchant\Products\ProductsClient;
use OnlinePayments\Sdk\Merchant\Services\ServicesClient;
use OnlinePayments\Sdk\Merchant\Sessions\SessionsClient;
use OnlinePayments\Sdk\Merchant\Tokens\TokensClient;
use OnlinePayments\Sdk\Resource;

class MerchantClient extends Resource implements MerchantClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function hostedCheckout()
    {
        return new HostedCheckoutClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function hostedTokenization()
    {
        return new HostedTokenizationClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function mandates()
    {
        return new MandatesClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function payments()
    {
        return new PaymentsClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function payouts()
    {
        return new PayoutsClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function productGroups()
    {
        return new ProductGroupsClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function products()
    {
        return new ProductsClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function services()
    {
        return new ServicesClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function sessions()
    {
        return new SessionsClient($this, $this->context);
    }

    /**
     * {@inheritDoc}
     */
    public function tokens()
    {
        return new TokensClient($this, $this->context);
    }
}
