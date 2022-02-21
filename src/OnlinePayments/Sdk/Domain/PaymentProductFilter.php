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
class PaymentProductFilter extends DataObject
{
    // Properties
    /**
     * @var string[]
     */
    private $groups;

    /**
     * @var int[]
     */
    private $products;

    // Methods
    /**
     * @return string[]
     */
    public function getGroups()
    {
        return $this->groups;
    }
    /**
     * @var string[]
     */
    public function setGroups($value)
    {
        $this->groups = $value;
    }

    /**
     * @return int[]
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @var int[]
     */
    public function setProducts($value)
    {
        $this->products = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->groups !== null) {
            $object->groups = [];
            foreach ($this->groups as $element) {
                if ($element !== null) {
                    $object->groups[] = $element;
                }
            }
        }
        if ($this->products !== null) {
            $object->products = [];
            foreach ($this->products as $element) {
                if ($element !== null) {
                    $object->products[] = $element;
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
        if (property_exists($object, 'groups')) {
            if (!is_array($object->groups) && !is_object($object->groups)) {
                throw new UnexpectedValueException('value \'' . print_r($object->groups, true) . '\' is not an array or object');
            }
            $this->groups = [];
            foreach ($object->groups as $element) {
                $this->groups[] = $element;
            }
        }
        if (property_exists($object, 'products')) {
            if (!is_array($object->products) && !is_object($object->products)) {
                throw new UnexpectedValueException('value \'' . print_r($object->products, true) . '\' is not an array or object');
            }
            $this->products = [];
            foreach ($object->products as $element) {
                $this->products[] = $element;
            }
        }
        return $this;
    }
}
