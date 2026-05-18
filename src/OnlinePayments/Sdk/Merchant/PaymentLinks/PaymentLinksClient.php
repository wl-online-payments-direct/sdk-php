<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Merchant\PaymentLinks;

use OnlinePayments\Sdk\ApiResource;
use OnlinePayments\Sdk\CallContext;
use OnlinePayments\Sdk\Communication\ErrorResponseException;
use OnlinePayments\Sdk\Communication\ResponseClassMap;
use OnlinePayments\Sdk\Domain\CreatePaymentLinkRequest;
use OnlinePayments\Sdk\Domain\PaymentLinkResponse;
use OnlinePayments\Sdk\ExceptionFactory;

/**
 * PaymentLinks client.
 *
 * @package OnlinePayments\Sdk\Merchant\PaymentLinks
 */
class PaymentLinksClient extends ApiResource implements PaymentLinksClientInterface
{
    /**
     * @var ExceptionFactory|null
     */
    private ?ExceptionFactory $responseExceptionFactory = null;

    /**
     * Resource /v2/{merchantId}/paymentlinks - Create payment link
     *
     * @param CreatePaymentLinkRequest $body
     * @param CallContext|null         $callContext
     *
     * @return PaymentLinkResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function createPaymentLink(CreatePaymentLinkRequest $body, ?CallContext $callContext = null): PaymentLinkResponse
    {
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\PaymentLinkResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/paymentlinks'),
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
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId} - Get payment link by ID
     *
     * @param string           $paymentLinkId
     * @param CallContext|null $callContext
     *
     * @return PaymentLinkResponse
     * @throws IdempotenceException
     * @throws ValidationException
     * @throws AuthorizationException
     * @throws ReferenceException
     * @throws PlatformException
     * @throws ApiException
     * @throws InvalidResponseException
     */
    public function getPaymentLinkById(string $paymentLinkId, ?CallContext $callContext = null): PaymentLinkResponse
    {
        $this->context['paymentLinkId'] = $paymentLinkId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultSuccessResponseClassName = '\OnlinePayments\Sdk\Domain\PaymentLinkResponse';
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            return $this->getCommunicator()->get(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/paymentlinks/{paymentLinkId}'),
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
     * Resource /v2/{merchantId}/paymentlinks/{paymentLinkId}/cancel - Cancel PaymentLink by ID
     *
     * @param string           $paymentLinkId
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
    public function cancelPaymentLinkById(string $paymentLinkId, ?CallContext $callContext = null): void
    {
        $this->context['paymentLinkId'] = $paymentLinkId;
        $responseClassMap = new ResponseClassMap();
        $responseClassMap->defaultErrorResponseClassName = '\OnlinePayments\Sdk\Domain\ErrorResponse';
        try {

            $this->getCommunicator()->post(
                $responseClassMap,
                $this->instantiateUri('/v2/{merchantId}/paymentlinks/{paymentLinkId}/cancel'),
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
