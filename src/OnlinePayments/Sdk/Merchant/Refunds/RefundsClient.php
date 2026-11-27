<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Refunds;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\ErrorResponse;
use OnlinePayments\Sdk\Domain\RefundsResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Refunds client.
 *
 * @package OnlinePayments\Sdk\Merchant\Refunds
 */
class RefundsClient extends ApiResource implements RefundsClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * @inheritdoc
     */
    #[\Override]
    public function getRefunds(string $paymentId, ?CallContext $callContext = null): RefundsResponse
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = RefundsResponse::class;
        $responseClassMap->defaultErrorResponseClassName = ErrorResponse::class;
        try {
            /** @var RefundsResponse $response */
            $response = $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/refunds'),
                $this->getClientMetaInfo(),
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
