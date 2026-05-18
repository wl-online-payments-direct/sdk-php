<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Tokens;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CreateTokenRequest;
use OnlinePayments\Sdk\Domain\CreatedTokenResponse;
use OnlinePayments\Sdk\Domain\TokenResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Tokens client.
 *
 * @package OnlinePayments\Sdk\Merchant\Tokens
 */
class TokensClient extends ApiResource implements TokensClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/tokens - Create token
     *
     * @param CreateTokenRequest $body
     * @param CallContext|null   $callContext
     *
     * @return CreatedTokenResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function createToken(CreateTokenRequest $body, ?CallContext $callContext = null): CreatedTokenResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\CreatedTokenResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/tokens'),
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
     * Resource /v2/{merchantId}/tokens/{tokenId} - Get token
     *
     * @param string           $tokenId
     * @param CallContext|null $callContext
     *
     * @return TokenResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getToken(string $tokenId, ?CallContext $callContext = null): TokenResponse
    {
        $this->context['tokenId'] = $tokenId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\TokenResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/tokens/{tokenId}'),
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
     * Resource /v2/{merchantId}/tokens/{tokenId} - Delete token
     *
     * @param string           $tokenId
     * @param CallContext|null $callContext
     *
     * @return void
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function deleteToken(string $tokenId, ?CallContext $callContext = null): void
    {
        $this->context['tokenId'] = $tokenId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            $this->getCommunicator()->delete(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/tokens/{tokenId}'),
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
