<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\HostedFields;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionRequest;
use OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionResponse;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\GetHostedFieldsSessionResponse;
use OnlinePayments\Sdk\Domain\ProblemDetailsResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * HostedFields client.
 *
 * @package OnlinePayments\Sdk\Merchant\HostedFields
 */
class HostedFieldsClient extends ApiResource implements HostedFieldsClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * @inheritdoc
     */
    #[\Override]
    public function createHostedFieldsSession(CreateHostedFieldsSessionRequest $body, ?CallContext $callContext = null): CreateHostedFieldsSessionResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = CreateHostedFieldsSessionResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var CreateHostedFieldsSessionResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/hostedfields/sessions'),
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
    public function getHostedFieldsSession(string $sessionId, ?CallContext $callContext = null): GetHostedFieldsSessionResponse
    {
        $this->context['sessionId'] = $sessionId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = GetHostedFieldsSessionResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ProblemDetailsResponse::class;
        try {
            /** @var GetHostedFieldsSessionResponse $response */
            $response = $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/hostedfields/sessions/{sessionId}'),
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
