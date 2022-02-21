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
class PaymentProductFieldDataRestrictions extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $isRequired;

    /**
     * @var PaymentProductFieldValidators
     */
    private $validators;

    // Methods
    /**
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }
    /**
     * @var bool
     */
    public function setIsRequired($value)
    {
        $this->isRequired = $value;
    }

    /**
     * @return PaymentProductFieldValidators
     */
    public function getValidators()
    {
        return $this->validators;
    }
    /**
     * @var PaymentProductFieldValidators
     */
    public function setValidators($value)
    {
        $this->validators = $value;
    }

    /**
     * @return object
     */
    public function toObject()
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
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
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
