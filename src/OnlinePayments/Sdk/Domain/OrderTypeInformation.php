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
class OrderTypeInformation extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $purchaseType;

    /**
     * @var string
     */
    private $transactionType;

    // Methods
    /**
     * @return string
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }
    /**
     * @var string
     */
    public function setPurchaseType($value)
    {
        $this->purchaseType = $value;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }
    /**
     * @var string
     */
    public function setTransactionType($value)
    {
        $this->transactionType = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->purchaseType !== null) {
            $object->purchaseType = $this->purchaseType;
        }
        if ($this->transactionType !== null) {
            $object->transactionType = $this->transactionType;
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
        if (property_exists($object, 'purchaseType')) {
            $this->purchaseType = $object->purchaseType;
        }
        if (property_exists($object, 'transactionType')) {
            $this->transactionType = $object->transactionType;
        }
        return $this;
    }
}
