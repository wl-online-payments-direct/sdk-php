<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Pagination extends DataObject
{
    /**
     * @var int|null
    */
    public ?int $page = null;

    /**
     * @var int|null
    */
    public ?int $pageSize = null;

    /**
     * @return int|null
    */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int|null $value
    */
    public function setPage(?int $value): void
    {
        $this->page = $value;
    }

    /**
     * @param int|null $value
     * @return Pagination
    */
    public function withPage(?int $value): Pagination
    {
        $this->page = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @param int|null $value
    */
    public function setPageSize(?int $value): void
    {
        $this->pageSize = $value;
    }

    /**
     * @param int|null $value
     * @return Pagination
    */
    public function withPageSize(?int $value): Pagination
    {
        $this->pageSize = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->page)) {
            $object->page = $this->page;
        }
        if (!is_null($this->pageSize)) {
            $object->pageSize = $this->pageSize;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Pagination
    {
        parent::fromObject($object);
        if (property_exists($object, 'page')) {
            $this->page = $object->page;
        }
        if (property_exists($object, 'pageSize')) {
            $this->pageSize = $object->pageSize;
        }
        return $this;
    }
}
