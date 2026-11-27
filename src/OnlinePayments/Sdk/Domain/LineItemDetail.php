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
     * @return $this
     */
    public function withDiscountAmount(?int $value): static
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
     * @return $this
     */
    public function withLineItemId(?string $value): static
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
     * @return $this
     */
    public function withQuantity(?int $value): static
    {
        $this->quantity = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->discountAmount !== null) {
            $object->discountAmount = $this->discountAmount;
        }
        if ($this->lineItemId !== null) {
            $object->lineItemId = $this->lineItemId;
        }
        if ($this->quantity !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
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
