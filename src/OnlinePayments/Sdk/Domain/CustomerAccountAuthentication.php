<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CustomerAccountAuthentication extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $data = null;

    /**
     * @var string|null
     */
    public ?string $method = null;

    /**
     * @var string|null
     */
    public ?string $utcTimestamp = null;

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string|null $value
     */
    public function setData(?string $value): void
    {
        $this->data = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withData(?string $value): static
    {
        $this->data = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param string|null $value
     */
    public function setMethod(?string $value): void
    {
        $this->method = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withMethod(?string $value): static
    {
        $this->method = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUtcTimestamp(): ?string
    {
        return $this->utcTimestamp;
    }

    /**
     * @param string|null $value
     */
    public function setUtcTimestamp(?string $value): void
    {
        $this->utcTimestamp = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withUtcTimestamp(?string $value): static
    {
        $this->utcTimestamp = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->data !== null) {
            $object->data = $this->data;
        }
        if ($this->method !== null) {
            $object->method = $this->method;
        }
        if ($this->utcTimestamp !== null) {
            $object->utcTimestamp = $this->utcTimestamp;
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
        if (property_exists($object, 'data')) {
            $this->data = $object->data;
        }
        if (property_exists($object, 'method')) {
            $this->method = $object->method;
        }
        if (property_exists($object, 'utcTimestamp')) {
            $this->utcTimestamp = $object->utcTimestamp;
        }
        return $this;
    }
}
