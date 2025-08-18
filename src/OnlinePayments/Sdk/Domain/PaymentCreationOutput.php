<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentCreationOutput extends DataObject
{
    /**
     * @var string|null
     */
    public ?string $externalReference = null;

    /**
     * @var bool|null
     */
    public ?bool $isNewToken = null;

    /**
     * @var string|null
     */
    public ?string $token = null;

    /**
     * @var bool|null
     */
    public ?bool $tokenizationSucceeded = null;

    /**
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    /**
     * @param string|null $value
     */
    public function setExternalReference(?string $value): void
    {
        $this->externalReference = $value;
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
     * @return bool|null
     */
    public function getTokenizationSucceeded(): ?bool
    {
        return $this->tokenizationSucceeded;
    }

    /**
     * @param bool|null $value
     */
    public function setTokenizationSucceeded(?bool $value): void
    {
        $this->tokenizationSucceeded = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->externalReference)) {
            $object->externalReference = $this->externalReference;
        }
        if (!is_null($this->isNewToken)) {
            $object->isNewToken = $this->isNewToken;
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        if (!is_null($this->tokenizationSucceeded)) {
            $object->tokenizationSucceeded = $this->tokenizationSucceeded;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentCreationOutput
    {
        parent::fromObject($object);
        if (property_exists($object, 'externalReference')) {
            $this->externalReference = $object->externalReference;
        }
        if (property_exists($object, 'isNewToken')) {
            $this->isNewToken = $object->isNewToken;
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        if (property_exists($object, 'tokenizationSucceeded')) {
            $this->tokenizationSucceeded = $object->tokenizationSucceeded;
        }
        return $this;
    }
}
