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
    public ?string $merchantComment = null;

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
     * @param string|null $value
     * @return $this
     */
    public function withMerchantComment(?string $value): static
    {
        $this->merchantComment = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withMerchantReconciliationReference(?string $value): static
    {
        $this->merchantReconciliationReference = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withMerchantReference(?string $value): static
    {
        $this->merchantReference = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withOperationGroupReference(?string $value): static
    {
        $this->operationGroupReference = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withSoftDescriptor(?string $value): static
    {
        $this->softDescriptor = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withStructuredCreditorReference(?string $value): static
    {
        $this->structuredCreditorReference = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->merchantComment !== null) {
            $object->merchantComment = $this->merchantComment;
        }
        if ($this->merchantReconciliationReference !== null) {
            $object->merchantReconciliationReference = $this->merchantReconciliationReference;
        }
        if ($this->merchantReference !== null) {
            $object->merchantReference = $this->merchantReference;
        }
        if ($this->operationGroupReference !== null) {
            $object->operationGroupReference = $this->operationGroupReference;
        }
        if ($this->softDescriptor !== null) {
            $object->softDescriptor = $this->softDescriptor;
        }
        if ($this->structuredCreditorReference !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantComment')) {
            $this->merchantComment = $object->merchantComment;
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
