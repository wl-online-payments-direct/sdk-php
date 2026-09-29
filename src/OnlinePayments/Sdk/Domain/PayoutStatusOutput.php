<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PayoutStatusOutput extends DataObject
{
    /**
     * @var bool|null
    */
    public ?bool $isCancellable = null;

    /**
     * @var string|null
    */
    public ?string $statusCategory = null;

    /**
     * @var int|null
    */
    public ?int $statusCode = null;

    /**
     * @return bool|null
    */
    public function getIsCancellable(): ?bool
    {
        return $this->isCancellable;
    }

    /**
     * @param bool|null $value
    */
    public function setIsCancellable(?bool $value): void
    {
        $this->isCancellable = $value;
    }

    /**
     * @param bool|null $value
     * @return PayoutStatusOutput
    */
    public function withIsCancellable(?bool $value): PayoutStatusOutput
    {
        $this->isCancellable = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getStatusCategory(): ?string
    {
        return $this->statusCategory;
    }

    /**
     * @param string|null $value
    */
    public function setStatusCategory(?string $value): void
    {
        $this->statusCategory = $value;
    }

    /**
     * @param string|null $value
     * @return PayoutStatusOutput
    */
    public function withStatusCategory(?string $value): PayoutStatusOutput
    {
        $this->statusCategory = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @param int|null $value
    */
    public function setStatusCode(?int $value): void
    {
        $this->statusCode = $value;
    }

    /**
     * @param int|null $value
     * @return PayoutStatusOutput
    */
    public function withStatusCode(?int $value): PayoutStatusOutput
    {
        $this->statusCode = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->isCancellable)) {
            $object->isCancellable = $this->isCancellable;
        }
        if (!is_null($this->statusCategory)) {
            $object->statusCategory = $this->statusCategory;
        }
        if (!is_null($this->statusCode)) {
            $object->statusCode = $this->statusCode;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PayoutStatusOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'isCancellable')) {
            $this->isCancellable = $object->isCancellable;
        }
        if (property_exists($object, 'statusCategory')) {
            $this->statusCategory = $object->statusCategory;
        }
        if (property_exists($object, 'statusCode')) {
            $this->statusCode = $object->statusCode;
        }
        return $this;
    }
}
