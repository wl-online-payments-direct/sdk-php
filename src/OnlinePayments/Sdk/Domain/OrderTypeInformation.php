<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class OrderTypeInformation extends DataObject
{
    /**
     * @var string
     */
    public $purchaseType = null;

    /**
     * @var string
     */
    public $transactionType = null;

    /**
     * @return string
     */
    public function getPurchaseType()
    {
        return $this->purchaseType;
    }

    /**
     * @param string
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
     * @param string
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
        if (!is_null($this->purchaseType)) {
            $object->purchaseType = $this->purchaseType;
        }
        if (!is_null($this->transactionType)) {
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
