<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPaymentMethodSpecificOutputSummary extends DataObject
{
    /**
     * @var CardPaymentMethodSpecificOutputSummaryCard|null
     */
    public ?CardPaymentMethodSpecificOutputSummaryCard $card = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @return CardPaymentMethodSpecificOutputSummaryCard|null
     */
    public function getCard(): ?CardPaymentMethodSpecificOutputSummaryCard
    {
        return $this->card;
    }

    /**
     * @param CardPaymentMethodSpecificOutputSummaryCard|null $value
     */
    public function setCard(?CardPaymentMethodSpecificOutputSummaryCard $value): void
    {
        $this->card = $value;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string|null $value
     */
    public function setToken(?string $value): void
    {
        $this->token = $value;
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
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        return $object;
    }

    /**
     * @param object $object
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardPaymentMethodSpecificOutputSummary
    {
        parent::fromObject($object);
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new CardPaymentMethodSpecificOutputSummaryCard();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
