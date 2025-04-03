<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\CreatePaymentResponse;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;

/**
 * Class DeclinedPaymentException
 *
 * @package OnlinePayments\Sdk
 */
class DeclinedPaymentException extends ResponseException
{
    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = DeclinedPaymentException::buildMessage($response);
        }
        parent::__construct($httpStatusCode, $response, $message);
    }

    private static function buildMessage(DataObject $response)
    {
        if ($response instanceof PaymentErrorResponse && $response->paymentResult != null && $response->paymentResult->payment != null) {
            $payment = $response->paymentResult->payment;
            return "declined payment '$payment->id' with status '$payment->status'";
        }
        return 'the payment platform returned a declined payment response';
    }

    /**
     * @return CreatePaymentResponse
     */
    public function getCreatePaymentResponse()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('paymentResult', $responseVariables)) {
            return new CreatePaymentResponse();
        }
        $paymentResult = $responseVariables['paymentResult'];
        if (!($paymentResult instanceof CreatePaymentResponse)) {
            return new CreatePaymentResponse();
        }
        return $paymentResult;
    }
}
