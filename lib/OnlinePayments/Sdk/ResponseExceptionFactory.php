<?php

namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\RefundErrorResponse;

/**
 * Class ResponseExceptionFactory
 *
 * @package OnlinePayments\Sdk
 */
class ResponseExceptionFactory
{
    const IDEMPOTENCE_ERROR_CODE = '1409';

    /**
     * @param $httpStatusCode
     * @param DataObject $errorObject
     * @param CallContext $callContext
     * @return ApiException|AuthorizationException|DeclinedPaymentException|DeclinedPayoutException|DeclinedRefundException|PaymentPlatformException|IdempotenceException|ReferenceException|ValidationException
     */
    public function createException(
        $httpStatusCode,
        DataObject $errorObject,
        CallContext $callContext = null
    )
    {
        if ($errorObject instanceof PaymentErrorResponse && !is_null($errorObject->getPaymentResult())) {
            return new DeclinedPaymentException($httpStatusCode, $errorObject);
        }
        if ($errorObject instanceof PayoutErrorResponse && !is_null($errorObject->getPayoutResult())) {
            return new DeclinedPayoutException($httpStatusCode, $errorObject);
        }
        if ($errorObject instanceof RefundErrorResponse && !is_null($errorObject->getRefundResult())) {
            return new DeclinedRefundException($httpStatusCode, $errorObject);
        }

        if ($httpStatusCode == 400) {
            return new ValidationException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode == 403) {
            return new AuthorizationException($httpStatusCode, $errorObject);
        }
        if ($httpStatusCode == 409 && $callContext && strlen($callContext->getIdempotenceKey()) > 0 &&
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

        $httpClassCode = floor($httpStatusCode / 100);
        // If a different HTTP status code was sent, then either the user made an error, or the server is in trouble.
        // If the user made an error, the server will give class 4 response. If the server made an error and realises
        // this, it will send an appropriate error message with a class 5 response. It should not be sending other
        // status codes; if it does, we raise an UnexpectedResponseException to signal this.
        switch ($httpClassCode) {
            case 4:
                return new ReferenceException($httpStatusCode, $errorObject);
            case 5:
                return new PaymentPlatformException($httpStatusCode, $errorObject);
            default:
                return new ApiException($httpStatusCode, $errorObject);
        }
    }

    /**
     * @param DataObject $errorObject
     * @return bool
     */
    protected function isIdempotenceError(DataObject $errorObject)
    {
        $errorObjectVariables = (array)$errorObject->toObject();
        if (!array_key_exists('errors', $errorObjectVariables)) {
            return false;
        }
        $errors = $errorObjectVariables['errors'];
        if (!is_array($errors)) {
            return false;
        }
        if (count($errors) != 1) {
            return false;
        }
        // Assumed is that errors is always built from APIError, which has a code field.
        return isset($errors[0]->code)
            && $errors[0]->code == static::IDEMPOTENCE_ERROR_CODE;
    }
}
