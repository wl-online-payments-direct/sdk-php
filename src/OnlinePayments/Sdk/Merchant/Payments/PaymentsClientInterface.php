<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Payments;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\DeclinedPaymentException;
use OnlinePayments\Sdk\DeclinedRefundException;
use OnlinePayments\Sdk\Domain\CancelPaymentRequest;
use OnlinePayments\Sdk\Domain\CancelPaymentResponse;
use OnlinePayments\Sdk\Domain\CapturePaymentRequest;
use OnlinePayments\Sdk\Domain\CaptureResponse;
use OnlinePayments\Sdk\Domain\CreatePaymentRequest;
use OnlinePayments\Sdk\Domain\CreatePaymentResponse;
use OnlinePayments\Sdk\Domain\PaymentDetailsResponse;
use OnlinePayments\Sdk\Domain\PaymentResponse;
use OnlinePayments\Sdk\Domain\RefundRequest;
use OnlinePayments\Sdk\Domain\RefundResponse;
use OnlinePayments\Sdk\Domain\SubsequentPaymentRequest;
use OnlinePayments\Sdk\Domain\SubsequentPaymentResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * Payments client interface.
 */
interface PaymentsClientInterface
{
    /**
     * Resource /v2/{merchantId}/payments - Create payment
     *
     * @param CreatePaymentRequest $body
     * @param CallContext|null $callContext
     * @return CreatePaymentResponse
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
    function createPayment(CreatePaymentRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId} - Get payment
     *
     * @param string $paymentId
     * @param CallContext|null $callContext
     * @return PaymentResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getPayment($paymentId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/details - Get payment details
     *
     * @param string $paymentId
     * @param CallContext|null $callContext
     * @return PaymentDetailsResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getPaymentDetails($paymentId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/cancel - Cancel payment
     *
     * @param string $paymentId
     * @param CancelPaymentRequest $body
     * @param CallContext|null $callContext
     * @return CancelPaymentResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function cancelPayment($paymentId, CancelPaymentRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/capture - Capture payment
     *
     * @param string $paymentId
     * @param CapturePaymentRequest $body
     * @param CallContext|null $callContext
     * @return CaptureResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function capturePayment($paymentId, CapturePaymentRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/refund - Refund payment
     *
     * @param string $paymentId
     * @param RefundRequest $body
     * @param CallContext|null $callContext
     * @return RefundResponse
     *
     * @throws DeclinedRefundException
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function refundPayment($paymentId, RefundRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/subsequent - Subsequent payment
     *
     * @param string $paymentId
     * @param SubsequentPaymentRequest $body
     * @param CallContext|null $callContext
     * @return SubsequentPaymentResponse
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
    function subsequentPayment($paymentId, SubsequentPaymentRequest $body, CallContext $callContext = null);
}
