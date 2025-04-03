<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\RefundErrorResponse;
use OnlinePayments\Sdk\Domain\RefundResponse;

/**
 * Class DeclinedRefundException
 *
 * @package OnlinePayments\Sdk
 */
class DeclinedRefundException extends ResponseException
{
    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = DeclinedRefundException::buildMessage($response);
        }
        parent::__construct($httpStatusCode, $response, $message);
    }

    private static function buildMessage(DataObject $response)
    {
        if ($response instanceof RefundErrorResponse && $response->refundResult != null) {
            $refundResult = $response->refundResult;
            return "declined refund '$refundResult->id' with status '$refundResult->status'";
        }
        return 'the payment platform returned a declined refund response';
    }

    /**
     * @return RefundResponse
     */
    public function getRefundResponse()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('refundResult', $responseVariables)) {
            return new RefundResponse();
        }
        $refundResult = $responseVariables['refundResult'];
        if (!($refundResult instanceof RefundResponse)) {
            return new RefundResponse();
        }
        return $refundResult;
    }
}
