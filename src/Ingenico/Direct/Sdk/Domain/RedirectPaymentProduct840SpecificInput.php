<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class RedirectPaymentProduct840SpecificInput extends DataObject
{
    // Properties
    /**
     * @var bool
     */
    private $addressSelectionAtPayPal;

    // Methods
    /**
     * @return bool
     */
    public function getAddressSelectionAtPayPal()
    {
        return $this->addressSelectionAtPayPal;
    }
    /**
     * @var bool
     */
    public function setAddressSelectionAtPayPal($value)
    {
        $this->addressSelectionAtPayPal = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->addressSelectionAtPayPal !== null) {
            $object->addressSelectionAtPayPal = $this->addressSelectionAtPayPal;
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
        if (property_exists($object, 'addressSelectionAtPayPal')) {
            $this->addressSelectionAtPayPal = $object->addressSelectionAtPayPal;
        }
        return $this;
    }
}
