<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Services;

use Exception;
use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\CalculateSurchargeRequest;
use OnlinePayments\Sdk\Domain\CalculateSurchargeResponse;
use OnlinePayments\Sdk\Domain\GetIINDetailsRequest;
use OnlinePayments\Sdk\Domain\GetIINDetailsResponse;
use OnlinePayments\Sdk\Domain\GetPrivacyPolicyResponse;
use OnlinePayments\Sdk\Domain\TestConnection;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\InvalidResponseException;
use OnlinePayments\Sdk\PaymentPlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

interface ServicesClientInterface
{
    /**
     * Resource /v2/{merchantId}/services/surchargecalculation - Surcharge Calculation
     *
     * @param CalculateSurchargeRequest $body
     * @param CallContext $callContext
     * @return CalculateSurchargeResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function surchargeCalculation(CalculateSurchargeRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/services/privacypolicy - Get Privacy Policy
     *
     * @param GetPrivacyPolicyParams $query
     * @param CallContext $callContext
     * @return GetPrivacyPolicyResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function getPrivacyPolicy(GetPrivacyPolicyParams $query, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/services/testconnection - Test connection
     *
     * @param CallContext $callContext
     * @return TestConnection
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function testConnection(CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/services/getIINdetails - Get IIN details
     *
     * @param GetIINDetailsRequest $body
     * @param CallContext $callContext
     * @return GetIINDetailsResponse
     *
     * @throws ApiException
     * @throws AuthorizationException
     * @throws Exception
     * @throws PaymentPlatformException
     * @throws IdempotenceException
     * @throws InvalidResponseException
     * @throws ReferenceException
     * @throws ValidationException
     */
    public function getIINDetails(GetIINDetailsRequest $body, CallContext $callContext = null);
}
