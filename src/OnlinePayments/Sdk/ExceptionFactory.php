<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\ProblemDetailsResponse;
use OnlinePayments\Sdk\Domain\RefundErrorResponse;
use Throwable;

/**
 * Class ExceptionFactory
 *
 * @package OnlinePayments\Sdk
 */
class ExceptionFactory
{
    public const IDEMPOTENCE_ERROR_CODE = '30001002';

    /**
     * @param int              $httpStatusCode
     * @param DataObject       $errorObject
     * @param CallContext|null $callContext
     * @param Throwable|null   $previous
     *
     * @return ResponseException
     */
    public function createException(
        int          $httpStatusCode,
        DataObject   $errorObject,
        ?CallContext $callContext = null,
        ?Throwable   $previous = null
    ): ResponseException {
        if ($errorObject instanceof PaymentErrorResponse && $errorObject->paymentResult !== null) {
            return new DeclinedPaymentException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($errorObject instanceof PayoutErrorResponse && $errorObject->payoutResult !== null) {
            return new DeclinedPayoutException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($errorObject instanceof RefundErrorResponse && $errorObject->refundResult !== null) {
            return new DeclinedRefundException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($errorObject instanceof ProblemDetailsResponse) {
            return new ProblemDetailsException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 400) {
            return new ValidationException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 403) {
            return new AuthorizationException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 404) {
            return new ReferenceException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 409) {
            if ($callContext && strlen($callContext->getIdempotenceKey()) > 0
                && $this->isIdempotenceError($errorObject)
            ) {
                return new IdempotenceException(
                    $httpStatusCode,
                    $errorObject,
                    null,
                    $callContext->getIdempotenceKey(),
                    $callContext->getIdempotenceRequestTimestamp(),
                    $previous
                );
            }
            return new ReferenceException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 410) {
            return new ReferenceException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 500) {
            return new PlatformException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 502) {
            return new PlatformException($httpStatusCode, $errorObject, previous: $previous);
        }
        if ($httpStatusCode === 503) {
            return new PlatformException($httpStatusCode, $errorObject, previous: $previous);
        }
        return new ApiException($httpStatusCode, $errorObject, previous: $previous);
    }

    /**
     * @param DataObject $errorObject
     *
     * @return bool
     */
    protected function isIdempotenceError(DataObject $errorObject): bool
    {
        $errorObjectVariables = get_object_vars($errorObject);
        if (!array_key_exists('errors', $errorObjectVariables)) {
            return false;
        }
        $errors = $errorObjectVariables['errors'];
        return is_array($errors)
          && count($errors) === 1
          && $errors[0] instanceof APIError
          && $errors[0]->errorCode == static::IDEMPOTENCE_ERROR_CODE;
    }
}
