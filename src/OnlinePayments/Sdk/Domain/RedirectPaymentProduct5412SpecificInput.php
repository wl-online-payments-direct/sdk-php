<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5412SpecificInput extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $adjustableAmount = null;

    /**
     * @return bool|null
     */
    public function getAdjustableAmount(): ?bool
    {
        return $this->adjustableAmount;
    }

    /**
     * @param bool|null $value
     */
    public function setAdjustableAmount(?bool $value): void
    {
        $this->adjustableAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->adjustableAmount)) {
            $object->adjustableAmount = $this->adjustableAmount;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct5412SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'adjustableAmount')) {
            $this->adjustableAmount = $object->adjustableAmount;
        }
        return $this;
    }
}
