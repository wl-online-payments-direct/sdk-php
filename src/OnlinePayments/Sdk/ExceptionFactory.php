<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\APIError;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\RefundErrorResponse;

/**
 * Class ExceptionFactory
 *
 * @package OnlinePayments\Sdk
 */
class ExceptionFactory
{
    const IDEMPOTENCE_ERROR_CODE = '1409';

    /**
     * @param int $httpStatusCode
     * @param DataObject $errorObject
     * @param CallContext $callContext
     * @return ResponseException
     */
    public function createException(
        $httpStatusCode,
        DataObject $errorObject,
        CallContext $callContext = null
    ) {
        if ($errorObject instanceof PaymentErrorResponse && !is_null($errorObject->paymentResult)) {
            return new DeclinedPaymentException($httpStatusCode, $errorObject);
        }
        if ($errorObject instanceof PayoutErrorResponse && !is_null($errorObject->payoutResult)) {
            return new DeclinedPayoutException($httpStatusCode, $errorObject);
        }
        if ($errorObject instanceof RefundErrorResponse && !is_null($errorObject->refundResult)) {
            return new DeclinedRefundException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 400) {
            return new ValidationException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 403) {
            return new AuthorizationException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 404) {
            return new ReferenceException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 409) {
            if ($callContext && strlen($callContext->getIdempotenceKey()) > 0 &&
                $this->isIdempotenceError($errorObject)
            ) {
                return new IdempotenceException(
                    $httpStatusCode,
                    $errorObject,
                    null,
                    $callContext->getIdempotenceKey(),
                    $callContext->getIdempotenceRequestTimestamp()
                );
            }
            return new ReferenceException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 410) {
            return new ReferenceException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 500) {
            return new PlatformException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 502) {
            return new PlatformException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode === 503) {
            return new PlatformException($httpStatusCode, $errorObject);
        }
        return new ApiException($httpStatusCode, $errorObject);
    }

    /**
     * @param DataObject $errorObject
     * @return bool
     */
    protected function isIdempotenceError(DataObject $errorObject)
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
