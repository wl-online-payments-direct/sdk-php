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
     * @param bool|null $value
     * @return $this
     */
    public function withHasMore(?bool $value): static
    {
        $this->hasMore = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withNextCursor(?string $value): static
    {
        $this->nextCursor = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->hasMore !== null) {
            $object->hasMore = $this->hasMore;
        }
        if ($this->nextCursor !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
