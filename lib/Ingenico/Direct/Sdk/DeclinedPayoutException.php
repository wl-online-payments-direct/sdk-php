<?php
namespace Ingenico\Direct\Sdk;

use Ingenico\Direct\Sdk\Domain\PayoutResult;

/**
 * Class DeclinedPayoutException
 *
 * @package Ingenico\Direct\Sdk
 */
class DeclinedPayoutException extends ResponseException
{
    /**
     * @return PayoutResult
     */
    public function getPayoutResult()
    {
        $responseVariables = (array) $this->getResponse()->toObject();
        if (!array_key_exists('payoutResult', $responseVariables)) {
            return new PayoutResult();
        }
        $payoutResult = $responseVariables['payoutResult'];
        return (new PayoutResult())->fromObject($payoutResult);
    }
}
