<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\PaymentLinks;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\CreatePaymentLinkRequest;
use OnlinePayments\Sdk\Domain\GetPaymentLinksByMerchantGroupRequest;
use OnlinePayments\Sdk\Domain\PaymentLinkOverviewResponse;
use OnlinePayments\Sdk\Domain\PaymentLinkResponse;
use OnlinePayments\Sdk\Domain\SharePaymentLinkRequest;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * PaymentLinks client interface.
 */
interface PaymentLinksClientInterface
{
    /**
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId}/share - Share the specified payment link to a customer.
     *
     * @param string $paymentLinkId
     * @param SharePaymentLinkRequest $body
     * @param CallContext|null $callContext
     * @return void
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function share(string $paymentLinkId, SharePaymentLinkRequest $body, ?CallContext $callContext = null): void;

    /**
     * Resource /v2/{merchantId}/paymentlinks - Create payment link
     *
     * @param CreatePaymentLinkRequest $body
     * @param CallContext|null $callContext
     * @return PaymentLinkResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function createPaymentLink(CreatePaymentLinkRequest $body, ?CallContext $callContext = null): PaymentLinkResponse;

    /**
     * Resource /v2/merchant-groups/{merchantGroupId}/paymentlinks/search - Retrieve payment links for a merchant group
     *
     * @param string $merchantGroupId
     * @param GetPaymentLinksByMerchantGroupRequest $body
     * @param CallContext|null $callContext
     * @return PaymentLinkOverviewResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getPaymentLinksByMerchantGroupId(string $merchantGroupId, GetPaymentLinksByMerchantGroupRequest $body, ?CallContext $callContext = null): PaymentLinkOverviewResponse;

    /**
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId} - Get payment link by ID
     *
     * @param string $paymentLinkId
     * @param CallContext|null $callContext
     * @return PaymentLinkResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getPaymentLinkById(string $paymentLinkId, ?CallContext $callContext = null): PaymentLinkResponse;

    /**
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId}/cancel - Cancel PaymentLink by ID
     *
     * @param string $paymentLinkId
     * @param CallContext|null $callContext
     * @return void
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function cancelPaymentLinkById(string $paymentLinkId, ?CallContext $callContext = null): void;
}
