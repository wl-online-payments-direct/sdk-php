<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Complete;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\Domain\CompletePaymentRequest;
use OnlinePayments\Sdk\Domain\CompletePaymentResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * Complete client interface.
 */
interface CompleteClientInterface
{
    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/complete - Complete payment
     *
     * @param string $paymentId
     * @param CompletePaymentRequest $body
     * @param CallContext|null $callContext
     * @return CompletePaymentResponse
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
    function completePayment($paymentId, CompletePaymentRequest $body, CallContext $callContext = null);
}
