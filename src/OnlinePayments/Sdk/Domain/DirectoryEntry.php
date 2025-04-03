<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class DirectoryEntry extends DataObject
{
    /**
     * @var string
     */
    public $issuerId = null;

    /**
     * @var string
     */
    public $issuerList = null;

    /**
     * @var string
     */
    public $issuerName = null;

    /**
     * @return string
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }

    /**
     * @param string
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
     * @param string
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
     * @param string
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
        if (!is_null($this->issuerId)) {
            $object->issuerId = $this->issuerId;
        }
        if (!is_null($this->issuerList)) {
            $object->issuerList = $this->issuerList;
        }
        if (!is_null($this->issuerName)) {
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
