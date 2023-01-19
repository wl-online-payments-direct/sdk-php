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
class CalculateSurchargeResponse extends DataObject
{
    // Properties
    /**
     * @var Surcharge[]
     */
    private $surcharges;

    // Methods
    /**
     * @return Surcharge[]
     */
    public function getSurcharges()
    {
        return $this->surcharges;
    }
    /**
     * @var Surcharge[]
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
        if ($this->surcharges !== null) {
            $object->surcharges = [];
            foreach ($this->surcharges as $element) {
                if ($element !== null) {
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
