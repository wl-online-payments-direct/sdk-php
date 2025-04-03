<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ExternalTokenLinked extends DataObject
{
    /**
     * @var string
     */
    public $ComputedToken = null;

    /**
     * @var string
     * @deprecated Use the field ComputedToken instead.
     */
    public $GTSComputedToken = null;

    /**
     * @var string
     */
    public $GeneratedToken = null;

    /**
     * @return string
     */
    public function getComputedToken()
    {
        return $this->ComputedToken;
    }

    /**
     * @param string
     */
    public function setComputedToken($value)
    {
        $this->ComputedToken = $value;
    }

    /**
     * @return string
     * @deprecated Use the field ComputedToken instead.
     */
    public function getGTSComputedToken()
    {
        return $this->GTSComputedToken;
    }

    /**
     * @param string
     * @deprecated Use the field ComputedToken instead.
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
     * @param string
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
        if (!is_null($this->ComputedToken)) {
            $object->ComputedToken = $this->ComputedToken;
        }
        if (!is_null($this->GTSComputedToken)) {
            $object->GTSComputedToken = $this->GTSComputedToken;
        }
        if (!is_null($this->GeneratedToken)) {
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
