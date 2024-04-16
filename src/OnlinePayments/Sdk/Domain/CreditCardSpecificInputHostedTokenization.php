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

    /**
     * @var int[]
     */
    private $paymentProductPreferredOrder;

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
     * @return int[]
     */
    public function getPaymentProductPreferredOrder()
    {
        return $this->paymentProductPreferredOrder;
    }
    /**
     * @var int[]
     */
    public function setPaymentProductPreferredOrder($value)
    {
        $this->paymentProductPreferredOrder = $value;
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
        if ($this->paymentProductPreferredOrder !== null) {
            $object->paymentProductPreferredOrder = [];
            foreach ($this->paymentProductPreferredOrder as $element) {
                if ($element !== null) {
                    $object->paymentProductPreferredOrder[] = $element;
                }
            }
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
        if (property_exists($object, 'paymentProductPreferredOrder')) {
            if (!is_array($object->paymentProductPreferredOrder) && !is_object($object->paymentProductPreferredOrder)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProductPreferredOrder, true) . '\' is not an array or object');
            }
            $this->paymentProductPreferredOrder = [];
            foreach ($object->paymentProductPreferredOrder as $element) {
                $this->paymentProductPreferredOrder[] = $element;
            }
        }
        return $this;
    }
}
