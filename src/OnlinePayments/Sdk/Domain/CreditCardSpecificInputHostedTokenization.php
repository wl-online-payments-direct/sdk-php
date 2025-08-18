<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CreditCardSpecificInputHostedTokenization extends DataObject
{
    /**
     * @var CreditCardValidationRulesHostedTokenization|null
     */
    public ?CreditCardValidationRulesHostedTokenization $ValidationRules = null;

    /**
     * @var int[]|null
     */
    public ?array $paymentProductPreferredOrder = null;

    /**
     * @return CreditCardValidationRulesHostedTokenization|null
     */
    public function getValidationRules(): ?CreditCardValidationRulesHostedTokenization
    {
        return $this->ValidationRules;
    }

    /**
     * @param CreditCardValidationRulesHostedTokenization|null $value
     */
    public function setValidationRules(?CreditCardValidationRulesHostedTokenization $value): void
    {
        $this->ValidationRules = $value;
    }

    /**
     * @return int[]|null
     */
    public function getPaymentProductPreferredOrder(): ?array
    {
        return $this->paymentProductPreferredOrder;
    }

    /**
     * @param int[]|null $value
     */
    public function setPaymentProductPreferredOrder(?array $value): void
    {
        $this->paymentProductPreferredOrder = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->ValidationRules)) {
            $object->ValidationRules = $this->ValidationRules->toObject();
        }
        if (!is_null($this->paymentProductPreferredOrder)) {
            $object->paymentProductPreferredOrder = [];
            foreach ($this->paymentProductPreferredOrder as $element) {
                if (!is_null($element)) {
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
    public function fromObject(object $object): CreditCardSpecificInputHostedTokenization
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
