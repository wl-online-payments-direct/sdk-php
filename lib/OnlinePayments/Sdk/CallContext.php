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
    private $idempotenceKey = '';

    /** @var string */
    private $idempotenceRequestTimestamp = '';

    /** @var DateTime|null */
    private $idempotenceResponseDateTime;

    /**
     * @return string
     */
    public function getIdempotenceKey()
    {
        return $this->idempotenceKey;
    }

    /**
     * @param string $idempotenceKey
     */
    public function setIdempotenceKey($idempotenceKey)
    {
        $this->idempotenceKey = $idempotenceKey;
    }

    /**
     * @return string
     */
    public function getIdempotenceRequestTimestamp()
    {
        return $this->idempotenceRequestTimestamp;
    }

    /**
     * @param string $idempotenceRequestTimestamp
     */
    public function setIdempotenceRequestTimestamp($idempotenceRequestTimestamp)
    {
        $this->idempotenceRequestTimestamp = $idempotenceRequestTimestamp;
    }

    /**
     * @return DateTime|null
     */
    public function getIdempotenceResponseDateTime()
    {
        return $this->idempotenceResponseDateTime;
    }

    /**
     * @param DateTime $idempotenceResponseDateTime
     */
    public function setIdempotenceResponseDateTime(DateTime $idempotenceResponseDateTime)
    {
        $this->idempotenceResponseDateTime = $idempotenceResponseDateTime;
    }
}
