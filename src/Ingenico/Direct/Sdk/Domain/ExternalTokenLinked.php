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
    private $ComputedToken;

    /**
     * @var string
     */
    private $GTSComputedToken;

    /**
     * @var string
     */
    private $GeneratedToken;

    // Methods
    /**
     * @return string
     */
    public function getComputedToken()
    {
        return $this->ComputedToken;
    }
    /**
     * @var string
     */
    public function setComputedToken($value)
    {
        $this->ComputedToken = $value;
    }

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
     * @return string
     */
    public function getGeneratedToken()
    {
        return $this->GeneratedToken;
    }
    /**
     * @var string
     */
    public function setGeneratedToken($value)
    {
        $this->GeneratedToken = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->ComputedToken !== null) {
            $object->ComputedToken = $this->ComputedToken;
        }
        if ($this->GTSComputedToken !== null) {
            $object->GTSComputedToken = $this->GTSComputedToken;
        }
        if ($this->GeneratedToken !== null) {
            $object->GeneratedToken = $this->GeneratedToken;
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
        if (property_exists($object, 'ComputedToken')) {
            $this->ComputedToken = $object->ComputedToken;
        }
        if (property_exists($object, 'GTSComputedToken')) {
            $this->GTSComputedToken = $object->GTSComputedToken;
        }
        if (property_exists($object, 'GeneratedToken')) {
            $this->GeneratedToken = $object->GeneratedToken;
        }
        return $this;
    }
}
