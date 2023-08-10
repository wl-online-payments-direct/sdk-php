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
class CurrencyConversionRequest extends DataObject
{
    // Properties
    /**
     * @var DccCardSource
     */
    private $cardSource;

    /**
     * @var Transaction
     */
    private $transaction;

    // Methods
    /**
     * @return DccCardSource
     */
    public function getCardSource()
    {
        return $this->cardSource;
    }
    /**
     * @var DccCardSource
     */
    public function setCardSource($value)
    {
        $this->cardSource = $value;
    }

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
    /**
     * @var Transaction
     */
    public function setTransaction($value)
    {
        $this->transaction = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->cardSource !== null) {
            $object->cardSource = $this->cardSource->toObject();
        }
        if ($this->transaction !== null) {
            $object->transaction = $this->transaction->toObject();
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
        if (property_exists($object, 'cardSource')) {
            if (!is_object($object->cardSource)) {
                throw new UnexpectedValueException('value \'' . print_r($object->cardSource, true) . '\' is not an object');
            }
            $value = new DccCardSource();
            $this->cardSource = $value->fromObject($object->cardSource);
        }
        if (property_exists($object, 'transaction')) {
            if (!is_object($object->transaction)) {
                throw new UnexpectedValueException('value \'' . print_r($object->transaction, true) . '\' is not an object');
            }
            $value = new Transaction();
            $this->transaction = $value->fromObject($object->transaction);
        }
        return $this;
    }
}
