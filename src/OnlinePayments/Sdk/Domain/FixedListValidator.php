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
class FixedListValidator extends DataObject
{
    // Properties
    /**
     * @var string[]
     */
    private $allowedValues;

    // Methods
    /**
     * @return string[]
     */
    public function getAllowedValues()
    {
        return $this->allowedValues;
    }
    /**
     * @var string[]
     */
    public function setAllowedValues($value)
    {
        $this->allowedValues = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->allowedValues !== null) {
            $object->allowedValues = [];
            foreach ($this->allowedValues as $element) {
                if ($element !== null) {
                    $object->allowedValues[] = $element;
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
        if (property_exists($object, 'allowedValues')) {
            if (!is_array($object->allowedValues) && !is_object($object->allowedValues)) {
                throw new UnexpectedValueException('value \'' . print_r($object->allowedValues, true) . '\' is not an array or object');
            }
            $this->allowedValues = [];
            foreach ($object->allowedValues as $element) {
                $this->allowedValues[] = $element;
            }
        }
        return $this;
    }
}
