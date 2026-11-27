<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class TokenResponse extends DataObject
{
    /**
     * @var TokenCard|null
     */
    public ?TokenCard $card = null;

    /**
     * @var CrmToken|null
     */
    public ?CrmToken $crmToken = null;

    /**
     * @var TokenEWallet|null
     */
    public ?TokenEWallet $eWallet = null;

    /**
     * @var ExternalTokenLinked|null
     */
    public ?ExternalTokenLinked $externalTokenLinked = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var bool|null
     */
    public ?bool $isTemporary = null;

    /**
     * @var NetworkTokenLinked|null
     */
    public ?NetworkTokenLinked $networkTokenLinked = null;

    /**
     * @var int|null
     */
    public ?int $paymentProductId = null;

    /**
     * @return TokenCard|null
     */
    public function getCard(): ?TokenCard
    {
        return $this->card;
    }

    /**
     * @param TokenCard|null $value
     */
    public function setCard(?TokenCard $value): void
    {
        $this->card = $value;
    }

    /**
     * @param TokenCard|null $value
     * @return $this
     */
    public function withCard(?TokenCard $value): static
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
     * @return TokenEWallet|null
     */
    public function getEWallet(): ?TokenEWallet
    {
        return $this->eWallet;
    }

    /**
     * @param TokenEWallet|null $value
     */
    public function setEWallet(?TokenEWallet $value): void
    {
        $this->eWallet = $value;
    }

    /**
     * @param TokenEWallet|null $value
     * @return $this
     */
    public function withEWallet(?TokenEWallet $value): static
    {
        $this->eWallet = $value;
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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $value
     */
    public function setId(?string $value): void
    {
        $this->id = $value;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function withId(?string $value): static
    {
        $this->id = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsTemporary(): ?bool
    {
        return $this->isTemporary;
    }

    /**
     * @param bool|null $value
     */
    public function setIsTemporary(?bool $value): void
    {
        $this->isTemporary = $value;
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function withIsTemporary(?bool $value): static
    {
        $this->isTemporary = $value;
        return $this;
    }

    /**
     * @return NetworkTokenLinked|null
     */
    public function getNetworkTokenLinked(): ?NetworkTokenLinked
    {
        return $this->networkTokenLinked;
    }

    /**
     * @param NetworkTokenLinked|null $value
     */
    public function setNetworkTokenLinked(?NetworkTokenLinked $value): void
    {
        $this->networkTokenLinked = $value;
    }

    /**
     * @param NetworkTokenLinked|null $value
     * @return $this
     */
    public function withNetworkTokenLinked(?NetworkTokenLinked $value): static
    {
        $this->networkTokenLinked = $value;
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
        if ($this->eWallet !== null) {
            $object->eWallet = $this->eWallet->toObject();
        }
        if ($this->externalTokenLinked !== null) {
            $object->externalTokenLinked = $this->externalTokenLinked->toObject();
        }
        if ($this->id !== null) {
            $object->id = $this->id;
        }
        if ($this->isTemporary !== null) {
            $object->isTemporary = $this->isTemporary;
        }
        if ($this->networkTokenLinked !== null) {
            $object->networkTokenLinked = $this->networkTokenLinked->toObject();
        }
        if ($this->paymentProductId !== null) {
            $object->paymentProductId = $this->paymentProductId;
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
            $value = new TokenCard();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'crmToken')) {
            if (!is_object($object->crmToken)) {
                throw new UnexpectedValueException('value \'' . print_r($object->crmToken, true) . '\' is not an object');
            }
            $value = new CrmToken();
            $this->crmToken = $value->fromObject($object->crmToken);
        }
        if (property_exists($object, 'eWallet')) {
            if (!is_object($object->eWallet)) {
                throw new UnexpectedValueException('value \'' . print_r($object->eWallet, true) . '\' is not an object');
            }
            $value = new TokenEWallet();
            $this->eWallet = $value->fromObject($object->eWallet);
        }
        if (property_exists($object, 'externalTokenLinked')) {
            if (!is_object($object->externalTokenLinked)) {
                throw new UnexpectedValueException('value \'' . print_r($object->externalTokenLinked, true) . '\' is not an object');
            }
            $value = new ExternalTokenLinked();
            $this->externalTokenLinked = $value->fromObject($object->externalTokenLinked);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'isTemporary')) {
            $this->isTemporary = $object->isTemporary;
        }
        if (property_exists($object, 'networkTokenLinked')) {
            if (!is_object($object->networkTokenLinked)) {
                throw new UnexpectedValueException('value \'' . print_r($object->networkTokenLinked, true) . '\' is not an object');
            }
            $value = new NetworkTokenLinked();
            $this->networkTokenLinked = $value->fromObject($object->networkTokenLinked);
        }
        if (property_exists($object, 'paymentProductId')) {
            $this->paymentProductId = $object->paymentProductId;
        }
        return $this;
    }
}
