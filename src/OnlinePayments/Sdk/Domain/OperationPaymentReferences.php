<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OperationPaymentReferences extends DataObject
{
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
    public ?string $structuredCreditorReference = null;

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
        if (!is_null($this->merchantReference)) {
            $object->merchantReference = $this->merchantReference;
        }
        if (!is_null($this->operationGroupReference)) {
            $object->operationGroupReference = $this->operationGroupReference;
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
    public function fromObject(object $object): OperationPaymentReferences
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'operationGroupReference')) {
            $this->operationGroupReference = $object->operationGroupReference;
        }
        if (property_exists($object, 'structuredCreditorReference')) {
            $this->structuredCreditorReference = $object->structuredCreditorReference;
        }
        return $this;
    }
}
