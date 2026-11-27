<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShoppingCart extends DataObject
{
    /**
     * @var AmountBreakdown[]|null
     *
     * @deprecated Use order.shipping.shippingCost for shipping cost. Other amounts are not used. Determines how the total amount is split into amount types
     */
    public ?array $amountBreakdown = null;

    /**
     * @var GiftCardPurchase|null
     */
    public ?GiftCardPurchase $giftCardPurchase = null;

    /**
     * @var bool|null
     */
    public ?bool $isPreOrder = null;

    /**
     * @var LineItem[]|null
     */
    public ?array $items = null;

    /**
     * @var string|null
     */
    public ?string $preOrderItemAvailabilityDate = null;

    /**
     * @var bool|null
     */
    public ?bool $reOrderIndicator = null;

    /**
     * @return AmountBreakdown[]|null
     *
     * @deprecated Use order.shipping.shippingCost for shipping cost. Other amounts are not used. Determines how the total amount is split into amount types
     */
    public function getAmountBreakdown(): ?array
    {
        return $this->amountBreakdown;
    }

    /**
     * @param AmountBreakdown[]|null $value
     *
     * @deprecated Use order.shipping.shippingCost for shipping cost. Other amounts are not used. Determines how the total amount is split into amount types
     */
    public function setAmountBreakdown(?array $value): void
    {
        $this->amountBreakdown = $value;
    }

    /**
     * @param AmountBreakdown[]|null $value
     * @return $this
     *
     * @deprecated Use order.shipping.shippingCost for shipping cost. Other amounts are not used. Determines how the total amount is split into amount types
     */
    public function withAmountBreakdown(?array $value): static
    {
        $this->amountBreakdown = $value;
        return $this;
    }

    /**
     * @return GiftCardPurchase|null
     */
    public function getGiftCardPurchase(): ?GiftCardPurchase
    {
        return $this->giftCardPurchase;
    }

    /**
     * @param GiftCardPurchase|null $value
     */
    public function setGiftCardPurchase(?GiftCardPurchase $value): void
    {
        $this->giftCardPurchase = $value;
    }

    /**
     * @param GiftCardPurchase|null $value
     * @return $this
     */
    public function withGiftCardPurchase(?GiftCardPurchase $value): static
    {
        $this->giftCardPurchase = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsPreOrder(): ?bool
    {
        return $this->isPreOrder;
    }

    /**
     * @param bool|null $value
     */
    public function setIsPreOrder(?bool $value): void
    {
        $this->isPreOrder = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withIsPreOrder(?bool $value): static
    {
        $this->isPreOrder = $value;
        return $this;
    }

    /**
     * @return LineItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param LineItem[]|null $value
     */
    public function setItems(?array $value): void
    {
        $this->items = $value;
    }

    /**
     * @param LineItem[]|null $value
     * @return $this
     */
    public function withItems(?array $value): static
    {
        $this->items = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreOrderItemAvailabilityDate(): ?string
    {
        return $this->preOrderItemAvailabilityDate;
    }

    /**
     * @param string|null $value
     */
    public function setPreOrderItemAvailabilityDate(?string $value): void
    {
        $this->preOrderItemAvailabilityDate = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withPreOrderItemAvailabilityDate(?string $value): static
    {
        $this->preOrderItemAvailabilityDate = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getReOrderIndicator(): ?bool
    {
        return $this->reOrderIndicator;
    }

    /**
     * @param bool|null $value
     */
    public function setReOrderIndicator(?bool $value): void
    {
        $this->reOrderIndicator = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withReOrderIndicator(?bool $value): static
    {
        $this->reOrderIndicator = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->amountBreakdown !== null) {
            $object->amountBreakdown = [];
            foreach ($this->amountBreakdown as $element) {
                if ($element !== null) {
                    $object->amountBreakdown[] = $element->toObject();
                }
            }
        }
        if ($this->giftCardPurchase !== null) {
            $object->giftCardPurchase = $this->giftCardPurchase->toObject();
        }
        if ($this->isPreOrder !== null) {
            $object->isPreOrder = $this->isPreOrder;
        }
        if ($this->items !== null) {
            $object->items = [];
            foreach ($this->items as $element) {
                if ($element !== null) {
                    $object->items[] = $element->toObject();
                }
            }
        }
        if ($this->preOrderItemAvailabilityDate !== null) {
            $object->preOrderItemAvailabilityDate = $this->preOrderItemAvailabilityDate;
        }
        if ($this->reOrderIndicator !== null) {
            $object->reOrderIndicator = $this->reOrderIndicator;
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
        if (property_exists($object, 'amountBreakdown')) {
            if (!is_array($object->amountBreakdown) && !is_object($object->amountBreakdown)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountBreakdown, true) . '\' is not an array or object');
            }
            $this->amountBreakdown = [];
            foreach ($object->amountBreakdown as $element) {
                $value = new AmountBreakdown();
                $this->amountBreakdown[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'giftCardPurchase')) {
            if (!is_object($object->giftCardPurchase)) {
                throw new UnexpectedValueException('value \'' . print_r($object->giftCardPurchase, true) . '\' is not an object');
            }
            $value = new GiftCardPurchase();
            $this->giftCardPurchase = $value->fromObject($object->giftCardPurchase);
        }
        if (property_exists($object, 'isPreOrder')) {
            $this->isPreOrder = $object->isPreOrder;
        }
        if (property_exists($object, 'items')) {
            if (!is_array($object->items) && !is_object($object->items)) {
                throw new UnexpectedValueException('value \'' . print_r($object->items, true) . '\' is not an array or object');
            }
            $this->items = [];
            foreach ($object->items as $element) {
                $value = new LineItem();
                $this->items[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'preOrderItemAvailabilityDate')) {
            $this->preOrderItemAvailabilityDate = $object->preOrderItemAvailabilityDate;
        }
        if (property_exists($object, 'reOrderIndicator')) {
            $this->reOrderIndicator = $object->reOrderIndicator;
        }
        return $this;
    }
}
