<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Services;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\CalculateSurchargeRequest;
use OnlinePayments\Sdk\Domain\CalculateSurchargeResponse;
use OnlinePayments\Sdk\Domain\CurrencyConversionRequest;
use OnlinePayments\Sdk\Domain\CurrencyConversionResponse;
use OnlinePayments\Sdk\Domain\GetIINDetailsRequest;
use OnlinePayments\Sdk\Domain\GetIINDetailsResponse;
use OnlinePayments\Sdk\Domain\TestConnection;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * Services client interface.
 */
interface ServicesClientInterface
{
    /**
     * Resource /v2/{merchantId}/services/testconnection - Test connection
     *
     * @param CallContext|null $callContext
     * @return TestConnection
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function testConnection(CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/services/getIINdetails - Get IIN details
     *
     * @param GetIINDetailsRequest $body
     * @param CallContext|null $callContext
     * @return GetIINDetailsResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getIINDetails(GetIINDetailsRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/services/dccrate - Get currency conversion quote
     *
     * @param CurrencyConversionRequest $body
     * @param CallContext|null $callContext
     * @return CurrencyConversionResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getDccRateInquiry(CurrencyConversionRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/services/surchargecalculation - Surcharge Calculation
     *
     * @param CalculateSurchargeRequest $body
     * @param CallContext|null $callContext
     * @return CalculateSurchargeResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function surchargeCalculation(CalculateSurchargeRequest $body, CallContext $callContext = null);
}
