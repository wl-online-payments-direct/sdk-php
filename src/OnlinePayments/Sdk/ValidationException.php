<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\DataObject;

/**
 * Class ValidationException
 *
 * @package OnlinePayments\Sdk
 */
class ValidationException extends ResponseException
{
    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'the payment platform returned an incorrect request error response';
        }
        parent::__construct($httpStatusCode, $response, $message);
    }
}
