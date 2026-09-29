<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class LineItemDetail extends DataObject
{
    /**
     * @var int|null
    */
    public ?int $discountAmount = null;

    /**
     * @var string|null
    */
    public ?string $lineItemId = null;

    /**
     * @var int|null
    */
    public ?int $quantity = null;

    /**
     * @return int|null
    */
    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    /**
     * @param int|null $value
    */
    public function setDiscountAmount(?int $value): void
    {
        $this->discountAmount = $value;
    }

    /**
     * @param int|null $value
     * @return LineItemDetail
    */
    public function withDiscountAmount(?int $value): LineItemDetail
    {
        $this->discountAmount = $value;
        return $this;
    }

    /**
     * @return string|null
    */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }

    /**
     * @param string|null $value
    */
    public function setLineItemId(?string $value): void
    {
        $this->lineItemId = $value;
    }

    /**
     * @param string|null $value
     * @return LineItemDetail
    */
    public function withLineItemId(?string $value): LineItemDetail
    {
        $this->lineItemId = $value;
        return $this;
    }

    /**
     * @return int|null
    */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int|null $value
    */
    public function setQuantity(?int $value): void
    {
        $this->quantity = $value;
    }

    /**
     * @param int|null $value
     * @return LineItemDetail
    */
    public function withQuantity(?int $value): LineItemDetail
    {
        $this->quantity = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->discountAmount)) {
            $object->discountAmount = $this->discountAmount;
        }
        if (!is_null($this->lineItemId)) {
            $object->lineItemId = $this->lineItemId;
        }
        if (!is_null($this->quantity)) {
            $object->quantity = $this->quantity;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): LineItemDetail
    {
        parent::fromObject($object);
        if (property_exists($object, 'discountAmount')) {
            $this->discountAmount = $object->discountAmount;
        }
        if (property_exists($object, 'lineItemId')) {
            $this->lineItemId = $object->lineItemId;
        }
        if (property_exists($object, 'quantity')) {
            $this->quantity = $object->quantity;
        }
        return $this;
    }
}
