<?php
/*
 * This file was automatically generated.
 */
namespace OnlinePayments\Sdk\Domain;

use UnexpectedValueException;

/**
 * @package OnlinePayments\Sdk\Domain
 */
class ContactDetails extends DataObject
{
    /**
     * @var string
     */
    public $emailAddress = null;

    /**
     * @var string
     */
    public $faxNumber = null;

    /**
     * @var string
     */
    public $mobilePhoneNumber = null;

    /**
     * @var string
     */
    public $phoneNumber = null;

    /**
     * @var string
     */
    public $workPhoneNumber = null;

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string
     */
    public function setEmailAddress($value)
    {
        $this->emailAddress = $value;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string
     */
    public function setFaxNumber($value)
    {
        $this->faxNumber = $value;
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
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string
     */
    public function setPhoneNumber($value)
    {
        $this->phoneNumber = $value;
    }

    /**
     * @return string
     */
    public function getWorkPhoneNumber()
    {
        return $this->workPhoneNumber;
    }

    /**
     * @param string
     */
    public function setWorkPhoneNumber($value)
    {
        $this->workPhoneNumber = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->emailAddress)) {
            $object->emailAddress = $this->emailAddress;
        }
        if (!is_null($this->faxNumber)) {
            $object->faxNumber = $this->faxNumber;
        }
        if (!is_null($this->mobilePhoneNumber)) {
            $object->mobilePhoneNumber = $this->mobilePhoneNumber;
        }
        if (!is_null($this->phoneNumber)) {
            $object->phoneNumber = $this->phoneNumber;
        }
        if (!is_null($this->workPhoneNumber)) {
            $object->workPhoneNumber = $this->workPhoneNumber;
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
        if (property_exists($object, 'emailAddress')) {
            $this->emailAddress = $object->emailAddress;
        }
        if (property_exists($object, 'faxNumber')) {
            $this->faxNumber = $object->faxNumber;
        }
        if (property_exists($object, 'mobilePhoneNumber')) {
            $this->mobilePhoneNumber = $object->mobilePhoneNumber;
        }
        if (property_exists($object, 'phoneNumber')) {
            $this->phoneNumber = $object->phoneNumber;
        }
        if (property_exists($object, 'workPhoneNumber')) {
            $this->workPhoneNumber = $object->workPhoneNumber;
        }
        return $this;
    }
}
