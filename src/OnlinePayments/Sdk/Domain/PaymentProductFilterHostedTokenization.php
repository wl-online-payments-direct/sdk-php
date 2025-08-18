<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProductFilterHostedTokenization extends DataObject
{
    /**
     * @var int[]|null
     */
    public ?array $products = null;

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
     * @return object
     */
    public function toObject(): object
    {
        $object = parent::toObject();
        if (!is_null($this->products)) {
            $object->products = [];
            foreach ($this->products as $element) {
                if (!is_null($element)) {
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
    public function fromObject(object $object): PaymentProductFilterHostedTokenization
    {
        parent::fromObject($object);
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
