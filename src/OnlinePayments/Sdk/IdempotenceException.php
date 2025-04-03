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
    private $idempotenceKey;

    /** @var string */
    private $idempotenceRequestTimestamp;

    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     * @param string $idempotenceKey
     * @param string $idempotenceRequestTimestamp;
     */
    public function __construct(
        $httpStatusCode,
        DataObject $response,
        $message = null,
        $idempotenceKey = '',
        $idempotenceRequestTimestamp = ''
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
    public function getIdempotenceKey()
    {
        return $this->idempotenceKey;
    }

    /**
     * @return string
     */
    public function getIdempotenceRequestTimestamp()
    {
        return $this->idempotenceRequestTimestamp;
    }
}
