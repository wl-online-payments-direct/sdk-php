<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreatedTokenResponse extends DataObject
{
    /**
     * @var CardWithoutCvv|null
     */
    public ?CardWithoutCvv $card = null;

    /**
     * @var ExternalTokenLinked|null
     */
    public ?ExternalTokenLinked $externalTokenLinked = null;

    /**
     * @var bool|null
     */
    public ?bool $isNewToken = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @var string|null
     */
    public ?string $tokenStatus = null;

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
     * @return ExternalTokenLinked|null
     */
    public function getExternalTokenLinked(): ?ExternalTokenLinked
    {
        return $this->externalTokenLinked;
    }

    /**
     * @param ExternalTokenLinked|null $value
     */
    public function setExternalTokenLinked(?ExternalTokenLinked $value): void
    {
        $this->externalTokenLinked = $value;
    }

    /**
     * @return bool|null
     */
    public function getIsNewToken(): ?bool
    {
        return $this->isNewToken;
    }

    /**
     * @param bool|null $value
     */
    public function setIsNewToken(?bool $value): void
    {
        $this->isNewToken = $value;
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
     * @return string|null
     */
    public function getTokenStatus(): ?string
    {
        return $this->tokenStatus;
    }

    /**
     * @param string|null $value
     */
    public function setTokenStatus(?string $value): void
    {
        $this->tokenStatus = $value;
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
        if (!is_null($this->externalTokenLinked)) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if (!is_null($this->isNewToken)) {
            $object->isNewToken = $this->isNewToken;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->tokenStatus)) {
            $object->tokenStatus = $this->tokenStatus;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreatedTokenResponse
    {
        parent::fromObject($object);
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new CardWithoutCvv();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'externalTokenLinked')) {
            if (!is_object($object->externalTokenLinked)) {
                throw new UnexpectedValueException('value \'' . print_r($object->externalTokenLinked, true) . '\' is not an object');
            }
            $value = new ExternalTokenLinked();
            $this->externalTokenLinked = $value->fromObject($object->externalTokenLinked);
        }
        if (property_exists($object, 'isNewToken')) {
            $this->isNewToken = $object->isNewToken;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenStatus')) {
            $this->tokenStatus = $object->tokenStatus;
        }
        return $this;
    }
}
