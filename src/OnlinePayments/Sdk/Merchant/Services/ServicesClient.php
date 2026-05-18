<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Services;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CalculateSurchargeRequest;
use OnlinePayments\Sdk\Domain\CalculateSurchargeResponse;
use OnlinePayments\Sdk\Domain\CurrencyConversionRequest;
use OnlinePayments\Sdk\Domain\CurrencyConversionResponse;
use OnlinePayments\Sdk\Domain\GetIINDetailsRequest;
use OnlinePayments\Sdk\Domain\GetIINDetailsResponse;
use OnlinePayments\Sdk\Domain\TestConnection;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Services client.
 *
 * @package OnlinePayments\Sdk\Merchant\Services
 */
class ServicesClient extends ApiResource implements ServicesClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/services/testconnection - Test connection
     *
     * @param CallContext|null $callContext
     *
     * @return TestConnection
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function testConnection(?CallContext $callContext = null): TestConnection
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\TestConnection';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/services/testconnection'),
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
     * Resource /v2/{merchantId}/services/getIINdetails - Get IIN details
     *
     * @param GetIINDetailsRequest $body
     * @param CallContext|null     $callContext
     *
     * @return GetIINDetailsResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getIINDetails(GetIINDetailsRequest $body, ?CallContext $callContext = null): GetIINDetailsResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\GetIINDetailsResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/services/getIINdetails'),
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
     * Resource /v2/{merchantId}/services/dccrate - Get currency conversion quote
     *
     * @param CurrencyConversionRequest $body
     * @param CallContext|null          $callContext
     *
     * @return CurrencyConversionResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getDccRateInquiry(CurrencyConversionRequest $body, ?CallContext $callContext = null): CurrencyConversionResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\CurrencyConversionResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/services/dccrate'),
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
     * Resource /v2/{merchantId}/services/surchargecalculation - Surcharge Calculation
     *
     * @param CalculateSurchargeRequest $body
     * @param CallContext|null          $callContext
     *
     * @return CalculateSurchargeResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function surchargeCalculation(CalculateSurchargeRequest $body, ?CallContext $callContext = null): CalculateSurchargeResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\CalculateSurchargeResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/services/surchargecalculation'),
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
