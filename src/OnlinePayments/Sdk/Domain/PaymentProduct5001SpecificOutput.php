<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class PaymentProduct5001SpecificOutput extends DataObject
{
    /**
     * @var string
     */
    public $accountNumber = null;

    /**
     * @var string
     */
    public $authorisationCode = null;

    /**
     * @var string
     */
    public $liability = null;

    /**
     * @var string
     */
    public $mobilePhoneNumber = null;

    /**
     * @var string
     */
    public $operationCode = null;

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string
     */
    public function setAccountNumber($value)
    {
        $this->accountNumber = $value;
    }

    /**
     * @return string
     */
    public function getAuthorisationCode()
    {
        return $this->authorisationCode;
    }

    /**
     * @param string
     */
    public function setAuthorisationCode($value)
    {
        $this->authorisationCode = $value;
    }

    /**
     * @return string
     */
    public function getLiability()
    {
        return $this->liability;
    }

    /**
     * @param string
     */
    public function setLiability($value)
    {
        $this->liability = $value;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * @param string
     */
    public function setMobilePhoneNumber($value)
    {
        $this->mobilePhoneNumber = $value;
    }

    /**
     * @return string
     */
    public function getOperationCode()
    {
        return $this->operationCode;
    }

    /**
     * @param string
     */
    public function setOperationCode($value)
    {
        $this->operationCode = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->accountNumber)) {
            $object->accountNumber = $this->accountNumber;
        }
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->liability)) {
            $object->liability = $this->liability;
        }
        if (!is_null($this->mobilePhoneNumber)) {
            $object->mobilePhoneNumber = $this->mobilePhoneNumber;
        }
        if (!is_null($this->operationCode)) {
            $object->operationCode = $this->operationCode;
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
        if (property_exists($object, 'accountNumber')) {
            $this->accountNumber = $object->accountNumber;
        }
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'liability')) {
            $this->liability = $object->liability;
        }
        if (property_exists($object, 'mobilePhoneNumber')) {
            $this->mobilePhoneNumber = $object->mobilePhoneNumber;
        }
        if (property_exists($object, 'operationCode')) {
            $this->operationCode = $object->operationCode;
        }
        return $this;
    }
}
