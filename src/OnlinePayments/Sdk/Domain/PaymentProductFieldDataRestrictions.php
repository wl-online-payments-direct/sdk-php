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
     * @param bool|null $value
     * @return $this
     */
    public function withIsRequired(?bool $value): static
    {
        $this->isRequired = $value;
        return $this;
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
     * @param PaymentProductFieldValidators|null $value
     * @return $this
     */
    public function withValidators(?PaymentProductFieldValidators $value): static
    {
        $this->validators = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
    {
        $object = parent::toObject();
        if ($this->isRequired !== null) {
            $object->isRequired = $this->isRequired;
        }
        if ($this->validators !== null) {
            $object->validators = $this->validators->toObject();
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
