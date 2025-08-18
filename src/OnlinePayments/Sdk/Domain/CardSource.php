<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CardSource extends DataObject
{
    /**
     * @var SurchargeCalculationCard|null
     */
    public ?SurchargeCalculationCard $card = null;

    /**
     * @var string|null
     */
    public ?string $encryptedCustomerInput = null;

    /**
     * @var string|null
     */
    public ?string $hostedTokenizationId = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @return SurchargeCalculationCard|null
     */
    public function getCard(): ?SurchargeCalculationCard
    {
        return $this->card;
    }

    /**
     * @param SurchargeCalculationCard|null $value
     */
    public function setCard(?SurchargeCalculationCard $value): void
    {
        $this->card = $value;
    }

    /**
     * @return string|null
     */
    public function getEncryptedCustomerInput(): ?string
    {
        return $this->encryptedCustomerInput;
    }

    /**
     * @param string|null $value
     */
    public function setEncryptedCustomerInput(?string $value): void
    {
        $this->encryptedCustomerInput = $value;
    }

    /**
     * @return string|null
     */
    public function getHostedTokenizationId(): ?string
    {
        return $this->hostedTokenizationId;
    }

    /**
     * @param string|null $value
     */
    public function setHostedTokenizationId(?string $value): void
    {
        $this->hostedTokenizationId = $value;
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
        if (!is_null($this->encryptedCustomerInput)) {
            $object->encryptedCustomerInput = $this->encryptedCustomerInput;
        }
        if (!is_null($this->hostedTokenizationId)) {
            $object->hostedTokenizationId = $this->hostedTokenizationId;
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
    public function fromObject(object $object): CardSource
    {
        parent::fromObject($object);
        if (property_exists($object, 'card')) {
            if (!is_object($object->card)) {
                throw new UnexpectedValueException('value \'' . print_r($object->card, true) . '\' is not an object');
            }
            $value = new SurchargeCalculationCard();
            $this->card = $value->fromObject($object->card);
        }
        if (property_exists($object, 'encryptedCustomerInput')) {
            $this->encryptedCustomerInput = $object->encryptedCustomerInput;
        }
        if (property_exists($object, 'hostedTokenizationId')) {
            $this->hostedTokenizationId = $object->hostedTokenizationId;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
