<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OrderReferences extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $descriptor = null;

    /**
     * @var string|null
     */
    public ?string $merchantParameters = null;

    /**
     * @var string|null
     */
    public ?string $merchantReference = null;

    /**
     * @var string|null
     */
    public ?string $operationGroupReference = null;

    /**
     * @return string|null
     */
    public function getDescriptor(): ?string
    {
        return $this->descriptor;
    }

    /**
     * @param string|null $value
     */
    public function setDescriptor(?string $value): void
    {
        $this->descriptor = $value;
    }

    /**
     * @return string|null
     */
    public function getMerchantParameters(): ?string
    {
        return $this->merchantParameters;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantParameters(?string $value): void
    {
        $this->merchantParameters = $value;
    }

    /**
     * @return string|null
     */
    public function getMerchantReference(): ?string
    {
        return $this->merchantReference;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantReference(?string $value): void
    {
        $this->merchantReference = $value;
    }

    /**
     * @return string|null
     */
    public function getOperationGroupReference(): ?string
    {
        return $this->operationGroupReference;
    }

    /**
     * @param string|null $value
     */
    public function setOperationGroupReference(?string $value): void
    {
        $this->operationGroupReference = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->descriptor)) {
            $object->descriptor = $this->descriptor;
        }
        if (!is_null($this->merchantParameters)) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->operationGroupReference)) {
            $object->operationGroupReference = $this->operationGroupReference;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OrderReferences
    {
        parent::fromObject($object);
        if (property_exists($object, 'descriptor')) {
            $this->descriptor = $object->descriptor;
        }
        if (property_exists($object, 'merchantParameters')) {
            $this->merchantParameters = $object->merchantParameters;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'operationGroupReference')) {
            $this->operationGroupReference = $object->operationGroupReference;
        }
        return $this;
    }
}
