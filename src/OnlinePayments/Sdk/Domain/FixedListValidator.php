<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class FixedListValidator extends DataObject
{
    /**
     * @var string[]|null
     */
    public ?array $allowedValues = null;

    /**
     * @return string[]|null
     */
    public function getAllowedValues(): ?array
    {
        return $this->allowedValues;
    }

    /**
     * @param string[]|null $value
     */
    public function setAllowedValues(?array $value): void
    {
        $this->allowedValues = $value;
    }

    /**
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->allowedValues)) {
            $object->allowedValues = [];
            foreach ($this->allowedValues as $element) {
                if (!is_null($element)) {
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
    public function fromObject(object $object): FixedListValidator
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
