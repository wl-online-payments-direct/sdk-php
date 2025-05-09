<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CompletePaymentCardPaymentMethodSpecificInput extends DataObject
{
    /**
     * @var CardWithoutCvv
     */
    public $card = null;

    /**
     * @return CardWithoutCvv
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param CardWithoutCvv
     */
    public function setCard($value)
    {
        $this->card = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->card)) {
            $object->card = $this->card->toObject();
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
            $value = new CardWithoutCvv();
            $this->card = $value->fromObject($object->card);
        }
        return $this;
    }
}
