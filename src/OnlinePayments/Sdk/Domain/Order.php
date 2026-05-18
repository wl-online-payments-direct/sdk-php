<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class Order extends DataObject
{
    /**
     * @var AdditionalOrderInput|null
     */
    public ?AdditionalOrderInput $additionalInput = null;

    /**
     * @var AmountOfMoney|null
     */
    public ?AmountOfMoney $amountOfMoney = null;

    /**
     * @var Customer|null
     */
    public ?Customer $customer = null;

    /**
     * @var Discount|null
     */
    public ?Discount $discount = null;

    /**
     * @var OrderReferences|null
     */
    public ?OrderReferences $references = null;

    /**
     * @var Shipping|null
     */
    public ?Shipping $shipping = null;

    /**
     * @var ShoppingCart|null
     */
    public ?ShoppingCart $shoppingCart = null;

    /**
     * @var SurchargeSpecificInput|null
     */
    public ?SurchargeSpecificInput $surchargeSpecificInput = null;

    /**
     * @var int|null
     */
    public ?int $totalTaxAmount = null;

    /**
     * @return AdditionalOrderInput|null
     */
    public function getAdditionalInput(): ?AdditionalOrderInput
    {
        return $this->additionalInput;
    }

    /**
     * @param AdditionalOrderInput|null $value
     */
    public function setAdditionalInput(?AdditionalOrderInput $value): void
    {
        $this->additionalInput = $value;
    }

    /**
     * @return AmountOfMoney|null
     */
    public function getAmountOfMoney(): ?AmountOfMoney
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney|null $value
     */
    public function setAmountOfMoney(?AmountOfMoney $value): void
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer|null $value
     */
    public function setCustomer(?Customer $value): void
    {
        $this->customer = $value;
    }

    /**
     * @return Discount|null
     */
    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    /**
     * @param Discount|null $value
     */
    public function setDiscount(?Discount $value): void
    {
        $this->discount = $value;
    }

    /**
     * @return OrderReferences|null
     */
    public function getReferences(): ?OrderReferences
    {
        return $this->references;
    }

    /**
     * @param OrderReferences|null $value
     */
    public function setReferences(?OrderReferences $value): void
    {
        $this->references = $value;
    }

    /**
     * @return Shipping|null
     */
    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }

    /**
     * @param Shipping|null $value
     */
    public function setShipping(?Shipping $value): void
    {
        $this->shipping = $value;
    }

    /**
     * @return ShoppingCart|null
     */
    public function getShoppingCart(): ?ShoppingCart
    {
        return $this->shoppingCart;
    }

    /**
     * @param ShoppingCart|null $value
     */
    public function setShoppingCart(?ShoppingCart $value): void
    {
        $this->shoppingCart = $value;
    }

    /**
     * @return SurchargeSpecificInput|null
     */
    public function getSurchargeSpecificInput(): ?SurchargeSpecificInput
    {
        return $this->surchargeSpecificInput;
    }

    /**
     * @param SurchargeSpecificInput|null $value
     */
    public function setSurchargeSpecificInput(?SurchargeSpecificInput $value): void
    {
        $this->surchargeSpecificInput = $value;
    }

    /**
     * @return int|null
     */
    public function getTotalTaxAmount(): ?int
    {
        return $this->totalTaxAmount;
    }

    /**
     * @param int|null $value
     */
    public function setTotalTaxAmount(?int $value): void
    {
        $this->totalTaxAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->additionalInput)) {
            $object->additionalInput = $this->additionalInput->toObject();
        }
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->customer)) {
            $object->customer = $this->customer->toObject();
        }
        if (!is_null($this->discount)) {
            $object->discount = $this->discount->toObject();
        }
        if (!is_null($this->references)) {
            $object->references = $this->references->toObject();
        }
        if (!is_null($this->shipping)) {
            $object->shipping = $this->shipping->toObject();
        }
        if (!is_null($this->shoppingCart)) {
            $object->shoppingCart = $this->shoppingCart->toObject();
        }
        if (!is_null($this->surchargeSpecificInput)) {
            $object->surchargeSpecificInput = $this->surchargeSpecificInput->toObject();
        }
        if (!is_null($this->totalTaxAmount)) {
            $object->totalTaxAmount = $this->totalTaxAmount;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): Order
    {
        parent::fromObject($object);
        if (property_exists($object, 'additionalInput')) {
            if (!is_object($object->additionalInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->additionalInput, true) . '\' is not an object');
            }
            $value = new AdditionalOrderInput();
            $this->additionalInput = $value->fromObject($object->additionalInput);
        }
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'customer')) {
            if (!is_object($object->customer)) {
                throw new UnexpectedValueException('value \'' . print_r($object->customer, true) . '\' is not an object');
            }
            $value = new Customer();
            $this->customer = $value->fromObject($object->customer);
        }
        if (property_exists($object, 'discount')) {
            if (!is_object($object->discount)) {
                throw new UnexpectedValueException('value \'' . print_r($object->discount, true) . '\' is not an object');
            }
            $value = new Discount();
            $this->discount = $value->fromObject($object->discount);
        }
        if (property_exists($object, 'references')) {
            if (!is_object($object->references)) {
                throw new UnexpectedValueException('value \'' . print_r($object->references, true) . '\' is not an object');
            }
            $value = new OrderReferences();
            $this->references = $value->fromObject($object->references);
        }
        if (property_exists($object, 'shipping')) {
            if (!is_object($object->shipping)) {
                throw new UnexpectedValueException('value \'' . print_r($object->shipping, true) . '\' is not an object');
            }
            $value = new Shipping();
            $this->shipping = $value->fromObject($object->shipping);
        }
        if (property_exists($object, 'shoppingCart')) {
            if (!is_object($object->shoppingCart)) {
                throw new UnexpectedValueException('value \'' . print_r($object->shoppingCart, true) . '\' is not an object');
            }
            $value = new ShoppingCart();
            $this->shoppingCart = $value->fromObject($object->shoppingCart);
        }
        if (property_exists($object, 'surchargeSpecificInput')) {
            if (!is_object($object->surchargeSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surchargeSpecificInput, true) . '\' is not an object');
            }
            $value = new SurchargeSpecificInput();
            $this->surchargeSpecificInput = $value->fromObject($object->surchargeSpecificInput);
        }
        if (property_exists($object, 'totalTaxAmount')) {
            $this->totalTaxAmount = $object->totalTaxAmount;
        }
        return $this;
    }
}
