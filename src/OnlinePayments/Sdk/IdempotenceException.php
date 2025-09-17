<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk;

use OnlinePayments\Sdk\Domain\DataObject;

/**
 * Class IdempotenceException
 *
 * @package OnlinePayments\Sdk
 */
class IdempotenceException extends ResponseException
{
    /** @var string */
    private string $idempotenceKey;

    /** @var string */
    private string $idempotenceRequestTimestamp;

    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string|null $message
     * @param string $idempotenceKey
     * @param string $idempotenceRequestTimestamp;
     */
    public function __construct(
        int        $httpStatusCode,
        DataObject $response,
        ?string     $message = null,
        string     $idempotenceKey = '',
        string     $idempotenceRequestTimestamp = ''
    ) {
        if ($message == null) {
            $message = 'the payment platform returned a duplicate request error response';
        }
        parent::__construct($httpStatusCode, $response, $message);
        $this->idempotenceKey = $idempotenceKey;
        $this->idempotenceRequestTimestamp = $idempotenceRequestTimestamp;
    }

    /**
     * @return string
     */
    public function getIdempotenceKey(): string
    {
        return $this->idempotenceKey;
    }

    /**
     * @return string
     */
    public function getIdempotenceRequestTimestamp(): string
    {
        return $this->idempotenceRequestTimestamp;
    }
}
