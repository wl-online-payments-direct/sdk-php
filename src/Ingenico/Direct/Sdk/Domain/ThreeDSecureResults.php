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
class ThreeDSecureResults extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $eci;

    /**
     * @var string
     */
    private $xid;

    // Methods
    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }
    /**
     * @var string
     */
    public function setEci($value)
    {
        $this->eci = $value;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }
    /**
     * @var string
     */
    public function setXid($value)
    {
        $this->xid = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->eci !== null) {
            $object->eci = $this->eci;
        }
        if ($this->xid !== null) {
            $object->xid = $this->xid;
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
        if (property_exists($object, 'eci')) {
            $this->eci = $object->eci;
        }
        if (property_exists($object, 'xid')) {
            $this->xid = $object->xid;
        }
        return $this;
    }
}
