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
     * @var CompletePaymentCardPaymentMethodSpecificInput|null
     */
    public ?CompletePaymentCardPaymentMethodSpecificInput $cardPaymentMethodSpecificInput = null;

    /**
     * @var Order|null
     */
    public ?Order $order = null;

    /**
     * @return CompletePaymentCardPaymentMethodSpecificInput|null
     */
    public function getCardPaymentMethodSpecificInput(): ?CompletePaymentCardPaymentMethodSpecificInput
    {
        return $this->cardPaymentMethodSpecificInput;
    }

    /**
     * @param CompletePaymentCardPaymentMethodSpecificInput|null $value
     */
    public function setCardPaymentMethodSpecificInput(?CompletePaymentCardPaymentMethodSpecificInput $value): void
    {
        $this->cardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * @param Order|null $value
     */
    public function setOrder(?Order $value): void
    {
        $this->order = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): CompletePaymentRequest
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
