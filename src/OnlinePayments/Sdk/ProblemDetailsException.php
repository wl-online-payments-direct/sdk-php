<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\DataObject;
use OnlinePayments\Sdk\Domain\ProblemDetailsResponse;

/**
 * Class ProblemDetailsException
 *
 * @package OnlinePayments\Sdk
 */
class ProblemDetailsException extends ResponseException
{
    /**
     * @param int         $httpStatusCode
     * @param DataObject  $response
     * @param string|null $message
     */
    public function __construct(int $httpStatusCode, DataObject $response, ?string $message = null)
    {
        if (is_null($message)) {
            $message = 'the payment platform returned a problem details error response';
        }
        parent::__construct($httpStatusCode, $response, $message);
    }
}
