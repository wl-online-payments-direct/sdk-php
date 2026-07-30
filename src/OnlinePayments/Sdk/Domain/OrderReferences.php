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
    public ?string $merchantComment = null;

    /**
     * @var string|null
     */
    public ?string $merchantParameters = null;

    /**
     * @var string|null
     */
    public ?string $merchantReconciliationReference = null;

    /**
     * @var string|null
     */
    public ?string $merchantReference = null;

    /**
     * @var string|null
     */
    public ?string $operationGroupReference = null;

    /**
     * @var string|null
     */
    public ?string $softDescriptor = null;

    /**
     * @var string|null
     */
    public ?string $structuredCreditorReference = null;

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
    public function getMerchantComment(): ?string
    {
        return $this->merchantComment;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantComment(?string $value): void
    {
        $this->merchantComment = $value;
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
    public function getMerchantReconciliationReference(): ?string
    {
        return $this->merchantReconciliationReference;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantReconciliationReference(?string $value): void
    {
        $this->merchantReconciliationReference = $value;
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
     * @return string|null
     */
    public function getSoftDescriptor(): ?string
    {
        return $this->softDescriptor;
    }

    /**
     * @param string|null $value
     */
    public function setSoftDescriptor(?string $value): void
    {
        $this->softDescriptor = $value;
    }

    /**
     * @return string|null
     */
    public function getStructuredCreditorReference(): ?string
    {
        return $this->structuredCreditorReference;
    }

    /**
     * @param string|null $value
     */
    public function setStructuredCreditorReference(?string $value): void
    {
        $this->structuredCreditorReference = $value;
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
        if (!is_null($this->merchantComment)) {
            $object->merchantComment = $this->merchantComment;
        }
        if (!is_null($this->merchantParameters)) {
            $object->merchantParameters = $this->merchantParameters;
        }
        if (!is_null($this->merchantReconciliationReference)) {
            $object->merchantReconciliationReference = $this->merchantReconciliationReference;
        }
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->operationGroupReference)) {
            $object->operationGroupReference = $this->operationGroupReference;
        }
        if (!is_null($this->softDescriptor)) {
            $object->softDescriptor = $this->softDescriptor;
        }
        if (!is_null($this->structuredCreditorReference)) {
            $object->structuredCreditorReference = $this->structuredCreditorReference;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): OrderReferences
    {
        parent::fromObject($object);
        if (property_exists($object, 'descriptor')) {
            $this->descriptor = $object->descriptor;
        }
        if (property_exists($object, 'merchantComment')) {
            $this->merchantComment = $object->merchantComment;
        }
        if (property_exists($object, 'merchantParameters')) {
            $this->merchantParameters = $object->merchantParameters;
        }
        if (property_exists($object, 'merchantReconciliationReference')) {
            $this->merchantReconciliationReference = $object->merchantReconciliationReference;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'operationGroupReference')) {
            $this->operationGroupReference = $object->operationGroupReference;
        }
        if (property_exists($object, 'softDescriptor')) {
            $this->softDescriptor = $object->softDescriptor;
        }
        if (property_exists($object, 'structuredCreditorReference')) {
            $this->structuredCreditorReference = $object->structuredCreditorReference;
        }
        return $this;
    }
}
