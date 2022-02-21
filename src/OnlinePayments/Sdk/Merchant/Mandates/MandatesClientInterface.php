<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Merchant\Mandates;

use Exception;
use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Domain\CreateMandateRequest;
use OnlinePayments\Sdk\Domain\CreateMandateResponse;
use OnlinePayments\Sdk\Domain\GetMandateResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\InvalidResponseException;
use OnlinePayments\Sdk\PaymentPlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

interface MandatesClientInterface
{
    /**
     * Resource /v2/{merchantId}/mandates - Create mandate
     *
     * @param CreateMandateRequest $body
     * @param CallContext $callContext
     * @return CreateMandateResponse
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
    public function createMandate(CreateMandateRequest $body, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/mandates/{uniqueMandateReference} - Get mandate
     *
     * @param string $uniqueMandateReference
     * @param CallContext $callContext
     * @return GetMandateResponse
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
    public function getMandate($uniqueMandateReference, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/mandates/{uniqueMandateReference}/block - Block mandate
     *
     * @param string $uniqueMandateReference
     * @param CallContext $callContext
     * @return GetMandateResponse
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
    public function blockMandate($uniqueMandateReference, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/mandates/{uniqueMandateReference}/unblock - Unblock mandate
     *
     * @param string $uniqueMandateReference
     * @param CallContext $callContext
     * @return GetMandateResponse
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
    public function unblockMandate($uniqueMandateReference, CallContext $callContext = null);

    /**
     * Resource /v2/{merchantId}/mandates/{uniqueMandateReference}/revoke - Revoke mandate
     *
     * @param string $uniqueMandateReference
     * @param CallContext $callContext
     * @return GetMandateResponse
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
    public function revokeMandate($uniqueMandateReference, CallContext $callContext = null);
}
