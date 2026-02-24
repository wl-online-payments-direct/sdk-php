<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class BatchMetadata extends DataObject
{
    /**
     * @var int|null
     */
    public ?int $itemCount = null;

    /**
     * @var string|null
     */
    public ?string $merchantBatchReference = null;

    /**
     * @var string|null
     */
    public ?string $operationType = null;

    /**
     * @return int|null
     */
    public function getItemCount(): ?int
    {
        return $this->itemCount;
    }

    /**
     * @param int|null $value
     */
    public function setItemCount(?int $value): void
    {
        $this->itemCount = $value;
    }

    /**
     * @return string|null
     */
    public function getMerchantBatchReference(): ?string
    {
        return $this->merchantBatchReference;
    }

    /**
     * @param string|null $value
     */
    public function setMerchantBatchReference(?string $value): void
    {
        $this->merchantBatchReference = $value;
    }

    /**
     * @return string|null
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @param string|null $value
     */
    public function setOperationType(?string $value): void
    {
        $this->operationType = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->itemCount)) {
            $object->itemCount = $this->itemCount;
        }
        if (!is_null($this->merchantBatchReference)) {
            $object->merchantBatchReference = $this->merchantBatchReference;
        }
        if (!is_null($this->operationType)) {
            $object->operationType = $this->operationType;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): BatchMetadata
    {
        parent::fromObject($object);
        if (property_exists($object, 'itemCount')) {
            $this->itemCount = $object->itemCount;
        }
        if (property_exists($object, 'merchantBatchReference')) {
            $this->merchantBatchReference = $object->merchantBatchReference;
        }
        if (property_exists($object, 'operationType')) {
            $this->operationType = $object->operationType;
        }
        return $this;
    }
}
