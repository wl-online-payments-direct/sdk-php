<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class GetBatchStatusResponse extends DataObject
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
     * @var string|null
    */
    public ?string $status = null;

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
     * @return GetBatchStatusResponse
    */
    public function withItemCount(?int $value): GetBatchStatusResponse
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
     * @return GetBatchStatusResponse
    */
    public function withMerchantBatchReference(?string $value): GetBatchStatusResponse
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
     * @return GetBatchStatusResponse
    */
    public function withOperationType(?string $value): GetBatchStatusResponse
    {
        $this->operationType = $value;
        return $this;
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
     * @param string|null $value
     * @return GetBatchStatusResponse
    */
    public function withStatus(?string $value): GetBatchStatusResponse
    {
        $this->status = $value;
        return $this;
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
        if (!is_null($this->status)) {
            $object->status = $this->status;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): GetBatchStatusResponse
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
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        return $this;
    }
}
