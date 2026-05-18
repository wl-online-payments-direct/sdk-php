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
     * Resource /v2/{merchantId}/hostedfields/sessions - Create hosted fields session
     *
     * @param CreateHostedFieldsSessionRequest $body
     * @param CallContext|null                 $callContext
     *
     * @return CreateHostedFieldsSessionResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
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
