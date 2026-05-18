<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFieldDataRestrictions extends DataObject
{
    /**
     * @var bool|null
     */
    public ?bool $isRequired = null;

    /**
     * @var PaymentProductFieldValidators|null
     */
    public ?PaymentProductFieldValidators $validators = null;

    /**
     * @return bool|null
     */
    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    /**
     * @param bool|null $value
     */
    public function setIsRequired(?bool $value): void
    {
        $this->isRequired = $value;
    }

    /**
     * @return PaymentProductFieldValidators|null
     */
    public function getValidators(): ?PaymentProductFieldValidators
    {
        return $this->validators;
    }

    /**
     * @param PaymentProductFieldValidators|null $value
     */
    public function setValidators(?PaymentProductFieldValidators $value): void
    {
        $this->validators = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->isRequired)) {
            $object->isRequired = $this->isRequired;
        }
        if (!is_null($this->validators)) {
            $object->validators = $this->validators->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject(object $object): PaymentProductFieldDataRestrictions
    {
        parent::fromObject($object);
        if (property_exists($object, 'isRequired')) {
            $this->isRequired = $object->isRequired;
        }
        if (property_exists($object, 'validators')) {
            if (!is_object($object->validators)) {
                throw new UnexpectedValueException('value \'' . print_r($object->validators, true) . '\' is not an object');
            }
            $value = new PaymentProductFieldValidators();
            $this->validators = $value->fromObject($object->validators);
        }
        return $this;
    }
}
