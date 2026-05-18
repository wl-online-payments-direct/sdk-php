<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\Captures;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CapturesResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * Captures client.
 *
 * @package OnlinePayments\Sdk\Merchant\Captures
 */
class CapturesClient extends ApiResource implements CapturesClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/payments/{paymentId}/captures - Get captures of payment
     *
     * @param string           $paymentId
     * @param CallContext|null $callContext
     *
     * @return CapturesResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getCaptures(string $paymentId, ?CallContext $callContext = null): CapturesResponse
    {
        $this->context['paymentId'] = $paymentId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\CapturesResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/payments/{paymentId}/captures'),
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
