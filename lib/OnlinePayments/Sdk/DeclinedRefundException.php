<?php

namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\RefundResponse;

/**
 * Class DeclinedRefundException
 *
 * @package OnlinePayments\Sdk
 */
class DeclinedRefundException extends ResponseException
{
    /**
     * php * @return RefundResponse
     */
    public function getRefundResult()
    {
        $responseVariables = (array)$this->getResponse()->toObject();
        if (!array_key_exists('refundResult', $responseVariables)) {
            return new RefundResponse();
        }
        $refundResult = $responseVariables['refundResult'];
        return (new RefundResponse())->fromObject($refundResult);
    }
}
