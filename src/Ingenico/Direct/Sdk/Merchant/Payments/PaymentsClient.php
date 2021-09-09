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
use Ingenico\Direct\Sdk\Resource;
use Ingenico\Direct\Sdk\ResponseClassMap;
use Ingenico\Direct\Sdk\ValidationException;

class PaymentsClient extends Resource implements PaymentsClientInterface
{
    /**
     * {@inheritDoc}
     */
    public function createPayment(CreatePaymentRequest $body, CallContext $callContext = null)
    {
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\CreatePaymentResponse');
        $responseClassMap->setDefaultErrorResponseClassName('\Ingenico\Direct\Sdk\Domain\PaymentErrorResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getPayment($paymentId, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\PaymentResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function completePayment($paymentId, CompletePaymentRequest $body, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\CompletePaymentResponse');
        $responseClassMap->setDefaultErrorResponseClassName('\Ingenico\Direct\Sdk\Domain\PaymentErrorResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/complete'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function cancelPayment($paymentId, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\CancelPaymentResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/cancel'),
            $this->getClientMetaInfo(),
            null,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function refundPayment($paymentId, RefundRequest $body, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\RefundResponse');
        $responseClassMap->setDefaultErrorResponseClassName('\Ingenico\Direct\Sdk\Domain\RefundErrorResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/refund'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function capturePayment($paymentId, CapturePaymentRequest $body, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\CaptureResponse');
        return $this->getCommunicator()->post(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/capture'),
            $this->getClientMetaInfo(),
            $body,
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getCaptures($paymentId, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\CapturesResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/captures'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentDetails($paymentId, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\PaymentDetailsResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/details'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getRefunds($paymentId, CallContext $callContext = null)
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap('\Ingenico\Direct\Sdk\Domain\RefundsResponse');
        return $this->getCommunicator()->get(
            $responseClassMap,
            $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/refunds'),
            $this->getClientMetaInfo(),
            null,
            $callContext
        );
    }
}
