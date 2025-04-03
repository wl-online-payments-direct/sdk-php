<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Refunds;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\RefundsResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * Refunds client interface.
 */
interface RefundsClientInterface
{
    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/refunds - Get refunds of payment
     *
     * @param string $paymentId
     * @param CallContext|null $callContext
     * @return RefundsResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getRefunds($paymentId, CallContext $callContext = null);
}
