<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Complete;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CompletePaymentRequest;
use OnlinePayments\Sdk\Domain\CompletePaymentResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Complete client.
 *
 * @package OnlinePayments\Sdk\Merchant\Complete
 */
class CompleteClient extends ApiResource implements CompleteClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/complete - Complete payment
     *
     * @param string                 $paymentId
     * @param CompletePaymentRequest $body
     * @param CallContext|null       $callContext
     *
     * @return CompletePaymentResponse
     * @throws DeclinedPaymentException
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function completePayment(string $paymentId, CompletePaymentRequest $body, ?CallContext $callContext = null): CompletePaymentResponse
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\CompletePaymentResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\PaymentErrorResponse';
        try {

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/complete'),
                $this->getClientMetaInfo(),
                $body,
                null,
                $callContext
            );
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext
            );
        }
    }

    /**
     * @return ExceptionFactory
     */
    private function getResponseExceptionFactory(): ExceptionFactory
    {
        if (is_null($this->responseExceptionFactory)) {
            $this->responseExceptionFactory = new ExceptionFactory();
        }
        return $this->responseExceptionFactory;
    }
}
