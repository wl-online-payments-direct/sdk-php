<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardPayoutMethodSpecificInput extends DataObject
{
    /**
     * @var Card|null
     */
    public ?Card $card = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @var string|null
     */
    public ?string $payoutReason = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * @param Card|null $value
     */
    public function setCard(?Card $value): void
    {
        $this->card = $value;
    }

    /**
     * @return int|null
     */
    public function getPaymentProductId(): ?int
    {
        return $this->paymentProductId;
    }

    /**
     * @param int|null $value
     */
    public function setPaymentProductId(?int $value): void
    {
        $this->paymentProductId = $value;
    }

    /**
     * @return string|null
     */
    public function getPayoutReason(): ?string
    {
        return $this->payoutReason;
    }

    /**
     * @param string|null $value
     */
    public function setPayoutReason(?string $value): void
    {
        $this->payoutReason = $value;
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
        if (!is_null($this->paymentProductId)) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if (!is_null($this->payoutReason)) {
            $object->payoutReason = $this->payoutReason;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CardPayoutMethodSpecificInput
    {
        parent::fromObject($object);
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new Card();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        if (property_exists($object, 'payoutReason')) {
            $this->payoutReason = $object->payoutReason;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
