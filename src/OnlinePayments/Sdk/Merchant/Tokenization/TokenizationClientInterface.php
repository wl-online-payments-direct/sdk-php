<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Tokenization;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\CreateCertificateResponse;
use OnlinePayments\Sdk\Domain\CsrRequest;
use OnlinePayments\Sdk\Domain\DetokenizationResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * Tokenization client interface.
 */
interface TokenizationClientInterface
{
    /**
     * Resource /v2/{merchantId}/detokenize/csr - Sign certificate
     *
     * @param CsrRequest $body
     * @param CallContext|null $callContext
     * @return CreateCertificateResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function createCertificate(CsrRequest $body, ?CallContext $callContext = null): CreateCertificateResponse;

    /**
     * Resource /v2/{merchantId}/detokenize/tokens - Get sensitive card details by card alias tokens
     *
     * @param GetCardDataByTokensParams $query
     * @param CallContext|null $callContext
     * @return DetokenizationResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getCardDataByTokens(GetCardDataByTokensParams $query, ?CallContext $callContext = null): DetokenizationResponse;

    /**
     * Resource /v2/{merchantId}/detokenize/payments - Get sensitive card details by card payment identifiers
     *
     * @param GetCardDataByPaymentsParams $query
     * @param CallContext|null $callContext
     * @return DetokenizationResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getCardDataByPayments(GetCardDataByPaymentsParams $query, ?CallContext $callContext = null): DetokenizationResponse;
}
