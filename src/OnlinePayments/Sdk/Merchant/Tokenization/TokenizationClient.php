<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Tokenization;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CreateCertificateResponse;
use OnlinePayments\Sdk\Domain\CsrRequest;
use OnlinePayments\Sdk\Domain\DetokenizationResponse;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Tokenization client.
 *
 * @package OnlinePayments\Sdk\Merchant\Tokenization
 */
class TokenizationClient extends ApiResource implements TokenizationClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * @inheritdoc
     */
    #[\Override]
    public function createCertificate(CsrRequest $body, ?CallContext $callContext = null): CreateCertificateResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = CreateCertificateResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var CreateCertificateResponse $response */
            $response = $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/detokenize/csr'),
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
    public function getCardDataByTokens(GetCardDataByTokensParams $query, ?CallContext $callContext = null): DetokenizationResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = DetokenizationResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var DetokenizationResponse $response */
            $response = $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/detokenize/tokens'),
                $this->getClientMetaInfo(),
                $query,
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
    public function getCardDataByPayments(GetCardDataByPaymentsParams $query, ?CallContext $callContext = null): DetokenizationResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = DetokenizationResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var DetokenizationResponse $response */
            $response = $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/detokenize/payments'),
                $this->getClientMetaInfo(),
                $query,
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
