<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\PreAuthorization;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\AddAuthorizationDetailsResponse;
use OnlinePayments\Sdk\Domain\IncrementAuthorizationRequest;
use OnlinePayments\Sdk\Domain\IncrementAuthorizationResponse;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use OnlinePayments\Sdk\Domain\UpdateAuthorizationAdditionalDataRequest;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * PreAuthorization client.
 *
 * @package OnlinePayments\Sdk\Merchant\PreAuthorization
 */
class PreAuthorizationClient extends ApiResource implements PreAuthorizationClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * @inheritdoc
     */
    #[\Override]
    public function incrementAuthorization(string $paymentId, IncrementAuthorizationRequest $body, ?CallContext $callContext = null): IncrementAuthorizationResponse
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = IncrementAuthorizationResponse::class;
        $responseClassMap->defaultErrorResponseClassName = PaymentErrorResponse::class;
        try {
            /** @var IncrementAuthorizationResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/increment-authorization'),
                $this->getClientMetaInfo(),
                $body,
                null,
                $callContext
            );
            return $response;
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext,
                $e
            );
        }
    }

    /**
     * @inheritdoc
     */
    #[\Override]
    public function addAuthorizationDetails(string $paymentId, UpdateAuthorizationAdditionalDataRequest $body, ?CallContext $callContext = null): AddAuthorizationDetailsResponse
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = AddAuthorizationDetailsResponse::class;
        $responseClassMap->defaultErrorResponseClassName = PaymentErrorResponse::class;
        try {
            /** @var AddAuthorizationDetailsResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/authorization-additional-data'),
                $this->getClientMetaInfo(),
                $body,
                null,
                $callContext
            );
            return $response;
        } catch (ErrorResponseException $e) {
            throw $this->getResponseExceptionFactory()->createException(
                $e->getHttpStatusCode(),
                $e->getErrorResponse(),
                $callContext,
                $e
            );
        }
    }

    /**
     * @return ExceptionFactory
     */
    private function getResponseExceptionFactory(): ExceptionFactory
    {
        if ($this->responseExceptionFactory === null) {
            $this->responseExceptionFactory = new ExceptionFactory();
        }
        return $this->responseExceptionFactory;
    }
}
