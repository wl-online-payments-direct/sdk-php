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
     * @var CrmToken|null
     */
    public ?CrmToken $crmToken = null;

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
     * @param CardWithoutCvv|null $value
     * @return $this
     */
    public function withCard(?CardWithoutCvv $value): static
    {
        $this->card = $value;
        return $this;
    }

    /**
     * @return CrmToken|null
     */
    public function getCrmToken(): ?CrmToken
    {
        return $this->crmToken;
    }

    /**
     * @param CrmToken|null $value
     */
    public function setCrmToken(?CrmToken $value): void
    {
        $this->crmToken = $value;
    }

    /**
     * @param CrmToken|null $value
     * @return $this
     */
    public function withCrmToken(?CrmToken $value): static
    {
        $this->crmToken = $value;
        return $this;
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
     * @param ExternalTokenLinked|null $value
     * @return $this
     */
    public function withExternalTokenLinked(?ExternalTokenLinked $value): static
    {
        $this->externalTokenLinked = $value;
        return $this;
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
     * @param bool|null $value
     * @return $this
     */
    public function withIsNewToken(?bool $value): static
    {
        $this->isNewToken = $value;
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
     * @param string|null $value
     * @return $this
     */
    public function withTokenStatus(?string $value): static
    {
        $this->tokenStatus = $value;
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
        if ($this->crmToken !== null) {
            $object->crmToken = $this->crmToken->toObject();
        }
        if ($this->externalTokenLinked !== null) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if ($this->isNewToken !== null) {
            $object->isNewToken = $this->isNewToken;
        }
        if ($this->token !== null) {
            $object->token = $this->token;
        }
        if ($this->tokenStatus !== null) {
            $object->tokenStatus = $this->tokenStatus;
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
        if (property_exists($object, 'crmToken')) {
            if (!is_object($object->crmToken)) {
                throw new UnexpectedValueException('value \'' . print_r($object->crmToken, true) . '\' is not an object');
            }
            $value = new CrmToken();
            $this->crmToken = $value->fromObject($object->crmToken);
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
