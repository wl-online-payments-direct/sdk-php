<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Payouts;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CreatePayoutRequest;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Payouts client.
 *
 * @package OnlinePayments\Sdk\Merchant\Payouts
 */
class PayoutsClient extends ApiResource implements PayoutsClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * @inheritdoc
     */
    #[\Override]
    public function createPayout(CreatePayoutRequest $body, ?CallContext $callContext = null): PayoutResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = PayoutResponse::class;
        $responseClassMap->defaultErrorResponseClassName = PayoutErrorResponse::class;
        try {
            /** @var PayoutResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/payouts'),
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
    public function getPayout(string $payoutId, ?CallContext $callContext = null): PayoutResponse
    {
        $this->context['payoutId'] = $payoutId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = PayoutResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var PayoutResponse $response */
            $response = $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/payouts/{payoutId}'),
                $this->getClientMetaInfo(),
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
