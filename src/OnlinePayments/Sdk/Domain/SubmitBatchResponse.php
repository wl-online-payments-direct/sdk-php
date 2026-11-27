<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubmitBatchResponse extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $merchantBatchReference = null;

    /**
     * @var int|null
     */
    public ?int $totalCount = null;

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
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @param int|null $value
     */
    public function setTotalCount(?int $value): void
    {
        $this->totalCount = $value;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function withTotalCount(?int $value): static
    {
        $this->totalCount = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->merchantBatchReference !== null) {
            $object->merchantBatchReference = $this->merchantBatchReference;
        }
        if ($this->totalCount !== null) {
            $object->totalCount = $this->totalCount;
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
        if (property_exists($object, 'merchantBatchReference')) {
            $this->merchantBatchReference = $object->merchantBatchReference;
        }
        if (property_exists($object, 'totalCount')) {
            $this->totalCount = $object->totalCount;
        }
        return $this;
    }
}
