<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\MerchantBatch;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\GetBatchStatusResponse;
use OnlinePayments\Sdk\Domain\SubmitBatchRequestBody;
use OnlinePayments\Sdk\Domain\SubmitBatchResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * MerchantBatch client.
 *
 * @package OnlinePayments\Sdk\Merchant\MerchantBatch
 */
class MerchantBatchClient extends ApiResource implements MerchantBatchClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/merchant-batches - Submit batch
     *
     * @param SubmitBatchRequestBody $body
     * @param CallContext|null       $callContext
     *
     * @return SubmitBatchResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function submitBatch(SubmitBatchRequestBody $body, ?CallContext $callContext = null): SubmitBatchResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\SubmitBatchResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {
            $callContext = $callContext ?? new CallContext();
            $callContext->setGzip(true);

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/merchant-batches'),
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
     * Resource /v2/{merchantId}/merchant-batches/{merchantBatchReference}/process - Process batch transactions
     *
     * @param string           $merchantBatchReference
     * @param CallContext|null $callContext
     *
     * @return void
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function processBatch(string $merchantBatchReference, ?CallContext $callContext = null): void
    {
        $this->context['merchantBatchReference'] = $merchantBatchReference;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/merchant-batches/{merchantBatchReference}/process'),
                $this->getClientMetaInfo(),
                null,
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
     * Resource /v2/{merchantId}/merchant-batches/{merchantBatchReference} - Get batch status
     *
     * @param string           $merchantBatchReference
     * @param CallContext|null $callContext
     *
     * @return GetBatchStatusResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getBatchStatus(string $merchantBatchReference, ?CallContext $callContext = null): GetBatchStatusResponse
    {
        $this->context['merchantBatchReference'] = $merchantBatchReference;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\GetBatchStatusResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/merchant-batches/{merchantBatchReference}'),
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
