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
class Order extends DataObject
{
    // Properties
    /**
     * @var AdditionalOrderInput
     */
    private $additionalInput;

    /**
     * @var AmountOfMoney
     */
    private $amountOfMoney;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var OrderReferences
     */
    private $references;

    /**
     * @var Shipping
     */
    private $shipping;

    /**
     * @var ShoppingCart
     */
    private $shoppingCart;

    /**
     * @var SurchargeSpecificInput
     */
    private $surchargeSpecificInput;

    // Methods
    /**
     * @return AdditionalOrderInput
     */
    public function getAdditionalInput()
    {
        return $this->additionalInput;
    }
    /**
     * @var AdditionalOrderInput
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
     * @var AmountOfMoney
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
     * @var Customer
     */
    public function setCustomer($value)
    {
        $this->customer = $value;
    }

    /**
     * @return OrderReferences
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * @var OrderReferences
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
     * @var Shipping
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
     * @var ShoppingCart
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
     * @var SurchargeSpecificInput
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
        if ($this->additionalInput !== null) {
            $object->additionalInput = $this->additionalInput->toObject();
        }
        if ($this->amountOfMoney !== null) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if ($this->customer !== null) {
            $object->customer = $this->customer->toObject();
        }
        if ($this->references !== null) {
            $object->references = $this->references->toObject();
        }
        if ($this->shipping !== null) {
            $object->shipping = $this->shipping->toObject();
        }
        if ($this->shoppingCart !== null) {
            $object->shoppingCart = $this->shoppingCart->toObject();
        }
        if ($this->surchargeSpecificInput !== null) {
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
