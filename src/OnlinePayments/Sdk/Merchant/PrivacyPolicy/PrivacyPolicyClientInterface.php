<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\PrivacyPolicy;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\GetPrivacyPolicyResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * PrivacyPolicy client interface.
 */
interface PrivacyPolicyClientInterface
{
    /**
     * Resource /v2/{merchantId}/services/privacypolicy - Get Privacy Policy
     *
     * @param GetPrivacyPolicyParams $query
     * @param CallContext|null $callContext
     * @return GetPrivacyPolicyResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getPrivacyPolicy(GetPrivacyPolicyParams $query, CallContext $callContext = null);
}
