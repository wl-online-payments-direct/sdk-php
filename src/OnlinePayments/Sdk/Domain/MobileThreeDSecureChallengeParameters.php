<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class MobileThreeDSecureChallengeParameters extends DataObject
{
    /**
     * @var string
     */
    public $acsReferenceNumber = null;

    /**
     * @var string
     */
    public $acsSignedContent = null;

    /**
     * @var string
     */
    public $acsTransactionId = null;

    /**
     * @var string
     */
    public $threeDServerTransactionId = null;

    /**
     * @return string
     */
    public function getAcsReferenceNumber()
    {
        return $this->acsReferenceNumber;
    }

    /**
     * @param string
     */
    public function setAcsReferenceNumber($value)
    {
        $this->acsReferenceNumber = $value;
    }

    /**
     * @return string
     */
    public function getAcsSignedContent()
    {
        return $this->acsSignedContent;
    }

    /**
     * @param string
     */
    public function setAcsSignedContent($value)
    {
        $this->acsSignedContent = $value;
    }

    /**
     * @return string
     */
    public function getAcsTransactionId()
    {
        return $this->acsTransactionId;
    }

    /**
     * @param string
     */
    public function setAcsTransactionId($value)
    {
        $this->acsTransactionId = $value;
    }

    /**
     * @return string
     */
    public function getThreeDServerTransactionId()
    {
        return $this->threeDServerTransactionId;
    }

    /**
     * @param string
     */
    public function setThreeDServerTransactionId($value)
    {
        $this->threeDServerTransactionId = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->acsReferenceNumber)) {
            $object->acsReferenceNumber = $this->acsReferenceNumber;
        }
        if (!is_null($this->acsSignedContent)) {
            $object->acsSignedContent = $this->acsSignedContent;
        }
        if (!is_null($this->acsTransactionId)) {
            $object->acsTransactionId = $this->acsTransactionId;
        }
        if (!is_null($this->threeDServerTransactionId)) {
            $object->threeDServerTransactionId = $this->threeDServerTransactionId;
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
        if (property_exists($object, 'acsReferenceNumber')) {
            $this->acsReferenceNumber = $object->acsReferenceNumber;
        }
        if (property_exists($object, 'acsSignedContent')) {
            $this->acsSignedContent = $object->acsSignedContent;
        }
        if (property_exists($object, 'acsTransactionId')) {
            $this->acsTransactionId = $object->acsTransactionId;
        }
        if (property_exists($object, 'threeDServerTransactionId')) {
            $this->threeDServerTransactionId = $object->threeDServerTransactionId;
        }
        return $this;
    }
}
