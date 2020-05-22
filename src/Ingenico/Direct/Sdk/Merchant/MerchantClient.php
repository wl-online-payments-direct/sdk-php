<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Merchant;

use Ingenico\Direct\Sdk\Merchant\HostedCheckout\HostedCheckoutClient;
use Ingenico\Direct\Sdk\Merchant\HostedCheckout\HostedCheckoutClientInterface;
use Ingenico\Direct\Sdk\Merchant\Payments\PaymentsClient;
use Ingenico\Direct\Sdk\Merchant\Payments\PaymentsClientInterface;
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
     * Resource /v2/{merchantId}/products
     *
     * @return ProductsClientInterface
     */
    public function products()
    {
        return new ProductsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/tokens/{tokenId}
     *
     * @param string $tokenId
     * @return TokensClientInterface
     */
    public function tokens($tokenId)
    {
        $newContext = $this->context;
        $newContext['tokenId'] = $$tokenId;
        return new TokensClient($this, $newContext);
    }

    /**
     * Resource /v2/{merchantId}/sessions
     *
     * @return SessionsClientInterface
     */
    public function sessions()
    {
        return new SessionsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/payments
     *
     * @return PaymentsClientInterface
     */
    public function payments()
    {
        return new PaymentsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/services/testconnection
     *
     * @return ServicesClientInterface
     */
    public function services()
    {
        return new ServicesClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/productgroups
     *
     * @return ProductGroupsClientInterface
     */
    public function productGroups()
    {
        return new ProductGroupsClient($this, $this->context);
    }

    /**
     * Resource /v2/{merchantId}/hostedcheckouts
     *
     * @return HostedCheckoutClientInterface
     */
    public function hostedCheckout()
    {
        return new HostedCheckoutClient($this, $this->context);
    }
}
