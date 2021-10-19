<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Merchant;

use Ingenico\Direct\Sdk\Merchant\HostedCheckout\HostedCheckoutClient;
use Ingenico\Direct\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use Ingenico\Direct\Sdk\Merchant\HostedTokenization\HostedTokenizationClient;
use Ingenico\Direct\Sdk\Merchant\HostedTokenization\HostedTokenizationClientInterface;
use Ingenico\Direct\Sdk\Merchant\Payments\PaymentsClient;
use Ingenico\Direct\Sdk\Merchant\Payments\PaymentsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Payouts\PayoutsClient;
use Ingenico\Direct\Sdk\Merchant\Payouts\PayoutsClientInterface;
use Ingenico\Direct\Sdk\Merchant\ProductGroups\ProductGroupsClient;
use Ingenico\Direct\Sdk\Merchant\ProductGroups\ProductGroupsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Products\ProductsClient;
use Ingenico\Direct\Sdk\Merchant\Products\ProductsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Services\ServicesClient;
use Ingenico\Direct\Sdk\Merchant\Services\ServicesClientInterface;
use Ingenico\Direct\Sdk\Merchant\Sessions\SessionsClient;
use Ingenico\Direct\Sdk\Merchant\Sessions\SessionsClientInterface;
use Ingenico\Direct\Sdk\Merchant\Tokens\TokensClient;
use Ingenico\Direct\Sdk\Merchant\Tokens\TokensClientInterface;
use Ingenico\Direct\Sdk\Resource;

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
