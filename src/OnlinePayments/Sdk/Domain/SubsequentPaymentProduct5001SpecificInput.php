<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class SubsequentPaymentProduct5001SpecificInput extends DataObject
{
    /**
     * @var string|null
    */
    public ?string $subsequentType = null;

    /**
     * @return string|null
    */
    public function getSubsequentType(): ?string
    {
        return $this->subsequentType;
    }

    /**
     * @param string|null $value
    */
    public function setSubsequentType(?string $value): void
    {
        $this->subsequentType = $value;
    }

    /**
     * @param string|null $value
     * @return SubsequentPaymentProduct5001SpecificInput
    */
    public function withSubsequentType(?string $value): SubsequentPaymentProduct5001SpecificInput
    {
        $this->subsequentType = $value;
        return $this;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->subsequentType)) {
            $object->subsequentType = $this->subsequentType;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): SubsequentPaymentProduct5001SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'subsequentType')) {
            $this->subsequentType = $object->subsequentType;
        }
        return $this;
    }
}
