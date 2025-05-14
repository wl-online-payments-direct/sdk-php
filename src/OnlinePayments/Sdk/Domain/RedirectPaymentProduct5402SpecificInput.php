<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class RedirectPaymentProduct5402SpecificInput extends DataObject
{
    /**
     * @var bool
     */
    public $completeRemainingPaymentAmount = null;

    /**
     * @return bool
     */
    public function getCompleteRemainingPaymentAmount()
    {
        return $this->completeRemainingPaymentAmount;
    }

    /**
     * @param bool
     */
    public function setCompleteRemainingPaymentAmount($value)
    {
        $this->completeRemainingPaymentAmount = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'completeRemainingPaymentAmount')) {
            $this->completeRemainingPaymentAmount = $object->completeRemainingPaymentAmount;
        }
        return $this;
    }
}
