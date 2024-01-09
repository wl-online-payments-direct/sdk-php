<?php
/*
 * This class was auto-generated.
 */

namespace OnlinePayments\Sdk\Domain;

use OnlinePayments\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreditCardValidationRulesHostedTokenization extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $cvvMandatoryForExistingToken;

    /**
     * @var bool
     */
    private $cvvMandatoryForNewToken;

    // Methods
    /**
     * @return bool
     */
    public function getCvvMandatoryForExistingToken()
    {
        return $this->cvvMandatoryForExistingToken;
    }
    /**
     * @var bool
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
     * @var bool
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
        if ($this->cvvMandatoryForExistingToken !== null) {
            $object->cvvMandatoryForExistingToken = $this->cvvMandatoryForExistingToken;
        }
        if ($this->cvvMandatoryForNewToken !== null) {
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
