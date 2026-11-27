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
     * @var CreditCardValidationRules|null
     */
    public ?CreditCardValidationRules $ValidationRules = null;

    /**
     * @var int[]|null
     */
    public ?array $paymentProductPreferredOrder = null;

    /**
     * @return CreditCardValidationRules|null
     */
    public function getValidationRules(): ?CreditCardValidationRules
    {
        return $this->ValidationRules;
    }

    /**
     * @param CreditCardValidationRules|null $value
     */
    public function setValidationRules(?CreditCardValidationRules $value): void
    {
        $this->ValidationRules = $value;
    }

    /**
     * @param CreditCardValidationRules|null $value
     * @return $this
     */
    public function withValidationRules(?CreditCardValidationRules $value): static
    {
        $this->ValidationRules = $value;
        return $this;
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
     * @param int[]|null $value
     * @return $this
     */
    public function withPaymentProductPreferredOrder(?array $value): static
    {
        $this->paymentProductPreferredOrder = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
    {
        parent::fromObject($object);
        if (property_exists($object, 'ValidationRules')) {
            if (!is_object($object->ValidationRules)) {
                throw new UnexpectedValueException('value \'' . print_r($object->ValidationRules, true) . '\' is not an object');
            }
            $value = new CreditCardValidationRules();
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
