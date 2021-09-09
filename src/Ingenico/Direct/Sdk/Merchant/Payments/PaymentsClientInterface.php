<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Merchant\Payments;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\AuthorizationException;
use Ingenico\Direct\Sdk\CallContext;
use Ingenico\Direct\Sdk\DeclinedPaymentException;
use Ingenico\Direct\Sdk\DeclinedRefundException;
use Ingenico\Direct\Sdk\DirectException;
use Ingenico\Direct\Sdk\Domain\CancelPaymentResponse;
use Ingenico\Direct\Sdk\Domain\CapturePaymentRequest;
use Ingenico\Direct\Sdk\Domain\CaptureResponse;
use Ingenico\Direct\Sdk\Domain\CapturesResponse;
use Ingenico\Direct\Sdk\Domain\CompletePaymentRequest;
use Ingenico\Direct\Sdk\Domain\CompletePaymentResponse;
use Ingenico\Direct\Sdk\Domain\CreatePaymentRequest;
use Ingenico\Direct\Sdk\Domain\CreatePaymentResponse;
use Ingenico\Direct\Sdk\Domain\PaymentDetailsResponse;
use Ingenico\Direct\Sdk\Domain\PaymentResponse;
use Ingenico\Direct\Sdk\Domain\RefundRequest;
use Ingenico\Direct\Sdk\Domain\RefundResponse;
use Ingenico\Direct\Sdk\Domain\RefundsResponse;
use Ingenico\Direct\Sdk\IdempotenceException;
use Ingenico\Direct\Sdk\InvalidResponseException;
use Ingenico\Direct\Sdk\ReferenceException;
use Ingenico\Direct\Sdk\ValidationException;

interface PaymentsClientInterface
{
    /**
     * Resource /v2/{merchantId}/payments - Create payment
     *
     * @param CreatePaymentRequest $body
     * @param CallContext $callContext
     * @return CreatePaymentResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @throws DeclinedPaymentException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/CreatePaymentApi Create payment
     */
    public function createPayment(CreatePaymentRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId} - Get payment
     *
     * @param string $paymentId
     * @param CallContext $callContext
     * @return PaymentResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/GetPaymentApi Get payment
     */
    public function getPayment($paymentId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/complete - Complete payment
     *
     * @param string $paymentId
     * @param CompletePaymentRequest $body
     * @param CallContext $callContext
     * @return CompletePaymentResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @throws DeclinedPaymentException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/CompletePaymentApi Complete payment
     */
    public function completePayment($paymentId, CompletePaymentRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/cancel - Cancel payment
     *
     * @param string $paymentId
     * @param CallContext $callContext
     * @return CancelPaymentResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/CancelPaymentApi Cancel payment
     */
    public function cancelPayment($paymentId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/refund - Refund payment
     *
     * @param string $paymentId
     * @param RefundRequest $body
     * @param CallContext $callContext
     * @return RefundResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @throws DeclinedRefundException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/RefundPaymentApi Refund payment
     */
    public function refundPayment($paymentId, RefundRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/capture - Capture payment
     *
     * @param string $paymentId
     * @param CapturePaymentRequest $body
     * @param CallContext $callContext
     * @return CaptureResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/CapturePaymentApi Capture payment
     */
    public function capturePayment($paymentId, CapturePaymentRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/captures - Get Captures Api
     *
     * @param string $paymentId
     * @param CallContext $callContext
     * @return CapturesResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/GetCapturesApi Get Captures Api
     */
    public function getCaptures($paymentId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/details - Get payment details
     *
     * @param string $paymentId
     * @param CallContext $callContext
     * @return PaymentDetailsResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/GetPaymentDetailsApi Get payment details
     */
    public function getPaymentDetails($paymentId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/refunds - Get Refunds Api
     *
     * @param string $paymentId
     * @param CallContext $callContext
     * @return RefundsResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference#operation/GetRefundsApi Get Refunds Api
     */
    public function getRefunds($paymentId, CallContext $callContext = null);
}
