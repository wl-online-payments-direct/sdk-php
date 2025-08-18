<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubsequentPaymentRequest extends DataObject
{
    /**
     * @var Order|null
     */
    public ?Order $order = null;

    /**
     * @var SubsequentPaymentProduct5001SpecificInput|null
     */
    public ?SubsequentPaymentProduct5001SpecificInput $subsequentPaymentProduct5001SpecificInput = null;

    /**
     * @var SubsequentCardPaymentMethodSpecificInput|null
     */
    public ?SubsequentCardPaymentMethodSpecificInput $subsequentcardPaymentMethodSpecificInput = null;

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
     * @return SubsequentPaymentProduct5001SpecificInput|null
     */
    public function getSubsequentPaymentProduct5001SpecificInput(): ?SubsequentPaymentProduct5001SpecificInput
    {
        return $this->subsequentPaymentProduct5001SpecificInput;
    }

    /**
     * @param SubsequentPaymentProduct5001SpecificInput|null $value
     */
    public function setSubsequentPaymentProduct5001SpecificInput(?SubsequentPaymentProduct5001SpecificInput $value): void
    {
        $this->subsequentPaymentProduct5001SpecificInput = $value;
    }

    /**
     * @return SubsequentCardPaymentMethodSpecificInput|null
     */
    public function getSubsequentcardPaymentMethodSpecificInput(): ?SubsequentCardPaymentMethodSpecificInput
    {
        return $this->subsequentcardPaymentMethodSpecificInput;
    }

    /**
     * @param SubsequentCardPaymentMethodSpecificInput|null $value
     */
    public function setSubsequentcardPaymentMethodSpecificInput(?SubsequentCardPaymentMethodSpecificInput $value): void
    {
        $this->subsequentcardPaymentMethodSpecificInput = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->order)) {
            $object->order = $this->order->toObject();
        }
        if (!is_null($this->subsequentPaymentProduct5001SpecificInput)) {
            $object->subsequentPaymentProduct5001SpecificInput = $this->subsequentPaymentProduct5001SpecificInput->toObject();
        }
        if (!is_null($this->subsequentcardPaymentMethodSpecificInput)) {
            $object->subsequentcardPaymentMethodSpecificInput = $this->subsequentcardPaymentMethodSpecificInput->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubsequentPaymentRequest
    {
        parent::fromObject($object);
        if (property_exists($object, 'order')) {
            if (!is_object($object->order)) {
                throw new UnexpectedValueException('value \'' . print_r($object->order, true) . '\' is not an object');
            }
            $value = new Order();
            $this->order = $value->fromObject($object->order);
        }
        if (property_exists($object, 'subsequentPaymentProduct5001SpecificInput')) {
            if (!is_object($object->subsequentPaymentProduct5001SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->subsequentPaymentProduct5001SpecificInput, true) . '\' is not an object');
            }
            $value = new SubsequentPaymentProduct5001SpecificInput();
            $this->subsequentPaymentProduct5001SpecificInput = $value->fromObject($object->subsequentPaymentProduct5001SpecificInput);
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
