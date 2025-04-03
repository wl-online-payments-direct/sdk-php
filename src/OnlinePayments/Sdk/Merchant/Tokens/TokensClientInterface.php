<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Tokens;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\CreateTokenRequest;
use OnlinePayments\Sdk\Domain\CreatedTokenResponse;
use OnlinePayments\Sdk\Domain\TokenResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * Tokens client interface.
 */
interface TokensClientInterface
{
    /**
     * Resource /v2/{merchantId}/tokens/{tokenId} - Get token
     *
     * @param string $tokenId
     * @param CallContext|null $callContext
     * @return TokenResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getToken($tokenId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/tokens/{tokenId} - Delete token
     *
     * @param string $tokenId
     * @param CallContext|null $callContext
     * @return null
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function deleteToken($tokenId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/tokens - Create token
     *
     * @param CreateTokenRequest $body
     * @param CallContext|null $callContext
     * @return CreatedTokenResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function createToken(CreateTokenRequest $body, CallContext $callContext = null);
}
