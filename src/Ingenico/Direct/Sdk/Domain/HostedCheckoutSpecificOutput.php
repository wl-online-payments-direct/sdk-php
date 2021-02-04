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
class HostedCheckoutSpecificOutput extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $hostedCheckoutId;

    /**
     * @var string
     */
    private $variant;

    // Methods
    /**
     * @return string
     */
    public function getHostedCheckoutId()
    {
        return $this->hostedCheckoutId;
    }
    /**
     * @var string
     */
    public function setHostedCheckoutId($value)
    {
        $this->hostedCheckoutId = $value;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }
    /**
     * @var string
     */
    public function setVariant($value)
    {
        $this->variant = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->hostedCheckoutId !== null) {
            $object->hostedCheckoutId = $this->hostedCheckoutId;
        }
        if ($this->variant !== null) {
            $object->variant = $this->variant;
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
        if (property_exists($object, 'hostedCheckoutId')) {
            $this->hostedCheckoutId = $object->hostedCheckoutId;
        }
        if (property_exists($object, 'variant')) {
            $this->variant = $object->variant;
        }
        return $this;
    }
}
