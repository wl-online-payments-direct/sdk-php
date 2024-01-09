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
class CreditCardSpecificInputHostedTokenization extends DataObject
{
    // Properties
    /**
     * @var CreditCardValidationRulesHostedTokenization
     */
    private $ValidationRules;

    // Methods
    /**
     * @return CreditCardValidationRulesHostedTokenization
     */
    public function getValidationRules()
    {
        return $this->ValidationRules;
    }
    /**
     * @var CreditCardValidationRulesHostedTokenization
     */
    public function setValidationRules($value)
    {
        $this->ValidationRules = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->ValidationRules !== null) {
            $object->ValidationRules = $this->ValidationRules->toObject();
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
        if (property_exists($object, 'ValidationRules')) {
            if (!is_object($object->ValidationRules)) {
                throw new UnexpectedValueException('value \'' . print_r($object->ValidationRules, true) . '\' is not an object');
            }
            $value = new CreditCardValidationRulesHostedTokenization();
            $this->ValidationRules = $value->fromObject($object->ValidationRules);
        }
        return $this;
    }
}
