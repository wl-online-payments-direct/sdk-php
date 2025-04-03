<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CompletePaymentRequest extends DataObject
{
    /**
     * @var CompletePaymentCardPaymentMethodSpecificInput
     */
    public $cardPaymentMethodSpecificInput = null;

    /**
     * @var Order
     */
    public $order = null;

    /**
     * @return CompletePaymentCardPaymentMethodSpecificInput
     */
    public function getCardPaymentMethodSpecificInput()
    {
        return $this->cardPaymentMethodSpecificInput;
    }

    /**
     * @param CompletePaymentCardPaymentMethodSpecificInput
     */
    public function setCardPaymentMethodSpecificInput($value)
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order
     */
    public function setOrder($value)
    {
        $this->order = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->cardPaymentMethodSpecificInput)) {
            $object->cardPaymentMethodSpecificInput = $this->cardPaymentMethodSpecificInput->toObject();
        }
        if (!is_null($this->order)) {
            $object->order = $this->order->toObject();
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
        if (property_exists($object, 'cardPaymentMethodSpecificInput')) {
            if (!is_object($object->cardPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new CompletePaymentCardPaymentMethodSpecificInput();
            $this->cardPaymentMethodSpecificInput = $value->fromObject($object->cardPaymentMethodSpecificInput);
        }
        if (property_exists($object, 'order')) {
            if (!is_object($object->order)) {
                throw new UnexpectedValueException('value \'' . print_r($object->order, true) . '\' is not an object');
            }
            $value = new Order();
            $this->order = $value->fromObject($object->order);
        }
        return $this;
    }
}
