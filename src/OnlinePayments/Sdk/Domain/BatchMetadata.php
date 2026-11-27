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
     * @param int|null $value
     * @return $this
     */
    public function withItemCount(?int $value): static
    {
        $this->itemCount = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withMerchantBatchReference(?string $value): static
    {
        $this->merchantBatchReference = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withOperationType(?string $value): static
    {
        $this->operationType = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->itemCount !== null) {
            $object->itemCount = $this->itemCount;
        }
        if ($this->merchantBatchReference !== null) {
            $object->merchantBatchReference = $this->merchantBatchReference;
        }
        if ($this->operationType !== null) {
            $object->operationType = $this->operationType;
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
