<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\PreAuthorization;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\Domain\AddAuthorizationDetailsResponse;
use OnlinePayments\Sdk\Domain\IncrementAuthorizationRequest;
use OnlinePayments\Sdk\Domain\IncrementAuthorizationResponse;
use OnlinePayments\Sdk\Domain\UpdateAuthorizationAdditionalDataRequest;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * PreAuthorization client interface.
 */
interface PreAuthorizationClientInterface
{
    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/increment-authorization - Increment authorization
     *
     * @param string $paymentId
     * @param IncrementAuthorizationRequest $body
     * @param CallContext|null $callContext
     * @return IncrementAuthorizationResponse
     *
     * @throws DeclinedPaymentException
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function incrementAuthorization(string $paymentId, IncrementAuthorizationRequest $body, ?CallContext $callContext = null): IncrementAuthorizationResponse;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/authorization-additional-data - Add market specific additional data to a payment prior to capture.
     *
     * @param string $paymentId
     * @param UpdateAuthorizationAdditionalDataRequest $body
     * @param CallContext|null $callContext
     * @return AddAuthorizationDetailsResponse
     *
     * @throws DeclinedPaymentException
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function addAuthorizationDetails(string $paymentId, UpdateAuthorizationAdditionalDataRequest $body, ?CallContext $callContext = null): AddAuthorizationDetailsResponse;
}
