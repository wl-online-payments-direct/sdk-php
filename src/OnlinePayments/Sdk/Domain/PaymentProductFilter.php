<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFilter extends DataObject
{
    /**
     * @var string[]|null
     */
    public ?array $groups = null;

    /**
     * @var int[]|null
     */
    public ?array $products = null;

    /**
     * @return string[]|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * @param string[]|null $value
     */
    public function setGroups(?array $value): void
    {
        $this->groups = $value;
    }

    /**
     * @param string[]|null $value
     * @return $this
     */
    public function withGroups(?array $value): static
    {
        $this->groups = $value;
        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param int[]|null $value
     */
    public function setProducts(?array $value): void
    {
        $this->products = $value;
    }

    /**
     * @param int[]|null $value
     * @return $this
     */
    public function withProducts(?array $value): static
    {
        $this->products = $value;
        return $this;
    }

    /**
     * @return object
     */
    #[\Override]
    public function toObject(): object
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
     *
     * @return $this
     * @throws UnexpectedValueException
     */
    #[\Override]
    public function fromObject(object $object): static
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
