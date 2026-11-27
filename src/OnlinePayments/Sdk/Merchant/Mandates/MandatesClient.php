<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Mandates;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CreateMandateRequest;
use OnlinePayments\Sdk\Domain\CreateMandateResponse;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\GetMandateResponse;
use OnlinePayments\Sdk\Domain\RevokeMandateRequest;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Mandates client.
 *
 * @package OnlinePayments\Sdk\Merchant\Mandates
 */
class MandatesClient extends ApiResource implements MandatesClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * @inheritdoc
     */
    #[\Override]
    public function createMandate(CreateMandateRequest $body, ?CallContext $callContext = null): CreateMandateResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = CreateMandateResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var CreateMandateResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/mandates'),
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
    public function getMandate(string $uniqueMandateReference, ?CallContext $callContext = null): GetMandateResponse
    {
        $this->context['uniqueMandateReference'] = $uniqueMandateReference;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = GetMandateResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var GetMandateResponse $response */
            $response = $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/mandates/{uniqueMandateReference}'),
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
     * @inheritdoc
     */
    #[\Override]
    public function blockMandate(string $uniqueMandateReference, ?CallContext $callContext = null): GetMandateResponse
    {
        $this->context['uniqueMandateReference'] = $uniqueMandateReference;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = GetMandateResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var GetMandateResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/mandates/{uniqueMandateReference}/block'),
                $this->getClientMetaInfo(),
                null,
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
    public function unblockMandate(string $uniqueMandateReference, ?CallContext $callContext = null): GetMandateResponse
    {
        $this->context['uniqueMandateReference'] = $uniqueMandateReference;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = GetMandateResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var GetMandateResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/mandates/{uniqueMandateReference}/unblock'),
                $this->getClientMetaInfo(),
                null,
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
    public function revokeMandate(string $uniqueMandateReference, RevokeMandateRequest $body, ?CallContext $callContext = null): GetMandateResponse
    {
        $this->context['uniqueMandateReference'] = $uniqueMandateReference;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = GetMandateResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var GetMandateResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/mandates/{uniqueMandateReference}/revoke'),
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
