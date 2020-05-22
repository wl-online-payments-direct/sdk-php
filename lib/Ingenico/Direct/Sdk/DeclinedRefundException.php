<?php
namespace Ingenico\Direct\Sdk;

use Ingenico\Direct\Sdk\Domain\RefundResponse;

/**
 * Class DeclinedRefundException
 *
 * @package Ingenico\Direct\Sdk
 */
class DeclinedRefundException extends ResponseException
{
    /**
    php * @return RefundResponse
     */
    public function getRefundResult()
    {
        $responseVariables = (array) $this->getResponse()->toObject();
        if (!array_key_exists('refundResult', $responseVariables)) {
            return new RefundResponse();
        }
        $refundResult = $responseVariables['refundResult'];
        return (new RefundResponse())->fromObject($refundResult);
    }
}
