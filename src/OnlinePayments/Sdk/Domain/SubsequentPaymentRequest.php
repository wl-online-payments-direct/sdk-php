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
     * @var OmnichannelSubsequentSpecificInput|null
     */
    public ?OmnichannelSubsequentSpecificInput $omnichannelSubsequentSpecificInput = null;

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
     * @return OmnichannelSubsequentSpecificInput|null
     */
    public function getOmnichannelSubsequentSpecificInput(): ?OmnichannelSubsequentSpecificInput
    {
        return $this->omnichannelSubsequentSpecificInput;
    }

    /**
     * @param OmnichannelSubsequentSpecificInput|null $value
     */
    public function setOmnichannelSubsequentSpecificInput(?OmnichannelSubsequentSpecificInput $value): void
    {
        $this->omnichannelSubsequentSpecificInput = $value;
    }

    /**
     * @param OmnichannelSubsequentSpecificInput|null $value
     * @return $this
     */
    public function withOmnichannelSubsequentSpecificInput(?OmnichannelSubsequentSpecificInput $value): static
    {
        $this->omnichannelSubsequentSpecificInput = $value;
        return $this;
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
     * @param Order|null $value
     * @return $this
     */
    public function withOrder(?Order $value): static
    {
        $this->order = $value;
        return $this;
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
     * @param SubsequentPaymentProduct5001SpecificInput|null $value
     * @return $this
     */
    public function withSubsequentPaymentProduct5001SpecificInput(?SubsequentPaymentProduct5001SpecificInput $value): static
    {
        $this->subsequentPaymentProduct5001SpecificInput = $value;
        return $this;
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
     * @param SubsequentCardPaymentMethodSpecificInput|null $value
     * @return $this
     */
    public function withSubsequentcardPaymentMethodSpecificInput(?SubsequentCardPaymentMethodSpecificInput $value): static
    {
        $this->subsequentcardPaymentMethodSpecificInput = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->omnichannelSubsequentSpecificInput !== null) {
            $object->omnichannelSubsequentSpecificInput = $this->omnichannelSubsequentSpecificInput->toObject();
        }
        if ($this->order !== null) {
            $object->order = $this->order->toObject();
        }
        if ($this->subsequentPaymentProduct5001SpecificInput !== null) {
            $object->subsequentPaymentProduct5001SpecificInput = $this->subsequentPaymentProduct5001SpecificInput->toObject();
        }
        if ($this->subsequentcardPaymentMethodSpecificInput !== null) {
            $object->subsequentcardPaymentMethodSpecificInput = $this->subsequentcardPaymentMethodSpecificInput->toObject();
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
        if (property_exists($object, 'omnichannelSubsequentSpecificInput')) {
            if (!is_object($object->omnichannelSubsequentSpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->omnichannelSubsequentSpecificInput, true) . '\' is not an object');
            }
            $value = new OmnichannelSubsequentSpecificInput();
            $this->omnichannelSubsequentSpecificInput = $value->fromObject($object->omnichannelSubsequentSpecificInput);
        }
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
