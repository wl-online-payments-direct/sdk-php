<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreditCardValidationRulesHostedTokenization extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $cvvMandatoryForExistingToken = null;

    /**
     * @var bool|null
     */
    public ?bool $cvvMandatoryForNewToken = null;

    /**
     * @return bool|null
     */
    public function getCvvMandatoryForExistingToken(): ?bool
    {
        return $this->cvvMandatoryForExistingToken;
    }

    /**
     * @param bool|null $value
     */
    public function setCvvMandatoryForExistingToken(?bool $value): void
    {
        $this->cvvMandatoryForExistingToken = $value;
    }

    /**
     * @return bool|null
     */
    public function getCvvMandatoryForNewToken(): ?bool
    {
        return $this->cvvMandatoryForNewToken;
    }

    /**
     * @param bool|null $value
     */
    public function setCvvMandatoryForNewToken(?bool $value): void
    {
        $this->cvvMandatoryForNewToken = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->cvvMandatoryForExistingToken)) {
            $object->cvvMandatoryForExistingToken = $this->cvvMandatoryForExistingToken;
        }
        if (!is_null($this->cvvMandatoryForNewToken)) {
            $object->cvvMandatoryForNewToken = $this->cvvMandatoryForNewToken;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): CreditCardValidationRulesHostedTokenization
    {
        parent::fromObject($object);
        if (property_exists($object, 'cvvMandatoryForExistingToken')) {
            $this->cvvMandatoryForExistingToken = $object->cvvMandatoryForExistingToken;
        }
        if (property_exists($object, 'cvvMandatoryForNewToken')) {
            $this->cvvMandatoryForNewToken = $object->cvvMandatoryForNewToken;
        }
        return $this;
    }
}
