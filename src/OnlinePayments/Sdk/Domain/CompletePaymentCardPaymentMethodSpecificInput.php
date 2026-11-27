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
     * @param CardWithoutCvv|null $value
     * @return $this
     */
    public function withCard(?CardWithoutCvv $value): static
    {
        $this->card = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->card !== null) {
            $object->card = $this->card->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
