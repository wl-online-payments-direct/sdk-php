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
use OnlinePayments\Sdk\Domain\GetHostedFieldsSessionResponse;
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
    public function createHostedFieldsSession(CreateHostedFieldsSessionRequest $body, ?CallContext $callContext = null): CreateHostedFieldsSessionResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/hostedfields/sessions'),
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
     * @inheritdoc
     */
    public function getHostedFieldsSession(string $sessionId, ?CallContext $callContext = null): GetHostedFieldsSessionResponse
    {
        $this->context['sessionId'] = $sessionId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\GetHostedFieldsSessionResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ProblemDetailsResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/hostedfields/sessions/{sessionId}'),
                $this->getClientMetaInfo(),
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
