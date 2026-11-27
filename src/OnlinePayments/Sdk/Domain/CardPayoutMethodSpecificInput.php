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
     * @var string|null
     */
    public ?string $hostedFieldsSessionId = null;

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
     * @param Card|null $value
     * @return $this
     */
    public function withCard(?Card $value): static
    {
        $this->card = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostedFieldsSessionId(): ?string
    {
        return $this->hostedFieldsSessionId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedFieldsSessionId(?string $value): void
    {
        $this->hostedFieldsSessionId = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withHostedFieldsSessionId(?string $value): static
    {
        $this->hostedFieldsSessionId = $value;
        return $this;
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
     * @param int|null $value
     * @return $this
     */
    public function withPaymentProductId(?int $value): static
    {
        $this->paymentProductId = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withPayoutReason(?string $value): static
    {
        $this->payoutReason = $value;
        return $this;
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
     * @param string|null $value
     * @return $this
     */
    public function withToken(?string $value): static
    {
        $this->token = $value;
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
        if ($this->hostedFieldsSessionId !== null) {
            $object->hostedFieldsSessionId = $this->hostedFieldsSessionId;
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
        }
        if ($this->payoutReason !== null) {
            $object->payoutReason = $this->payoutReason;
        }
        if ($this->token !== null) {
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
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new Card();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'hostedFieldsSessionId')) {
            $this->hostedFieldsSessionId = $object->hostedFieldsSessionId;
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
