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
    /** @var ConnectionResponse */
    private readonly ConnectionResponse $connectionResponse;

    /**
     * @param int $httpStatusCode
     * @param DataObject $errorResponse
     * @param string|null $message
     * @param array<int|string, string|string[]> $headers
     */
    public function __construct(
        private readonly int $httpStatusCode,
        private readonly DataObject $errorResponse,
        ?string $message = null,
        array $headers = [],
    ) {
        parent::__construct($message ?? 'The server returned an error.');
        $this->connectionResponse = new ConnectionResponse($httpStatusCode, $headers, '');
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

    /**
     * Returns the headers of the error response.
     *
     * @return array<int|string, string|string[]>
     */
    public function getHeaders(): array
    {
        return $this->connectionResponse->getHeaders();
    }

    /**
     * Returns the value of the response header with the given name (case-insensitive), or an empty string.
     *
     * @param string $name
     * @return string
     */
    public function getHeaderValue(string $name): string
    {
        return $this->connectionResponse->getHeaderValue($name);
    }
}
