<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\DataObject;
use Throwable;

/**
 * Class AuthorizationException
 *
 * @package OnlinePayments\Sdk
 */
class AuthorizationException extends ResponseException
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
            $message = 'the payment platform returned an authorization error response';
        }
        parent::__construct($httpStatusCode, $response, $message, $previous);
    }
}
