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
     * @param string|null $value
     * @return $this
     */
    public function withDetail(?string $value): static
    {
        $this->detail = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withInstance(?string $value): static
    {
        $this->instance = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withStatus(?int $value): static
    {
        $this->status = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withTitle(?string $value): static
    {
        $this->title = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withType(?string $value): static
    {
        $this->type = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->detail !== null) {
            $object->detail = $this->detail;
        }
        if ($this->instance !== null) {
            $object->instance = $this->instance;
        }
        if ($this->status !== null) {
            $object->status = $this->status;
        }
        if ($this->title !== null) {
            $object->title = $this->title;
        }
        if ($this->type !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
