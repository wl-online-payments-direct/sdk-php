<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\HostedFields;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionRequest;
use OnlinePayments\Sdk\Domain\CreateHostedFieldsSessionResponse;
use OnlinePayments\Sdk\Domain\GetHostedFieldsSessionResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ProblemDetailsException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * HostedFields client interface.
 */
interface HostedFieldsClientInterface
{
    /**
     * Resource /v2/{merchantId}/hostedfields/sessions - Create hosted fields session
     *
     * @param CreateHostedFieldsSessionRequest $body
     * @param CallContext|null $callContext
     * @return CreateHostedFieldsSessionResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function createHostedFieldsSession(CreateHostedFieldsSessionRequest $body, ?CallContext $callContext = null): CreateHostedFieldsSessionResponse;

    /**
     * Resource /v2/{merchantId}/hostedfields/sessions/{sessionId} - Get hosted fields session
     *
     * @param string $sessionId
     * @param CallContext|null $callContext
     * @return GetHostedFieldsSessionResponse
     *
     * @throws ProblemDetailsException
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getHostedFieldsSession(string $sessionId, ?CallContext $callContext = null): GetHostedFieldsSessionResponse;
}
