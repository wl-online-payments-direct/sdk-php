<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class AccountOnFileAttribute extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $key = null;

    /**
     * @var string|null
     * @deprecated Deprecated
     */
    public ?string $mustWriteReason = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $value = null;

    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string|null $value
     */
    public function setKey(?string $value): void
    {
        $this->key = $value;
    }

    /**
     * @return string|null
     * @deprecated Deprecated
     */
    public function getMustWriteReason(): ?string
    {
        return $this->mustWriteReason;
    }

    /**
     * @param string|null $value
     * @deprecated Deprecated
     */
    public function setMustWriteReason(?string $value): void
    {
        $this->mustWriteReason = $value;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $value
     */
    public function setStatus(?string $value): void
    {
        $this->status = $value;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->key)) {
            $object->key = $this->key;
        }
        if (!is_null($this->mustWriteReason)) {
            $object->mustWriteReason = $this->mustWriteReason;
        }
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        if (!is_null($this->value)) {
            $object->value = $this->value;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): AccountOnFileAttribute
    {
        parent::fromObject($object);
        if (property_exists($object, 'key')) {
            $this->key = $object->key;
        }
        if (property_exists($object, 'mustWriteReason')) {
            $this->mustWriteReason = $object->mustWriteReason;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        if (property_exists($object, 'value')) {
            $this->value = $object->value;
        }
        return $this;
    }
}
