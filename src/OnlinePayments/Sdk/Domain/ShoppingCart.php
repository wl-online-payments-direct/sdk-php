<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ShoppingCart extends DataObject
{
    // Properties
    /**
     * @var AmountBreakdown[]
     */
    private $amountBreakdown;

    /**
     * @var GiftCardPurchase
     */
    private $giftCardPurchase;

    /**
     * @var bool
     */
    private $isPreOrder;

    /**
     * @var LineItem[]
     */
    private $items;

    /**
     * @var string
     */
    private $preOrderItemAvailabilityDate;

    /**
     * @var bool
     */
    private $reOrderIndicator;

    // Methods
    /**
     * @return AmountBreakdown[]
     */
    public function getAmountBreakdown()
    {
        return $this->amountBreakdown;
    }
    /**
     * @var AmountBreakdown[]
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
     * @var GiftCardPurchase
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
     * @var bool
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
     * @var LineItem[]
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
     * @var string
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
     * @var bool
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
