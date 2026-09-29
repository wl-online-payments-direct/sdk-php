<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct3116SpecificInput extends DataObject
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
     * @param bool|null $value
     * @return RedirectPaymentProduct3116SpecificInput
    */
    public function withCompleteRemainingPaymentAmount(?bool $value): RedirectPaymentProduct3116SpecificInput
    {
        $this->completeRemainingPaymentAmount = $value;
        return $this;
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): RedirectPaymentProduct3116SpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'completeRemainingPaymentAmount')) {
            $this->completeRemainingPaymentAmount = $object->completeRemainingPaymentAmount;
        }
        return $this;
    }
}
