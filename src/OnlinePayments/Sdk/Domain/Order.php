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
     * @var AdditionalOrderInput
     */
    public $additionalInput = null;

    /**
     * @var AmountOfMoney
     */
    public $amountOfMoney = null;

    /**
     * @var Customer
     */
    public $customer = null;

    /**
     * @var Discount
     */
    public $discount = null;

    /**
     * @var OrderReferences
     */
    public $references = null;

    /**
     * @var Shipping
     */
    public $shipping = null;

    /**
     * @var ShoppingCart
     */
    public $shoppingCart = null;

    /**
     * @var SurchargeSpecificInput
     */
    public $surchargeSpecificInput = null;

    /**
     * @return AdditionalOrderInput
     */
    public function getAdditionalInput()
    {
        return $this->additionalInput;
    }

    /**
     * @param AdditionalOrderInput
     */
    public function setAdditionalInput($value)
    {
        $this->additionalInput = $value;
    }

    /**
     * @return AmountOfMoney
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }

    /**
     * @param AmountOfMoney
     */
    public function setAmountOfMoney($value)
    {
        $this->amountOfMoney = $value;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer
     */
    public function setCustomer($value)
    {
        $this->customer = $value;
    }

    /**
     * @return Discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param Discount
     */
    public function setDiscount($value)
    {
        $this->discount = $value;
    }

    /**
     * @return OrderReferences
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param OrderReferences
     */
    public function setReferences($value)
    {
        $this->references = $value;
    }

    /**
     * @return Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param Shipping
     */
    public function setShipping($value)
    {
        $this->shipping = $value;
    }

    /**
     * @return ShoppingCart
     */
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * @param ShoppingCart
     */
    public function setShoppingCart($value)
    {
        $this->shoppingCart = $value;
    }

    /**
     * @return SurchargeSpecificInput
     */
    public function getSurchargeSpecificInput()
    {
        return $this->surchargeSpecificInput;
    }

    /**
     * @param SurchargeSpecificInput
     */
    public function setSurchargeSpecificInput($value)
    {
        $this->surchargeSpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
        return $this;
    }
}
