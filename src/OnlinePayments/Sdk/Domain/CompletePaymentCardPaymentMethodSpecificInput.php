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
     * @var CardWithoutCvv|null
     */
    public ?CardWithoutCvv $card = null;

    /**
     * @return CardWithoutCvv|null
     */
    public function getCard(): ?CardWithoutCvv
    {
        return $this->card;
    }

    /**
     * @param CardWithoutCvv|null $value
     */
    public function setCard(?CardWithoutCvv $value): void
    {
        $this->card = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
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
    public function fromObject(object $object): CompletePaymentCardPaymentMethodSpecificInput
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
