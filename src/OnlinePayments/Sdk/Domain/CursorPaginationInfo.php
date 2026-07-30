<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CursorPaginationInfo extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $hasMore = null;

    /**
     * @var string|null
     */
    public ?string $nextCursor = null;

    /**
     * @return bool|null
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * @param bool|null $value
     */
    public function setHasMore(?bool $value): void
    {
        $this->hasMore = $value;
    }

    /**
     * @return string|null
     */
    public function getNextCursor(): ?string
    {
        return $this->nextCursor;
    }

    /**
     * @param string|null $value
     */
    public function setNextCursor(?string $value): void
    {
        $this->nextCursor = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->hasMore)) {
            $object->hasMore = $this->hasMore;
        }
        if (!is_null($this->nextCursor)) {
            $object->nextCursor = $this->nextCursor;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CursorPaginationInfo
    {
        parent::fromObject($object);
        if (property_exists($object, 'hasMore')) {
            $this->hasMore = $object->hasMore;
        }
        if (property_exists($object, 'nextCursor')) {
            $this->nextCursor = $object->nextCursor;
        }
        return $this;
    }
}
