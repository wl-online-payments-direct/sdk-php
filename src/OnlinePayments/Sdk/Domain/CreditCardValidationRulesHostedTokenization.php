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
     * @var bool
     */
    public $cvvMandatoryForExistingToken = null;

    /**
     * @var bool
     */
    public $cvvMandatoryForNewToken = null;

    /**
     * @return bool
     */
    public function getCvvMandatoryForExistingToken()
    {
        return $this->cvvMandatoryForExistingToken;
    }

    /**
     * @param bool
     */
    public function setCvvMandatoryForExistingToken($value)
    {
        $this->cvvMandatoryForExistingToken = $value;
    }

    /**
     * @return bool
     */
    public function getCvvMandatoryForNewToken()
    {
        return $this->cvvMandatoryForNewToken;
    }

    /**
     * @param bool
     */
    public function setCvvMandatoryForNewToken($value)
    {
        $this->cvvMandatoryForNewToken = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
    public function fromObject($object)
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
