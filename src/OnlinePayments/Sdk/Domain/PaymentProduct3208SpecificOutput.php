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
class PaymentProduct3208SpecificOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $buyerCompliantBankMessage;

    // Methods
    /**
     * @return string
     */
    public function getBuyerCompliantBankMessage()
    {
        return $this->buyerCompliantBankMessage;
    }
    /**
     * @var string
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
        if ($this->buyerCompliantBankMessage !== null) {
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
