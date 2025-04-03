<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Payouts;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\DeclinedPayoutException;
use OnlinePayments\Sdk\Domain\CreatePayoutRequest;
use OnlinePayments\Sdk\Domain\PayoutResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * Payouts client interface.
 */
interface PayoutsClientInterface
{
    /**
     * Resource /v2/{merchantId}/payouts/{payoutId} - Get payout
     *
     * @param string $payoutId
     * @param CallContext|null $callContext
     * @return PayoutResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getPayout($payoutId, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/payouts - Create payout
     *
     * @param CreatePayoutRequest $body
     * @param CallContext|null $callContext
     * @return PayoutResponse
     *
     * @throws DeclinedPayoutException
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function createPayout(CreatePayoutRequest $body, CallContext $callContext = null);
}
