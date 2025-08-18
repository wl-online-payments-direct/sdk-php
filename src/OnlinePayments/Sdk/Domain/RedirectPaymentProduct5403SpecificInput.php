<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5403SpecificInput extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $completeRemainingPaymentAmount = null;

    /**
     * @return bool|null
     */
    public function getCompleteRemainingPaymentAmount(): ?bool
    {
        return $this->completeRemainingPaymentAmount;
    }

    /**
     * @param bool|null $value
     */
    public function setCompleteRemainingPaymentAmount(?bool $value): void
    {
        $this->completeRemainingPaymentAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->completeRemainingPaymentAmount)) {
            $object->completeRemainingPaymentAmount = $this->completeRemainingPaymentAmount;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct5403SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'completeRemainingPaymentAmount')) {
            $this->completeRemainingPaymentAmount = $object->completeRemainingPaymentAmount;
        }
        return $this;
    }
}
