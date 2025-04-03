<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class CalculateSurchargeResponse extends DataObject
{
    /**
     * @var Surcharge[]
     */
    public $surcharges = null;

    /**
     * @return Surcharge[]
     */
    public function getSurcharges()
    {
        return $this->surcharges;
    }

    /**
     * @param Surcharge[]
     */
    public function setSurcharges($value)
    {
        $this->surcharges = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->surcharges)) {
            $object->surcharges = [];
            foreach ($this->surcharges as $element) {
                if (!is_null($element)) {
                    $object->surcharges[] = $element->toObject();
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
        if (property_exists($object, 'surcharges')) {
            if (!is_array($object->surcharges) && !is_object($object->surcharges)) {
                throw new UnexpectedValueException('value \'' . print_r($object->surcharges, true) . '\' is not an array or object');
            }
            $this->surcharges = [];
            foreach ($object->surcharges as $element) {
                $value = new Surcharge();
                $this->surcharges[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
