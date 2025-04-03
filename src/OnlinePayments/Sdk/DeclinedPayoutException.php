<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\PayoutErrorResponse;
use OnlinePayments\Sdk\Domain\PayoutResult;

/**
 * Class DeclinedPayoutException
 *
 * @package OnlinePayments\Sdk
 */
class DeclinedPayoutException extends ResponseException
{
    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = DeclinedPayoutException::buildMessage($response);
        }
        parent::__construct($httpStatusCode, $response, $message);
    }

    private static function buildMessage(DataObject $response)
    {
        if ($response instanceof PayoutErrorResponse && $response->payoutResult != null) {
            $payoutResult = $response->payoutResult;
            return "declined payout '$payoutResult->id' with status '$payoutResult->status'";
        }
        return 'the payment platform returned a declined payout response';
    }

    /**
     * @return PayoutResult
     */
    public function getPayoutResult()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('payoutResult', $responseVariables)) {
            return new PayoutResult();
        }
        $payoutResult = $responseVariables['payoutResult'];
        if (!($payoutResult instanceof PayoutResult)) {
            return new PayoutResult();
        }
        return $payoutResult;
    }
}
