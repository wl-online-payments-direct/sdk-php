<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificOutputSummaryCard extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $cardNumber = null;

    /**
     * @return string|null
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * @param string|null $value
     */
    public function setCardNumber(?string $value): void
    {
        $this->cardNumber = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cardNumber)) {
            $object->cardNumber = $this->cardNumber;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardPaymentMethodSpecificOutputSummaryCard
    {
        parent::fromObject($object);
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        return $this;
    }
}
