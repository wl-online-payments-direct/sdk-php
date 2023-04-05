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
class SubsequentPaymentRequest extends DataObject
{
    // Properties
    /**
     * @var Order
     */
    private $order;

    /**
     * @var SubsequentCardPaymentMethodSpecificInput
     */
    private $subsequentcardPaymentMethodSpecificInput;

    // Methods
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * @var Order
     */
    public function setOrder($value)
    {
        $this->order = $value;
    }

    /**
     * @return SubsequentCardPaymentMethodSpecificInput
     */
    public function getSubsequentcardPaymentMethodSpecificInput()
    {
        return $this->subsequentcardPaymentMethodSpecificInput;
    }
    /**
     * @var SubsequentCardPaymentMethodSpecificInput
     */
    public function setSubsequentcardPaymentMethodSpecificInput($value)
    {
        $this->subsequentcardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->order !== null) {
            $object->order = $this->order->toObject();
        }
        if ($this->subsequentcardPaymentMethodSpecificInput !== null) {
            $object->subsequentcardPaymentMethodSpecificInput = $this->subsequentcardPaymentMethodSpecificInput->toObject();
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
        if (property_exists($object, 'order')) {
            if (!is_object($object->order)) {
                throw new UnexpectedValueException('value \'' . print_r($object->order, true) . '\' is not an object');
            }
            $value = new Order();
            $this->order = $value->fromObject($object->order);
        }
        if (property_exists($object, 'subsequentcardPaymentMethodSpecificInput')) {
            if (!is_object($object->subsequentcardPaymentMethodSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->subsequentcardPaymentMethodSpecificInput, true) . '\' is not an object');
            }
            $value = new SubsequentCardPaymentMethodSpecificInput();
            $this->subsequentcardPaymentMethodSpecificInput = $value->fromObject($object->subsequentcardPaymentMethodSpecificInput);
        }
        return $this;
    }
}
