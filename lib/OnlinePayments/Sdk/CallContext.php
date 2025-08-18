<?php
namespace OnlinePayments\Sdk;

use DateTime;

/**
 * Class CallContext
 *
 * @package OnlinePayments\Sdk
 */
class CallContext
{
    /** @var string */
    private string $idempotenceKey = '';

    /** @var string */
    private string $idempotenceRequestTimestamp = '';

    /** @var DateTime|null */
    private ?DateTime $idempotenceResponseDateTime;

    /**
     * @return string
     */
    public function getIdempotenceKey(): string
    {
        return $this->idempotenceKey;
    }

    /**
     * @param string $idempotenceKey
     */
    public function setIdempotenceKey(string $idempotenceKey): void
    {
        $this->idempotenceKey = $idempotenceKey;
    }

    /**
     * @return string
     */
    public function getIdempotenceRequestTimestamp(): string
    {
        return $this->idempotenceRequestTimestamp;
    }

    /**
     * @param string $idempotenceRequestTimestamp
     */
    public function setIdempotenceRequestTimestamp(string $idempotenceRequestTimestamp): void
    {
        $this->idempotenceRequestTimestamp = $idempotenceRequestTimestamp;
    }

    /**
     * @return DateTime|null
     */
    public function getIdempotenceResponseDateTime(): ?DateTime
    {
        return $this->idempotenceResponseDateTime;
    }

    /**
     * @param DateTime $idempotenceResponseDateTime
     */
    public function setIdempotenceResponseDateTime(DateTime $idempotenceResponseDateTime): void
    {
        $this->idempotenceResponseDateTime = $idempotenceResponseDateTime;
    }
}
