<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ProblemDetailsResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $detail = null;

    /**
     * @var string|null
     */
    public ?string $instance = null;

    /**
     * @var int|null
     */
    public ?int $status = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @return string|null
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * @param string|null $value
     */
    public function setDetail(?string $value): void
    {
        $this->detail = $value;
    }

    /**
     * @return string|null
     */
    public function getInstance(): ?string
    {
        return $this->instance;
    }

    /**
     * @param string|null $value
     */
    public function setInstance(?string $value): void
    {
        $this->instance = $value;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int|null $value
     */
    public function setStatus(?int $value): void
    {
        $this->status = $value;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $value
     */
    public function setTitle(?string $value): void
    {
        $this->title = $value;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $value
     */
    public function setType(?string $value): void
    {
        $this->type = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->detail)) {
            $object->detail = $this->detail;
        }
        if (!is_null($this->instance)) {
            $object->instance = $this->instance;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->title)) {
            $object->title = $this->title;
        }
        if (!is_null($this->type)) {
            $object->type = $this->type;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): ProblemDetailsResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'detail')) {
            $this->detail = $object->detail;
        }
        if (property_exists($object, 'instance')) {
            $this->instance = $object->instance;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'title')) {
            $this->title = $object->title;
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
