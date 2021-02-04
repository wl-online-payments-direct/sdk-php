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
class ExternalTokenLinked extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $GTSComputedToken;

    // Methods
    /**
     * @return string
     */
    public function getGTSComputedToken()
    {
        return $this->GTSComputedToken;
    }
    /**
     * @var string
     */
    public function setGTSComputedToken($value)
    {
        $this->GTSComputedToken = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->GTSComputedToken !== null) {
            $object->GTSComputedToken = $this->GTSComputedToken;
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
        if (property_exists($object, 'GTSComputedToken')) {
            $this->GTSComputedToken = $object->GTSComputedToken;
        }
        return $this;
    }
}
