<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct3209SpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $buyerCompliantBankMessage = null;

    /**
     * @return string
     */
    public function getBuyerCompliantBankMessage()
    {
        return $this->buyerCompliantBankMessage;
    }

    /**
     * @param string
     */
    public function setBuyerCompliantBankMessage($value)
    {
        $this->buyerCompliantBankMessage = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->buyerCompliantBankMessage)) {
            $object->buyerCompliantBankMessage = $this->buyerCompliantBankMessage;
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
        if (property_exists($object, 'buyerCompliantBankMessage')) {
            $this->buyerCompliantBankMessage = $object->buyerCompliantBankMessage;
        }
        return $this;
    }
}
