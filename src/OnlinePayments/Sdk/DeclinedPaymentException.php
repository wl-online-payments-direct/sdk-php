<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\CreatePaymentResponse;
use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\PaymentErrorResponse;
use Throwable;

/**
 * Class DeclinedPaymentException
 *
 * @package OnlinePayments\Sdk
 */
class DeclinedPaymentException extends ResponseException
{
    /**
     * @param int            $httpStatusCode
     * @param DataObject     $response
     * @param string|null    $message
     * @param Throwable|null $previous
     */
    public function __construct(
        int        $httpStatusCode,
        DataObject $response,
        ?string    $message = null,
        ?Throwable $previous = null
    ) {
        if ($message === null) {
            $message = self::buildMessage($response);
        }
        parent::__construct($httpStatusCode, $response, $message, $previous);
    }

    private static function buildMessage(DataObject $response): string
    {
        if ($response instanceof PaymentErrorResponse && $response->paymentResult !== null && $response->paymentResult->payment !== null) {
            $payment = $response->paymentResult->payment;
            return "declined payment '$payment->id' with status '$payment->status'";
        }
        return 'the payment platform returned a declined payment response';
    }

    /**
     * @return CreatePaymentResponse
     */
    public function getCreatePaymentResponse(): CreatePaymentResponse
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
