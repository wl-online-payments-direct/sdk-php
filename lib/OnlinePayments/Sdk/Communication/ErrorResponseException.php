<?php
namespace OnlinePayments\Sdk\Communication;

use RuntimeException;
use OnlinePayments\Sdk\Domain\DataObject;

/**
 * Class ErrorResponseException
 *
 * @package OnlinePayments\Sdk\Communication
 */
class ErrorResponseException extends RuntimeException
{
    /** @var int */
    private int $httpStatusCode;

    /**
     * @var DataObject
     */
    private DataObject $errorResponse;

    /**
     * @param int $httpStatusCode
     * @param DataObject $errorResponse
     * @param string|null $message
     */
    public function __construct(int $httpStatusCode, DataObject $errorResponse, ?string $message = null)
    {
        if (is_null($message)) {
            $message = 'The server returned an error.';
        }
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
        $this->errorResponse = $errorResponse;
    }

    /**
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @return DataObject
     */
    public function getErrorResponse(): DataObject
    {
        return $this->errorResponse;
    }
}
