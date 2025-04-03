<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\DataObject;

/**
 * Class ApiException
 *
 * @package OnlinePayments\Sdk
 */
class ApiException extends ResponseException
{
    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'the payment platform returned an error response';
        }
        parent::__construct($httpStatusCode, $response, $message);
    }
}
