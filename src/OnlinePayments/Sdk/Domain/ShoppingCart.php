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
     * @var AmountBreakdown[]
     * @deprecated Use order.shipping.shippingCost for shipping cost. Other amounts are not used. Determines how the total amount is split into amount types
     */
    public $amountBreakdown = null;

    /**
     * @var GiftCardPurchase
     */
    public $giftCardPurchase = null;

    /**
     * @var bool
     */
    public $isPreOrder = null;

    /**
     * @var LineItem[]
     */
    public $items = null;

    /**
     * @var string
     */
    public $preOrderItemAvailabilityDate = null;

    /**
     * @var bool
     */
    public $reOrderIndicator = null;

    /**
     * @return AmountBreakdown[]
     * @deprecated Use order.shipping.shippingCost for shipping cost. Other amounts are not used. Determines how the total amount is split into amount types
     */
    public function getAmountBreakdown()
    {
        return $this->amountBreakdown;
    }

    /**
     * @param AmountBreakdown[]
     * @deprecated Use order.shipping.shippingCost for shipping cost. Other amounts are not used. Determines how the total amount is split into amount types
     */
    public function setAmountBreakdown($value)
    {
        $this->amountBreakdown = $value;
    }

    /**
     * @return GiftCardPurchase
     */
    public function getGiftCardPurchase()
    {
        return $this->giftCardPurchase;
    }

    /**
     * @param GiftCardPurchase
     */
    public function setGiftCardPurchase($value)
    {
        $this->giftCardPurchase = $value;
    }

    /**
     * @return bool
     */
    public function getIsPreOrder()
    {
        return $this->isPreOrder;
    }

    /**
     * @param bool
     */
    public function setIsPreOrder($value)
    {
        $this->isPreOrder = $value;
    }

    /**
     * @return LineItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param LineItem[]
     */
    public function setItems($value)
    {
        $this->items = $value;
    }

    /**
     * @return string
     */
    public function getPreOrderItemAvailabilityDate()
    {
        return $this->preOrderItemAvailabilityDate;
    }

    /**
     * @param string
     */
    public function setPreOrderItemAvailabilityDate($value)
    {
        $this->preOrderItemAvailabilityDate = $value;
    }

    /**
     * @return bool
     */
    public function getReOrderIndicator()
    {
        return $this->reOrderIndicator;
    }

    /**
     * @param bool
     */
    public function setReOrderIndicator($value)
    {
        $this->reOrderIndicator = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amountBreakdown)) {
            $object->amountBreakdown = [];
            foreach ($this->amountBreakdown as $element) {
                if (!is_null($element)) {
                    $object->amountBreakdown[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->giftCardPurchase)) {
            $object->giftCardPurchase = $this->giftCardPurchase->toObject();
        }
        if (!is_null($this->isPreOrder)) {
            $object->isPreOrder = $this->isPreOrder;
        }
        if (!is_null($this->items)) {
            $object->items = [];
            foreach ($this->items as $element) {
                if (!is_null($element)) {
                    $object->items[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->preOrderItemAvailabilityDate)) {
            $object->preOrderItemAvailabilityDate = $this->preOrderItemAvailabilityDate;
        }
        if (!is_null($this->reOrderIndicator)) {
            $object->reOrderIndicator = $this->reOrderIndicator;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
