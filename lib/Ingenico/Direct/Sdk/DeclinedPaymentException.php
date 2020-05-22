<?php
namespace Ingenico\Direct\Sdk;

use Ingenico\Direct\Sdk\Domain\CreatePaymentResponse;

/**
 * Class DeclinedPaymentException
 *
 * @package Ingenico\Direct\Sdk
 */
class DeclinedPaymentException extends ResponseException
{
    /**
     * @return CreatePaymentResponse
     */
    public function getPaymentResult()
    {
        $responseVariables = (array) $this->getResponse()->toObject();
        if (!array_key_exists('paymentResult', $responseVariables)) {
            return new CreatePaymentResponse();
        }
        $paymentResult = $responseVariables['paymentResult'];
        return (new CreatePaymentResponse())->fromObject($paymentResult);
    }
}
