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
class DirectoryEntry extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $issuerId;

    /**
     * @var string
     */
    private $issuerList;

    /**
     * @var string
     */
    private $issuerName;

    // Methods
    /**
     * @return string
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }
    /**
     * @var string
     */
    public function setIssuerId($value)
    {
        $this->issuerId = $value;
    }

    /**
     * @return string
     */
    public function getIssuerList()
    {
        return $this->issuerList;
    }
    /**
     * @var string
     */
    public function setIssuerList($value)
    {
        $this->issuerList = $value;
    }

    /**
     * @return string
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }
    /**
     * @var string
     */
    public function setIssuerName($value)
    {
        $this->issuerName = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->issuerId !== null) {
            $object->issuerId = $this->issuerId;
        }
        if ($this->issuerList !== null) {
            $object->issuerList = $this->issuerList;
        }
        if ($this->issuerName !== null) {
            $object->issuerName = $this->issuerName;
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
        if (property_exists($object, 'issuerId')) {
            $this->issuerId = $object->issuerId;
        }
        if (property_exists($object, 'issuerList')) {
            $this->issuerList = $object->issuerList;
        }
        if (property_exists($object, 'issuerName')) {
            $this->issuerName = $object->issuerName;
        }
        return $this;
    }
}
