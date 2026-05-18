<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\MerchantBatch;

use OnlinePayments\Sdk\ApiException;
use OnlinePayments\Sdk\AuthorizationException;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\InvalidResponseException;
use OnlinePayments\Sdk\Domain\GetBatchStatusResponse;
use OnlinePayments\Sdk\Domain\SubmitBatchRequestBody;
use OnlinePayments\Sdk\Domain\SubmitBatchResponse;
use OnlinePayments\Sdk\IdempotenceException;
use OnlinePayments\Sdk\PlatformException;
use OnlinePayments\Sdk\ReferenceException;
use OnlinePayments\Sdk\ValidationException;

/**
 * MerchantBatch client interface.
 */
interface MerchantBatchClientInterface
{
    /**
     * Resource /v2/{merchantId}/merchant-batches - Submit batch
     *
     * @param SubmitBatchRequestBody $body
     * @param CallContext|null $callContext
     * @return SubmitBatchResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function submitBatch(SubmitBatchRequestBody $body, ?CallContext $callContext = null): SubmitBatchResponse;

    /**
     * Resource /v2/{merchantId}/merchant-batches/{merchantBatchReference}/process - Process batch transactions
     *
     * @param string $merchantBatchReference
     * @param CallContext|null $callContext
     * @return null
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function processBatch(string $merchantBatchReference, ?CallContext $callContext = null): void;

    /**
     * Resource /v2/{merchantId}/merchant-batches/{merchantBatchReference} - Get batch status
     *
     * @param string $merchantBatchReference
     * @param CallContext|null $callContext
     * @return GetBatchStatusResponse
     *
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    function getBatchStatus(string $merchantBatchReference, ?CallContext $callContext = null): GetBatchStatusResponse;
}
