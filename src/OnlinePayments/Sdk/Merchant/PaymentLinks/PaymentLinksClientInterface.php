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
use OnlinePayments\Sdk\Domain\PaymentLinkResponse;
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
    function createPaymentLink(CreatePaymentLinkRequest $body, CallContext $callContext = null);

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
    function getPaymentLinkById($paymentLinkId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId}/cancel - Cancel PaymentLink by ID
     *
     * @param string $paymentLinkId
     * @param CallContext|null $callContext
     * @return null
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function cancelPaymentLinkById($paymentLinkId, CallContext $callContext = null);
}
