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
class ContactDetails extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $faxNumber;

    /**
     * @var string
     */
    private $mobilePhoneNumber;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $workPhoneNumber;

    // Methods
    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
        if ($this->emailAddress !== null) {
            $object->emailAddress = $this->emailAddress;
        }
        if ($this->faxNumber !== null) {
            $object->faxNumber = $this->faxNumber;
        }
        if ($this->mobilePhoneNumber !== null) {
            $object->mobilePhoneNumber = $this->mobilePhoneNumber;
        }
        if ($this->phoneNumber !== null) {
            $object->phoneNumber = $this->phoneNumber;
        }
        if ($this->workPhoneNumber !== null) {
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
