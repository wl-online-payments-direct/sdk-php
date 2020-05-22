<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Merchant\Tokens;

use Exception;
use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\AuthorizationException;
use Ingenico\Direct\Sdk\CallContext;
use Ingenico\Direct\Sdk\DirectException;
use Ingenico\Direct\Sdk\Domain\TokenResponse;
use Ingenico\Direct\Sdk\IdempotenceException;
use Ingenico\Direct\Sdk\InvalidResponseException;
use Ingenico\Direct\Sdk\ReferenceException;
use Ingenico\Direct\Sdk\ValidationException;

interface TokensClientInterface
{
    /**
     * Resource /v2/{merchantId}/tokens/{tokenId} - Get token
     *
     * @param CallContext $callContext
     * @return TokenResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference/index.html#operation/GetTokenApi Get token
     */
    public function getToken(CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/tokens/{tokenId} - Delete token
     *
     * @param CallContext $callContext
     * @return TokenResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws DirectException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     * @link https://support.direct.ingenico.com/documentation/api/reference/index.html#operation/DeleteTokenApi Delete token
     */
    public function deleteToken(CallContext $callContext = null);
}
