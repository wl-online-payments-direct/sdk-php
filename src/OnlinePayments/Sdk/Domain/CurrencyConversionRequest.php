<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CurrencyConversionRequest extends DataObject
{
    /**
     * @var DccCardSource|null
     */
    public ?DccCardSource $cardSource = null;

    /**
     * @var Transaction|null
     */
    public ?Transaction $transaction = null;

    /**
     * @return DccCardSource|null
     */
    public function getCardSource(): ?DccCardSource
    {
        return $this->cardSource;
    }

    /**
     * @param DccCardSource|null $value
     */
    public function setCardSource(?DccCardSource $value): void
    {
        $this->cardSource = $value;
    }

    /**
     * @return Transaction|null
     */
    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    /**
     * @param Transaction|null $value
     */
    public function setTransaction(?Transaction $value): void
    {
        $this->transaction = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardSource)) {
            $object->cardSource = $this->cardSource->toObject();
        }
        if (!is_null($this->transaction)) {
            $object->transaction = $this->transaction->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CurrencyConversionRequest
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
