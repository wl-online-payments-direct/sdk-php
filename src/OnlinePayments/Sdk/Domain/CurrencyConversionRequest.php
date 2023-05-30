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
     * @var CardInfo
     */
    private $card;

    /**
     * @var Transaction
     */
    private $transaction;

    // Methods
    /**
     * @return CardInfo
     */
    public function getCard()
    {
        return $this->card;
    }
    /**
     * @var CardInfo
     */
    public function setCard($value)
    {
        $this->card = $value;
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
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
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
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new CardInfo();
            $this->card = $value->fromObject($object->card);
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
